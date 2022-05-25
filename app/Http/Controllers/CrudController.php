<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;

class CrudController extends Controller
{


// public function show(){
//     return view('layout.frontend-master');
// }


    public function show(){
        $crud = Crud::all();
        $restoreData = Crud::onlyTrashed()->get();
        return view('show',compact('crud','restoreData'));
    }
    public function add(){
        return view('add');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|min:5',
            'email' => 'required',
            'phone' => 'required',
        ],[
            'name.required'=>'Name na dile submit nibo na',
            'name.min'=>'minimum 5ta char likte hobe',
            'email.required'=>'Email na dile submit nibo na',
            'phone.required'=>'Phone na dile submit nibo na',
        ]
    );

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

    public function restore($id){
        Crud::withTrashed()->find($id)->restore();
        return redirect()->back();
    }
    public function pDelete($id)
    {
        Crud::onlyTrashed()->withTrashed()->find($id)->forceDelete();
        return redirect()->back();
    }
}
