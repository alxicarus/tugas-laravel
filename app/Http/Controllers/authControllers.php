<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

class authControllers extends Controller{
    public function index(){
        return view('daftar');
    }
    public function welcome(){
        return view('welcome2');
    }
}