<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Profile;
class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
       $user=Auth::user();
       $id=Auth::id();
       if ($user-> profile == null) {
          $profile=Profile ::create([
            'province'=>'kartoum',
            'user_id'=>$id,
             'gender'=>'male',
             'bio'=>'hello world',
             'facebook'=>'http://www.facebook.com']);
        }
       return view('users.profile')->with('user',$user);
    }


    public function update(Request $request)
    {
      $this->validate($request,[
        'province'=>'required ',
         'gender'=>'required',
         'bio'=>'required'
       ]);
       $user=Auth::user();
       $user->profile->province = $request->province;
       $user->profile->gender = $request->gender;
       $user->profile->bio = $request->bio;
       $user->save();
       $user->profile->save();
    //    dd($request->all());
       return redirect()->back();
    }

}
