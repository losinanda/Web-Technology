<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Form;

class HomeController extends Controller
{
    //
    public function index() {
        return view('homepage');
    }
    public function get_form () {
        $data = Form::all();
        // dd($data);
        return view('form', ['form' => $data]);
    }

    public function get_doctor (){
        $data = Doctor::all();
        return view('doctorlist', ['doctor' => $data]);
    }
}