<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::latest()->paginate(15);
        return view('admin.course.index', compact('courses'));
    }

    public function create(){
        return view('admin.course.create');
    }

    public function courseStore(Request $request){
        $request->validate([
            'title' => 'required',
            'tag' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Course::create($input);

        return redirect()->route('course')->with('success','Course created successfully.');
    }
}
