<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'gender' => 'required',
            'image' => 'required'

        ]);


        $fileName = $request->file('image')->getClientOriginalName();
        $image = $request->file('image')->storeAs('images', $fileName);
        
        DB::table('customers')->insert([

            'name' =>$request->input('name'),
            'email' =>$request->input('email'),
            'password' =>$request->input('password'),
            'gender' =>$request->input('gender'),
            'image' => $image
        ]);
  
        return redirect('login')->with('status','register succesufully');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('customers')->where('id',$id)->get();
        return view('update',['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'gender' => 'required',
            'image' => 'required'

        ]);


        $fileName = $request->file('image')->getClientOriginalName();
        $image = $request->file('image')->storeAs('images', $fileName);
        
        DB::table('customers')->where('id',$id)->update([

            'name' =>$request->input('name'),
            'email' =>$request->input('email'),
            'password' =>$request->input('password'),
            'gender' =>$request->input('gender'),
            'image' => $image
        ]);
  
        return redirect('admin_dashboard');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('customers')->where('id',$id)->delete();
        return redirect('admin_dashboard');
    }
}
