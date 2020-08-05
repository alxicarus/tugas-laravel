<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

class homeControllers extends Controller{
    public function index(){
        return view('depan');
    }
    public function dataTables(){
        return view('data-tables');
    }
}