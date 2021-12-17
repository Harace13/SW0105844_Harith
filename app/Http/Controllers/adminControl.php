<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project_manager;

class adminControl extends Controller
{
    public function createpage()
    {
        $data=user::all();
        return view('admin.createpage',['member'=>$data]);
    }

    function create(Request $req)
    {
        $member = new Project_manager ;
        $member->ptype = $req->ptype ;
        $member->pname = $req->pname ;
        $member->id = $req->pleader ;
        $member->save();

        return redirect('/createproject');
    }
    
    function show()
    {
        $data=user::all();
        return view('admin.adminlist',['member'=>$data]);
        
    }

    function managepage()
    {
        $data = User::join('project_manager','project_manager.id','=','users.id')
                                ->get(['users.name','project_manager.ptype','project_manager.pname']);

        return view('admin.manageproj', compact('data'));
    }
}
