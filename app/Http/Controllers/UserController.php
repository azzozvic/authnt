<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\User;
use App\Profile;
class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $users=User::all();
        return view('users.index')->with('users',$users);
    }

    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required ',
             'email'=>'required',
             'password'=>'required'
           ]);
           $user=User::create([
            'name'=>$request->name ,
             'email'=>$request->email ,
             'password'=>Hash::make($request->password)
           ]);
           $profile=Profile ::create([
            'province'=>'kartoum',
            'user_id'=>$user->id,
             'gender'=>'male',
             'bio'=>'hello world',
             'facebook'=>'http://www.facebook.com'
            ]);
        return redirect()->route('users');
    }

    public function destroy($id)
    {
        $user=User::find($id);
        $user->profile()->delete($id);
        $user->delete();
        return redirect()->route('users');
    }
}
