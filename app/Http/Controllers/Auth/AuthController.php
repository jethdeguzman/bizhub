<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\UserRepository as Users;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */

    protected $redirectPath = '/';

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'company_name' => 'required|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'type' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'company_name' => $data['company_name'],
            'company_slug' => str_slug($data['company_name'], '-'),
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'type' => $data['type']
        ]);
    }

    public function postRegister(Request $request, Users $user)
    {
        
        $validator = $this->validator($request->all());
        
        if ($validator->fails()) {
            return redirect(url('/auth/register?type='.$request->input('type')))->withErrors($validator)->withInput();
        }
        
        Auth::login($this->create($request->all()));  

        $user = $user->find(Auth::user()->id);

        if($user->type == 1){
            return redirect(url($this->redirectPath.'resellers'));      
        }

        return redirect(url($this->redirectPath.'suppliers'));

    }

}
