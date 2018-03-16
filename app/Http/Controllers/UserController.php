<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Yajra\Datatables\Datatables;
use App\User;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $test = User::all();
        return view('test')->with('test',$test);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
       $showr = User::find($id);

        return view('edit')->with('showr',$showr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $response = [];

        $user = User::find($request->id);
        $user->name=$request->name;
         $user->last_name=$request->last_name;
          $user->username=$request->username;
           $user->email=$request->email;
           $user->contact=$request->contact;
          $user->gender=$request->gender;
           $user->dob=$request->dob;
           $user->status=$request->status;

    
        if($user->save()){
            $response["status"] = true;

        }
        else{
            $response["status"] = false;
        }
          return redirect()->action('UserController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       DB::table('users')->where('id',"=",$id)->delete();
    
       return redirect()->back();
    }
}
