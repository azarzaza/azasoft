<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Models\Employee;
use App\Role;
use Validator;
use Eloquent;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use DB;
use Mail;

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
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }
    
    public function showRegistrationForm()
    {
        $roleCount = Role::count();
		if($roleCount != 0) {
			$userCount = User::count();
			if($userCount == 0) {
				return view('auth.register');
			} else {
				return redirect('login');
			}
		} else {
			return view('errors.error', [
				'title' => 'Migration not completed',
				'message' => 'Please run command <code>php artisan db:seed</code> to generate required table data.',
			]);
		}
    }
    
    public function showLoginForm()
    {
		$roleCount = Role::count();
		if($roleCount != 0) {
			$userCount = User::count();
			if($userCount == 0) {
				return redirect('register');
			} else {
				return view('auth.login');
			}
		} else {
			return view('errors.error', [
				'title' => 'Migration not completed',
				'message' => 'Please run command <code>php artisan db:seed</code> to generate required table data.',
			]);
		}
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
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
        // TODO: This is Not Standard. Need to find alternative
        Eloquent::unguard();
        
        $employee = Employee::create([
            'name' => $data['name'],
            'designation' => "Super Admin",
            'mobile' => "8888888888",
            'mobile2' => "",
            'email' => $data['email'],
            'gender' => 'Male',
            'dept' => "1",
            'city' => "Pune",
            'address' => "Karve nagar, Pune 411030",
            'about' => "About user / biography",
            'date_birth' => date("Y-m-d"),
            'date_hire' => date("Y-m-d"),
            'date_left' => date("Y-m-d"),
            'salary_cur' => 0,
        ]);
        
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'context_id' => $employee->id,
            'type' => "Employee",
        ]);
        $role = Role::where('name', 'SUPER_ADMIN')->first();
        $user->attachRole($role);
    
        return $user;
    }

    public function register(Request $request) {
      $input = $request->all();
      $validator = $this->validator($input);

      if ($validator->passes()){
        $user = $this->create($input)->toArray();
        $user['link'] = str_random(30);

        DB::table('user_activations')->insert(['id_user'=>$user['id'],'token'=>$user['link']]);

        Mail::send('emails.activation', $user, function($message) use ($user){
          $message->to($user['email']);
          $message->subject('azasoft solution - Activation Code');
        });
        return redirect()->to('login')->with('success',"We sent activation code. Please check your mail.");
      }
      return back()->with('errors',$validator->errors());
    }

    public function userActivation($token){
      $check = DB::table('user_activations')->where('token',$token)->first();
      if(!is_null($check)){
        $user = User::find($check->id_user);
        if ($user->is_activated ==1){
          return redirect()->to('login')->with('success',"user are already actived.");

        }
        $user->update(['is_activated' => 1]);
        DB::table('user_activations')->where('token',$token)->delete();
        return redirect()->to('login')->with('success',"user active successfully.");
      }
      return redirect()->to('login')->with('Warning',"your token is invalid");
    }
}
