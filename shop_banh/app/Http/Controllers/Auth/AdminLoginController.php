<?php

 

namespace App\Http\Controllers\Auth;

 

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Auth;
 

class AdminLoginController extends Controller

{

    /*

    |--------------------------------------------------------------------------

    | Login Controller

    |--------------------------------------------------------------------------

    |

    | This controller handles authenticating users for the application and

    | redirecting them to your home screen. The controller uses a trait

    | to conveniently provide its functionality to your applications.

    |

    */

 

    use AuthenticatesUsers;

 

    protected $guard = 'admin';

 

    /**

     * Where to redirect users after login.

     *

     * @var string

     */

    protected $redirectTo = '/home';

 

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    // public function __construct()

    // {

    //     // $this->middleware('guest')->except('logout');//tai sao
    //      // $this->middleware('auth:admin');

    // }
    public function __construct() 
    {
        // $this->middleware('admin')->except('logout');
    }

 

    public function showLoginForm()
    {

        return view('auth.adminLogin');

    }

 

    public function login(Request $request)

    {

        if (auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {

            // dd(auth()->guard('admin')->user());
            return redirect()->route('dashboard');

        } 

        return back()->withErrors(['email' => 'Email or password are wrong.']);

    }

    public function logout(Request $request){
       Auth::guard('admin')->logout();
        return redirect()->route('adminlogin');
    }

}