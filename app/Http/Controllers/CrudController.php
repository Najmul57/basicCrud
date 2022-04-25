<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;

class CrudController extends Controller
{
    public function show(){
        $crud = Crud::all();
        return view('show',compact('crud'));
    }
    public function add(){
        return view('add');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $crud = new Crud();
        $crud->name=$request->name;
        $crud->email=$request->email;
        $crud->phone=$request->phone;
        $crud->save();
        return redirect()->back();
    }


    public function edit($id){
        $crud = Crud::find($id);
        return view('edit',compact('crud'));
    }
    public function update(Request $request,$id){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $crud = Crud::find($id);
        $crud->name=$request->name;
        $crud->email=$request->email;
        $crud->phone=$request->phone;
        $crud->save();
        return redirect()->to('/');
    }
    public function delete($id){
        $delete = Crud::find($id);
        $delete->delete();
        return redirect()->back();
    }
}
