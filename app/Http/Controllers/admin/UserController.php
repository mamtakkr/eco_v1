<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function user_show()
    {
        $users=User::where('user_type','user')->get();
        // dd($users);
        return view('admin.users.user_show', compact('users'));
    }
    
    public function vendor_show()
    {
        $vendors=User::where('user_type','vendor')->get();
        // dd($vendors);
        return view('admin.users.vendor_show', compact('vendors'));
    }

    public function vendor_status_update(Request $request){
        if($request->mode == 'true'){
            User::where('id',$request->id)->update(['approved_status'=>'approved']);
        }else{
            User::where('id',$request->id)->update(['approved_status'=>'unapproved']);
        }
        return response()->json(['msg'=>'Successfully Updated Status', 'status'=>true]);
    }

    
}
