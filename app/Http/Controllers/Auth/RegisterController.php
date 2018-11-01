<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'city' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'honorific' => 'nullable|string|max:12',
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
            'pronouns' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:2',
            'username' => 'required|string|max:255|unique:users',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'city' => $data['city'],
            'country' => $data['country'],
            'email' => $data['email'],
            'honorific' => $data['honorific'],
            'name' => $data['name'],
            'password' => Hash::make($data['password']),
            'pronouns' => $data['pronouns'],
            'state' => $data['state'],
            'username' => $data['username'],
        ]);
    }
}
