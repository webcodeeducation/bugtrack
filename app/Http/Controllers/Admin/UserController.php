<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

  public function create()
    {
        $url = url('/admin/users');
        $data = compact('url');
        return view('/admin/users/form')->with($data);
    }
    public function index()
      {
            $data=[
            'title'=>'Users' , 'users'=>User::all()
        ];
        return view('admin.users.index',$data);
      }

      public function plist()
      {
            $data=[
            'title'=>'Users'
        ];
        return view('admin.projects.plist',$data);
      }


    public function store(Request $request)
    {

        $user = new User;  
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = md5($request['password']);

        $user->save();

        return redirect('/admin/users');
    }

      public function delete($id)
      {

          $user = User::find($id);

          if(!is_null($user))
          {
              $user->delete();   
          }

          return redirect('/admin/users');
      }


      public function edit($id)
    {
       
        
        $user = User::find($id);

        if(is_null($user))
        {
            return redirect('/admin/users'); 
        }

        else
        {
            
            $url = url ('/admin/user/update') ."/". $id;
            $data = compact('user','url');
            return view('/admin/users/form')->with($data);
        }
    }


    public function update($id, Request $request)
    {
        
        $user = User::find($id);


        $user->name = $request['name'];
        $user->email = $request['email'];

        $user->save();
        return redirect('/admin/users');
    }

}
 