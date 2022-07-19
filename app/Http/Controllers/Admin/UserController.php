<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Services\MailService;



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
        session::push('users', collect($request->only('name','email','address','password','facebook','youtube')));
        return redirect()->route('admin.user.index');
    }

    public function formSendMail(Request $request)
    {
        $input = $request->all();
        $collection = $this->getUsers();
        $user = $collection->where('email', $input['mail']);
        $this->mailService->sendUserProfile($user);
        return redirect()->back()->with("gửi mail thành công");
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
