<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;


class BookingController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'booking_type' => 'required',
        ]);
        
        $booking = new Booking;

        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->booking_type = $request->booking_type;
        $booking->note = $request->note;
        $booking->save();
        
        return redirect()->route('myhome')->with('success','User created successfully.');
    }
}
