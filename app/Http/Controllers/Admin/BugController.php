<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bug;
use App\Models\Project;

class BugController extends Controller
{
    public function add(){
        $users = User::where('is_admin',0)->get();
        $projects = Project::get();
        return view('admin/bug_report',compact('users','projects'));
    }

    public function create()
    {
        $url = url('/admin/bugs');
        $message = '<script type="text/JavaScript"> alert("Added")</script>';
        $data = compact('url','message');

        return view('/admin/bugs_edit')->with($data);

    }

    public function view()
    {
        $bugs = Bug::all();
        $message = '<script type="text/JavaScript"> alert("Success") </script>';
        $data = compact('bugs','message');
        return view('/admin/bugs_view')->with($data);

    }

    public function info($id)
    {
        $bug = Bug::find($id);
        $url = url ('/admin/bugs_info') ."/". $id;
        $data = compact('bug','url');
        return view('/admin/bugs_info')->with($data);

    }

    public function store(Request $request)
    {

        $bug = new Bug;
        $bug->status = $request['status'];
        $bug->project_id = $request['project'];
        $bug->created_by = $request['created_by'];
        $bug->description = $request['description'];
        $bug->save();
        $bug->users()->sync($request['members']);
        
        
        $message = '<script type="text/JavaScript"> alert("Added")</script>';
        return redirect('/admin/bugs')->with($message);
    }


      public function delete($id)
      {

          $bug = Bug::find($id);
          $bug->users()->detach();

          if(!is_null($bug))
          {
            $message = '<script type="text/JavaScript"> alert("Delete")</script>';
            $bug->delete();
          }


          return redirect('/admin/bugs')->with($message);
      }


      public function edit($id)
      {


          $bug = Bug::find($id);
          $users = User::where('is_admin',0)->get();
          $projects = Project::get();

          if(is_null($bug))
          {
              return redirect('/admin/bugs');
          }

          else
          {

              $url = url ('/admin/bugs/update') ."/". $id;
              $data = compact('bug','url','users','projects');
              return view('/admin/bug_edit')->with($data);
          }
      }


      public function update($id, Request $request)
      {

          $bug = Bug::find($id);


          $bug->status = $request['status'];
          $bug->project_id = $request['project'];
          $bug->description = $request['description'];
          $bug->save();
          $bug->users()->sync($request['members']);
          echo '<script type="text/JavaScript"> alert("Hello! I am an alert box!!")</script>';
          return redirect('/admin/bugs');
      }


}
