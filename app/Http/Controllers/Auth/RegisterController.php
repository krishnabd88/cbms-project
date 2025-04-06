<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |----------------------------------------------------------------------
    | Register Controller
    |----------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default, this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

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
     * Show the registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'business_name' => ['nullable', 'string', 'max:255'],
            'vat_no' => ['nullable', 'string', 'max:50'],
            'tax_no' => ['nullable', 'string', 'max:50'],
            'national_id' => ['nullable', 'string', 'max:50'],
            'mobile' => ['required', 'string', 'max:15'],
            'business_number' => ['nullable', 'string', 'max:50'],
            'tel' => ['nullable', 'string', 'max:50'],
            'gender' => ['nullable', 'string', 'in:male,female,other'],
            'country' => ['nullable', 'string', 'max:100'],
            'state' => ['nullable', 'string', 'max:100'],
            'city' => ['nullable', 'string', 'max:100'],
            'zip' => ['nullable', 'string', 'max:20'],
            'road' => ['nullable', 'string', 'max:100'],
            'area' => ['nullable', 'string', 'max:100'],
            'house_flat' => ['nullable', 'string', 'max:100'],
            'categories' => ['nullable', 'string', 'max:100'],
            'request_product' => ['nullable', 'string', 'max:255'],
            'whatsapp' => ['nullable', 'string', 'max:15'],
            'viber' => ['nullable', 'string', 'max:15'],
            'imo' => ['nullable', 'string', 'max:15'],
            'skype' => ['nullable', 'string', 'max:100'],
            'other_chat' => ['nullable', 'string', 'max:100'],
            'website' => ['nullable', 'string', 'max:255'],
            'notes' => ['nullable', 'string'],
            'admin_notes' => ['nullable', 'string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'business_name' => $data['business_name'] ?? null,
            'vat_no' => $data['vat_no'] ?? null,
            'tax_no' => $data['tax_no'] ?? null,
            'national_id' => $data['national_id'] ?? null,
            'mobile' => $data['mobile'],
            'business_number' => $data['business_number'] ?? null,
            'tel' => $data['tel'] ?? null,
            'gender' => $data['gender'] ?? null,
            'country' => $data['country'] ?? null,
            'state' => $data['state'] ?? null,
            'city' => $data['city'] ?? null,
            'zip' => $data['zip'] ?? null,
            'road' => $data['road'] ?? null,
            'area' => $data['area'] ?? null,
            'house_flat' => $data['house_flat'] ?? null,
            'categories' => $data['categories'] ?? null,
            'request_product' => $data['request_product'] ?? null,
            'whatsapp' => $data['whatsapp'] ?? null,
            'viber' => $data['viber'] ?? null,
            'imo' => $data['imo'] ?? null,
            'skype' => $data['skype'] ?? null,
            'other_chat' => $data['other_chat'] ?? null,
            'website' => $data['website'] ?? null,
            'notes' => $data['notes'] ?? null,
            'admin_notes' => $data['admin_notes'] ?? null,
        ]);
    }

    /**
     * Handle a registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        // Validate the request data
        $this->validator($request->all())->validate();

        // Create the user after validation
        $user = $this->create($request->all());

        // Log the user in
        auth()->login($user);

        // Redirect to the intended page
        return redirect($this->redirectTo);
    }
}
