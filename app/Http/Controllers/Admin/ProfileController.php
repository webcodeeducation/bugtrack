<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bug;
use App\Models\Project;

class ProfileController extends Controller
{
    public function dashboard()
    {
        $totalBugs = Bug::count();
        $activeBugs = Bug::where('status',1)->count();
        $resolvedBugs = Bug::where('status',0)->count();
        $totalProjects = Project::count();
        $data=[
            'title'=>'Dashboard',
            'totalBugs' => $totalBugs,
            'activeBugs' => $activeBugs,
            'resolvedBugs' => $resolvedBugs,
            'totalProjects' => $totalProjects
        ];
        return view('admin.dashboard',$data);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('getLogin')->with('success','You have been Logged Out Successfully !!');
    }
}
