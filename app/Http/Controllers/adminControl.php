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

    function create(Request $req)
    {
        $member = new Project ;
        $member->ptype = $req->ptype ;
        $member->pname = $req->pname ;
        $member->pleader = $req->pleader ;
        $member->save();

        return redirect('/createproject');
    }
    
}
