<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\CustomerUsers;
use App\Models\edit_profile;

class LoginAuth extends Controller
{
    public function signinAdminCheck(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('signin-admin')->withErrors($validator)->withInput();
        }

        $credentials = [
            'email' => $req->input('username'),
            'password' => $req->input('password'),
        ];

        if (Auth::attempt($credentials)) {
            // Authentication successful, the user is logged in.
            $user = Auth::user();

            if ($user->user_type == 'admin') {
                // User is an admin, proceed to the dashboard.
                $req->session()->put('usertype', 'admin');
                $req->session()->put('username', $user->name);
                $invoices = Invoice::where('user_id', $user->id)->get();
                return view('dashboard', compact('invoices'))->with('status', 'Login');
            } else {
                // User is not an admin, show an error message.
                Auth::logout(); // Log out the user
                return redirect('/')->with('error', 'You are not authorized as an admin.')->withInput();
            }
        } else {
            // Authentication failed, show an error message.
            return redirect('/')->with('error', 'Invalid credentials!')->withInput();
        }
    }
    public function singupPage(Request $req)
    {
        return view('signup-customer');
    }

    public function showDashboard()
    {
        $invoices = Invoice::where('user_id', auth()->user()->id)
            ->orderBy('InvoiceDate', 'desc')
            ->take(6)
            ->get();

        return view('dashboard', compact('invoices'));
    }


    public function signupCustomerCheck(Request $req)
    {
        $name = $req->input('name');
        $email = $req->input('email');
        $password = $req->input('password');
        $number = $req->input('number');

        $check_email = User::where('email', $email)->count();
        if ($check_email) {
            return redirect('signup-customer')->with('status', 'Email already in use');
        }

        $hashedPassword = Hash::make($password);

        $customer_users = new User;
        $customer_users->name = $name;
        $customer_users->email = $email;
        $customer_users->password = $hashedPassword;
        $customer_users->number = $number;
        $customer_users->save();

        $req->session()->put('usertype', 'customer');

        return redirect('/');
    }
    public function loginCustomerCheck(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/')->withErrors($validator)->withInput();
        }

        $req->session()->put('usertype', 'customer');

        if (auth()->attempt(request()->only(['email', 'password']))) {
            $user = User::where('id', Auth::user()->id)->value('name');

            $req->session()->put('username', $user);
            $invoices = Invoice::where('user_id', Auth::user()->id)->get();


            return view('dashboard', compact('invoices'));
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
        // if ($user && Hash::check($password, $user->password)) {
        //     $req->session()->regenerate();
        //     $req->session()->put('username', $username);
        //     $req->session()->put('usertype', 'customer');
        //     return redirect('dashboard')->with('status', 'Login successfull');
        // } else {
        //     return back()->withErrors([
        //         'email' => 'The provided credentials do not match our records.',
        //     ])->onlyInput('email');
        // }
    }


    public function accountSetting(Request $req)
    {
        return view('settings');
    }
    public function signOut(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/'); // Redirect to the home page or any other public page
    }


    public function editprofile()
    {
        return view('edit-profile');
    }

    public function editprofilesubmit(Request $req)
    {
        // dd($req->all());
        $data = [
            "tradename" => $req['name'],
            "email" => $req['email'],
            'Gst_no' => $req['gst'],
            "office_address" => $req['address'],
            "state" => $req['state'],
            "pin_code" => $req['pin_code'],
            "number" => $req['number'],
            "pan_no" => $req['pan'],
            "authorised" => $req['authorized'],
            "bank_name" => $req['bank_name'],
            "IFSC" => $req['bank_ifsc'],
            "BankAccount" => $req['bank_account'],
        ];

        // Use updateOrCreate to create or update the profile
        // dd($data, ['user_id' => Auth::user()->id]);
        edit_profile::updateOrCreate(
            ['user_id' => Auth::user()->id],
            $data
        );

        return redirect()->route('profile');
    }
}
