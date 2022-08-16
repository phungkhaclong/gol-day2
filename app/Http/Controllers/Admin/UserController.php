<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Services\MailService;
use Illuminate\Support\Facades\File;
use App\Repositories\User\UserRepository;
use App\Repositories\Role\RoleRepository;
use App\Models\User;

class UserController extends Controller
{
    protected $mailService;
    protected $userRepository;


    public function __construct(UserRepository $userRepository, MailService $mailService, RoleRepository $roleRepository)
    {
        $this->userRepository = $userRepository;
        $this->mailService = $mailService;
        $this->roleRepository = $roleRepository;
    }



    public function index()
    {
        return view('admin.user.index', [
            'users' => $this->userRepository->with('roles')->paginate(),
        ]);
    }

    public function create()
    {
        return view('admin.user.form', [
            'roles' => $this->roleRepository->getAll(),
            'isShow' => false,
        ]);
    }

    public function store(UserRequest $request)
    {
        $data = $request->validated();
        $data['verified_at'] = now();
        $data['type'] = User::TYPE['admin'];
        $data['password'] = Hash::make($data['password']);
        DB::beginTransaction();

        try {
            $user = $this->userRepository->save($data);
            $user->roles()->sync($request->input('role_ids'));
            DB::commit();

            return redirect()->route('admin.user.show', $user->id)->with('message', 'Successful added');
        } catch (\Exception) {
            DB::rollback();

            return redirect()->back()->with('massage', 'error, please try again');
        }
    }

    public function show($id)
    {
        if (! $user = $this->userRepository->findById($id)) {
            abort(404);
        }

        return view('admin.user.form', [
            'user' => $user,
            'roles' => $this->roleRepository->getAll(),
            'isShow' => true,
        ]);
    }

    public function edit($id)
    {
        if (! $user = $this->userRepository->findById($id)) {
            abort(404);
        }

        return view('admin.user.form', [
            'user' => $user,
            'roles' => $this->roleRepository->getAll(),
            'isShow' => false,
        ]);
    }

    public function update(UserRequest $request, $id)
    {
        DB::beginTransaction();

        try {
            $user = $this->userRepository->save($request->validated(), ['id' => $id]);
            $user->roles()->sync($request->input('role_ids'));
            DB::commit();

            return redirect()->route('admin.user.index', $id)->with('message', 'Successful update');
        } catch (\Exception) {
            DB::rollback();

            return redirect()->back()->with('massage', 'error, please try again');
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();

        try {
            $this->userRepository->findById($id)->roles()->detach();
            $this->userRepository->deleteById($id);
            DB::commit();

            return redirect()->route('user.index')->with('message', 'Successful delete');
        } catch (\Exception) {
            DB::rollback();

            return redirect()->back()->with('massage', 'error, please try again');
        }
    }

    private function getUsers()
    {
        return collect(session()->get('users'));
    }

    public function inform_profile()
    {
        return view('admin.mails.inform_user_profile');
    }

    public function formSendMail(Request $request)
    {
        $users = $this->userRepository->getAll();
        $users = $request->email == 'all_user' ? collect($users) : collect($users)->where('email', $request->email);
        $path = public_path('uploads');
        $attachment = $request->file('attachment');

        if (!empty($attachment)) {
            $name = time().'.'.$attachment->getClientOriginalExtension();
            ;
            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }
            $attachment->move($path, $name);
            $filename = $path.'/'.$name;
            foreach ($users as $user) {
                $this->mailService->sendUserProfile($user, $filename);
            }
        } else {
            foreach ($users as $user) {
                $this->mailService->sendUserProfile($user, $filename= '/');
            }
        }
        return redirect()->back()->with('message', 'Gửi mail thành công');
    }

    public function showmail()
    {
        $users = $this->userRepository->getAll();
        return view('admin.mails.sendmail', compact('users'));
    }
}
