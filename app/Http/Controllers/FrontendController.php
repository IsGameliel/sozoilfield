<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class FrontendController extends Controller
{
    public function index(){
        $courses = Course::latest()->paginate(20);
        return view('welcome', compact('courses'));
    }

    public function about(){
        return view('about');
    }

    public function supply(){
        return view('supply');
    }

    public function hse_consultancy(){
        return view('hse_consultancy');
    }

    public function general_contract(){
        return view('general_contract');
    }

    public function inspection_services(){
        return view('inspection_services');
    }

    public function booking_inspection(){
        return view('booking_inspection');
    }

    public function booking_training(){
        return view('booking_training');
    }

    public function contact(){
        return view('contact');
    }

    public function coming(){
        return view('coming_soon');
    }
}
