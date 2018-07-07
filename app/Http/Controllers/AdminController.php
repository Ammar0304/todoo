<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
       public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $user = \Auth::user();
        
    	return view('admin/index', compact('user'));

    }
    //  public function store(){

    // }
    //  public function create(){

    // }
    //  public function show(){

    // }
    //  public function update(){

    // }
    //  public function destroy(){

    // }
    //  public function edit(){

    // }

}
