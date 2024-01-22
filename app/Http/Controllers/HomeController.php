<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $show=TestModel::all();
        return view('home',compact('show'));
    }

    public function add()
    {
        return view('addproduct');
    }
    public function store(Request $request){
        $store= new TestModel;
        $store->name=$request->input('name');
        $store->description=$request->input('description');
        $filename=time(). $request->file('image')->getClientOriginalName();
        $path=$request->file('image')->storeAs('images',$filename,'public');
        $store->image='/storage/' .$path;
        $store->save();
        return redirect('home');
    }
    public function edit($id){
        $edit=TestModel::find($id);
        return view('editproduct',compact('edit'));
    }
    public function update(Request $request,$id){
        $update=TestModel::find($id);
        $update->name=$request->input('name');
        $update->description=$request->input('description');
        if($request->file('image')!=null){
            $filename=time(). $request->file('image')->getClientOriginalName();
            $path=$request->file('image')->storeAs('images',$filename,'public');
            $update->image='/storage/' .$path; 
        }
        $update->save();
        return redirect('home');
    }
    public function delete($id){
        TestModel::destroy($id);
        return back();
    }
}
