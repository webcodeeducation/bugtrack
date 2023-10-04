<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;

class ProjectController extends Controller
{
    public function add(){
        $users = User::where('is_admin',0)->get();
        
        return view('admin/project_report',compact('users'));
    }

    public function create()
    {
        $url = url('/admin/projects');
        $message = '<script type="text/JavaScript"> alert("Added")</script>';

        $data = compact('url','message');

        return view('/admin/project_edit')->with($data);

    }

    public function view()
    {
        $projects = Project::all();
        $message = '<script type="text/JavaScript"> alert("Success") </script>';
        $data = compact('projects','message');
        return view('/admin/projects_view')->with($data);

    }

    public function store(Request $request)
    {
        $project = new Project;
        $project->name = $request['name'];
        $project->description = $request['description'];
        $project->started = $request['started'];
        $project->ended = $request['ended'];
        $project->status = $request['status'];
        $project->save();
        $project->users()->sync($request['members']);

        $message = '<script type="text/JavaScript"> alert("Added")</script>';
        return redirect('/admin/projects')->with($message);
    }


      public function delete($id)
      {

          $project = Project::find($id);
          $project->users()->detach();
          if(!is_null($project))
          {
            $message = '<script type="text/JavaScript"> alert("Delete")</script>';
            $project->delete();
          }


          return redirect('/admin/projects')->with($message);
      }


      public function edit($id)
      {


          $project = Project::find($id);
          $users = User::where('is_admin',0)->get();

          if(is_null($project))
          {
              return redirect('/admin/projects');
          }

          else
          {

              $url = url ('/admin/project/update') ."/". $id;
              $data = compact('project','url','users');
              return view('/admin/project_edit')->with($data);
          }
      }


      public function update($id, Request $request)
      {

          $project = Project::find($id);


        $project->name = $request['name'];
        $project->description = $request['description'];
        $project->started = $request['started'];
        $project->ended = $request['ended'];
        $project->status = $request['status'];

          $project->save();
          $project->users()->sync($request['members']);
          echo '<script type="text/JavaScript"> alert("Hello! I am an alert box!!")</script>';
          return redirect('/admin/projects');
      }


}
