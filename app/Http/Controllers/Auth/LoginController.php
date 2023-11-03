<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Language;
use App\Models\Test;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

//    protected $redirectTo = '/';

    protected function authenticated(Request $request)
    {
        $languages = Language::all();
        $tests = Test::all();
        $categories = Category::all();
        if (Auth::user()->role_as == '1') {
            return redirect()->route('Dashboard', [
                'languages' => $languages,
                'tests' => $tests,
                'categories' => $categories,
            ])->with('message', 'welcome to dashboard');
        } else {
//            return back();
//            $url = url();
//            dd($url);
//            $this->getbefprevurl($request);
//            $this->addurltosession($request);
            $previousUrls = Session::get('previous_urls', []);
            $lastElement = end($previousUrls);
            return redirect($lastElement);
//            return redirect()->route('root')->with('status','logged in successfully');
        }
    }

    public function showLoginForm(Request $request)
    {
        $this->addurltosession($request);
        return view('auth.login'); // This returns the login view
    }

    public function addurltosession(Request $request)
    {
        $previousUrls = Session::get('previous_urls', []);
        $previousUrls[] = url()->previous();
        Session::put('previous_urls', $previousUrls);
        // dump($previousUrls);
        // Rest of your logic
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        // Customize the redirect or response after logout
        return back();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
