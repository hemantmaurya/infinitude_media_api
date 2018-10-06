<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 1;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return 1;
        // return print_r($request);
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:50',
            // 'detail' => 'required|max:1100',
            // 'image' => 'mimes:jpeg,jpg|max:1024',
        ]);

        User::create([
            'name' => $request['name'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return back()->withErrors(['login page coming ;)']);
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
    public function edit()
    {
        $user = Auth::user();
        return view('userEdit', ['user'=>$user]);
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


        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:50',
            'detail' => 'required|max:1100',
            // 'image' => 'mimes:jpeg,jpg|max:1024',
        ]);
echo Auth::user()->id;
        $profile = User::find(Auth::user()->id);
        $profile->name = $request['name'];
        $profile->email = $request['email'];
        $profile->details = $request['detail'];

        if(strlen($request['image'])>50){
        $image = $request['image'];  // your base64 encoded
            $image = str_replace('data:image/png;base64,', '', $image);
            $image = str_replace(' ', '+', $image);
            $image_name= Auth::user()->username.'.png';
          echo   $path = public_path() . "/user/images/" . $image_name;
            file_put_contents($path, base64_decode($image));
        }

        $profile->save();

        // if(file_exists($request['image'])){
        // $path = Storage::putFileAs('Admin/Picture', $request->file('image'), $request->user()->username.'.jpg');
        // }



        return back()->withErrors(['']);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
