<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;

class adminControl extends Controller
{
    public function createpage()
    {
        $data=user::all();
        return view('admin.createpage',['member'=>$data]);
    }

    public function manageproject()
    {
        $data=Project::paginate(5);
        return view('admin.manageproject',['member'=>$data]);
    }

    function create(Request $req)
    {
        $member = new Project ;
        $member->ptype = $req->ptype ;
        $member->pname = $req->pname ;
        $member->pleader = $req->pleader ;
        $member->save();

        return redirect('/createproject');
    }

    function editproj($id)
    {
        $data=Project::find($id);
        $x=User::all();
        return view ('admin.editproject',['disp'=>$data],['member'=>$x]);
    }

    function updateproj(Request $req)
    {
        $member=Project::find($req->id);
        $member->ptype = $req->ptype ;
        $member->pname = $req->pname ;
        $member->pleader = $req->pleader ;
        $member->save();

        return redirect('/manageproject');

    }

    function viewproject()
    {
        $data=Project::paginate(5);
        return view('admin.viewproj',['member'=>$data]);
    }

    function deleteproj($id)
    {
        $data=project::find($id);
        $data->delete();
        return redirect('/manageproject');
    }
}
