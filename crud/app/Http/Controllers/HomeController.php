<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//usa name space
use App\Student;


class HomeController extends Controller
{
    public function index() {

        //Prendere tutti i record dalla tabella
        // $students = Student::all();  //SELECT * FROM students
        // dd($students);


        //WHERE
        // $students= Student::where('id', 1)->get();
        // $students = Student::where('id', '<>', 1)
        //     ->orderBy('name','asc')
        //     ->limit(2)  //limita numero di record
        //     ->get();

        //First
        // $students = Student::where('id', 1)->get()->first();
        // dd($students->name);
        //$students[] = Student::where('id', 1)->get()->first();


        //Find
        //$students = Student::find(2); // è un array di oggetti quindi non va il foreach
        //dd($students->name);

        $students = Student::all();

        $students = $students->find(3);
        dd($students->name);

        return view ('welcome', compact('students'));
    } 
}
