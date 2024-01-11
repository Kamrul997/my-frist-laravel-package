<?php

namespace Crud\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Crud\Models\Home;

class HomeController extends Controller
{
    public function index(){
       $data_list =  Home::orderBy('id','DESC')->paginate(10);
        return view('my-package-crud::index',compact('data_list'));
    }
    public function create(){
        return view('my-package-crud::create');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required|max:255',
            'email' => 'required|max:100|unique:home',
            'phone' => 'required|max:20|unique:home',
            'address' => 'required',
        ]);
        $create = Home::create($request->all());
        if($create){
            return redirect()->route('crud.index')->with('success', 'Entry created successfully.');
        }else{
            return view('my-package-crud::create');
        }
    }
    public function update(Request $request, $id){
        $this->validate($request,[
            'name' => 'required|max:255',
            'email' => 'required|max:100',
            'phone' => 'required|max:20',
            'address' => 'required',
        ]);
        $up = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ];
        $update = Home::where('id',$id)->update($up);
        if($update){
            return redirect()->route('crud.index')->with('success', 'Entry update successfully.');
        }else{
            return redirect()->back();
        }
    }
    public function edit($id){
       $edit_data = Home::find($id);
        return view('my-package-crud::edit',compact('edit_data'));
    }
    public function delete($id){
        Home::find($id)->delete();
        return redirect()->back()->with('success','Entry delete successfully');
    }

}
