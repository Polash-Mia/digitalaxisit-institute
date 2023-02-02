<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    private static $student;

    public static function newStudent($request)
    {
        self::$student  = new Student();

       
        self::$student->name                = $request->name;     
        self::$student->email               = $request->email;        
        self::$student->mobile              = $request->mobile;
        self::$student->address             = $request->address;
        self::$student->education           = $request->education;
        self::$student->course              = $request->course;
        self::$student->payment             = $request->payment;
        self::$student->transaction         = $request->transaction;
       
        self::$student->save();

        return self::$student;
        

    }
}
