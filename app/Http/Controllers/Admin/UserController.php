<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Services\MailService;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $mailService;

    public function __construct(MailService $mailService)
    {
        $this->mailService = $mailService;

    }
    public function index()
    {
        $users = session()->get('users');
        return view('admin.user.index',compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        session::push('users', $request->only('name','email','address','password','facebook','youtube'));
        return redirect()->route('admin.user.index')->with('message','Thêm user thành công');
    }

    public function formSendMail(Request $request)
    {
        $users = $request->email == 'all_user' ? collect(Session::get('users')) : collect(Session::get('users'))->where('email','=', $request->email);

        $path = public_path('uploads');
        $attachment = $request->file('attachment');

        if(!empty($attachment)) {
            $name = time().'.'.$attachment->getClientOriginalExtension();;
            if(!File::exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }
            $attachment->move($path, $name);

            $filename = $path.'/'.$name;
            // dd($users);
            foreach ($users as $user) {
                $this->mailService->sendUserProfile($user, $filename);
            }
        }else {
            foreach ($users as $user) {
                $this->mailService->sendUserProfile($user, $filename= '/');
            }
        }

        return redirect()->back()->with('message','Gửi mail thành công');
    }
    public function showmail(){
        $users = session()->get('users');
        return view('admin.mails.sendmail',compact('users'));
    }
    private function getUsers()
    {
        return collect(session()->get('users'));
    }
    public function inform_profile()
    {

        return view('admin.mails.inform_user_profile');
    }
}
