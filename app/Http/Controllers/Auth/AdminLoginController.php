<?php
namespace App\Http\Controllers\Auth;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminLoginController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('guest:admin')->except('logout');
    // }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required'
      ]);
      // Attempt to log the user in
      if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        // if successful, then redirect to their intended location
        return redirect()->intended(route('ecodeeepis.dashboard'));
      }
      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::logout();
        \Session::flush();

        return redirect('/')->with('message', array(
          'title' => 'Yay!',
          'type' => 'success',
          'msg' => 'You\'re log out.',
        ));
    }
}