<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index(){
       return view('admin.index');
   }

   public function list(){
    return view('admin.list');
}
    public function form(){
    return view('admin.form');
}
    public function calendar(){
    return view('admin.calendar');
}
    public function uiElementsModals(){
    return view('admin.uiElementsModals');
}
}
