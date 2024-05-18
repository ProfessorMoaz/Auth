<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use App\Models\Booking;
use Hash;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function packages()
    {
        return view('packages');
    }

    public function contact()
    {
        return view('contact');
    }
    
    public function home()
    {
        return view('homepage');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)){
            return redirect()->intended('dashboard')->with('message', 'Signed In!');
        }
        return redirect ('/')->with('message', 'Sign In Failed!');
    }

    public function signupsave(Request $request)
    {
        $request->validate([
            'fullName'=>'required',
            'emailAddress'=>'required|email|unique:users,email',
            'userPassword'=>'required',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect ('/')->with('message', 'Account Created Successfully!');
    }
    
    public function create(array $data)
    {
        return User::create([
            'name' => $data['fullName'],
            'email' => $data['emailAddress'],
            'password' => Hash::make($data['userPassword'])
        ]);
    }

    public function dashboard()
    {
        if(Auth::check()){
            $users = User::all();
            return view('dashboard', ['users' => $users]);
        }
        return redirect('/');
    }

    public function booking()
    {
        if(Auth::check()){
            $bookings = Booking::all();
            return view('booking', ['bookings' => $bookings]);
        }
        return redirect('/');
    }

    public function signOut()
    {
        session::flush();
        Auth::logout();
        return redirect('/');
    }

    public function edit(User $user)
    {
        return view('edit', compact('user'));
    }


    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        ]);
        $user->update($request->all());
        return redirect('dashboard')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('dashboard')->with('success', 'User deleted successfully.');
    }

    // for booking
    public function editbooking(Booking $booking)
    {
        return view('editbooking', compact('booking'));
    }


    public function updatebooking(Request $request, Booking $booking)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255,' . $booking->id,
            'datetime' => 'required',
            'destination' => 'required|string|max:255',
            'details' => 'nullable|string|max:1000',
            'status' => 'required|string',
        ]);

        $booking->update([
            'name' => $request->name,
            'email' => $request->email,
            'datetime' => $request->datetime,
            'destination' => $request->destination,
            'details' => $request->details,
            'status' => $request->status,
        ]);

        return redirect('booking')->with('success', 'Booking updated successfully.');
    }


    public function destroybooking(Booking $booking)
    {
        $booking->delete();
        return redirect('booking')->with('success', 'Booking deleted successfully.');
    }
}