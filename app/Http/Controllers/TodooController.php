<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todoo;
// use App\Model\Test;
use Session;

class TodooController extends Controller
{
    public function index(Request $request) {

         $data = Todoo::all();
         
    	return view('todoo/index', compact('data'));

    }
    public function store(Request $request){

         $data = $request->except(['_token','submit','completed']);
         // $data['msql_createdb()-']
         Todoo::create($data);
         Session::flash('success', 'Data Succesfully Inserted');
         return redirect()->back();
    } 
        public function destroy($id){
        $data = Todoo::find($id);

        // dd($data);
        $data->delete($data);
         Session::flash('success', 'Data Succesfully Deleted');

         return redirect()->back();



    }

    public function show($id){

    	$data = Todoo::find($id);
    	 

    	 return view('todoo/update', compact('data'));


    }
    public function edit(Request $request,$id){

    	$data = Todoo::find($id);
        // dd($data);
        $data->text = $request->text;
    	$data->save();
         Session::flash('success', 'Data Succesfully Updated');

        return redirect()->route('todoo.index');

    }

    public function completed($id){
        $data = Todoo::find($id);
        $data['completed'] = 1;
        $data->save();
         Session::flash('success', 'Data Succesfully Completed');

         return redirect()->back();

    }
}
