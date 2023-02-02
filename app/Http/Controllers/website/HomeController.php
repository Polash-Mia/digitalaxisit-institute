<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $student;
    public function index(){
        return view('website.home.index');
    }
    public function about(){
        return view('website.home.about');
    }
    public function course(){
        return view('website.home.course');
    }
    public function contact(){
        return view('website.home.contact');
    }

    public function student(){
        return view('website.student.index');
    }
    public function create(Request $request){
        $this->student = Student::newStudent($request);
        return redirect('/confirm')->with('message', 'Admission Form fillup successfully.');
        
    }
    public function confirm(){
        return view('website.student.confirm');
    }
}
