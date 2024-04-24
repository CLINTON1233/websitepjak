<?php
   
   namespace App\Http\Controllers\Auth;
   
   use App\Http\Controllers\Controller;
   use App\Models\Admin;
   use Illuminate\Http\Request;
   use Illuminate\Support\Facades\Auth;
   
   class AdminAuthController extends Controller
   {
       public function showLoginForm()
       {
           return view('admin.login');
       }
   
       public function login(Request $request)
       {
           $credentials = $request->only('email', 'password');
   
           if (Auth::guard('admin')->attempt($credentials)) {
               // Login berhasil
               return redirect()->intended('/admin/dashboard');
           } else {
               // Login gagal
               return redirect()->back()->withErrors(['email' => 'Email atau password salah']);
           }
       }
   
       public function showkuisForm()
       {
           return view('admin.kuis');
       }
   
       public function kuis(Request $request)
       {
           $validatedData = $request->validate([
               'name' => 'required',
               'email' => 'required|email|unique:admins',
               'password' => 'required|min:6|confirmed',
           ]);
   
          
   
          
       }
       public function dashboard()
        {
           return view('admin.dashboard');
        }
   }