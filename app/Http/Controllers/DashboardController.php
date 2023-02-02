<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $graphics, $webdesigns, $webdevelopments;
   public function index(){
    return view('admin.home.index');
   }
   
   public function graphic()
   {
      $this->graphics=student::latest()->where('course', 'Graphic Design')->get();

      return view('admin.student.graphic',[
      'graphics'=>$this->graphics
   ]);

   }
   public function webdesign()
   {
      $this->webdesigns=student::latest()->where('course', 'Web Design')->get();

      return view('admin.student.webdesign',[
      'webdesigns'=>$this->webdesigns
   ]);

   }
   public function webdevelopment()
   {
      $this->webdevelopments=student::latest()->where('course', 'Web Development')->get();

      return view('admin.student.webdevelopment',[
      'webdevelopments'=>$this->webdevelopments
   ]);

   }
}
