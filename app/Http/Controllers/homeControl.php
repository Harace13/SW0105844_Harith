<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;
use Auth;
class homeControl extends Controller
{
    function index()
    {
        return view('home');
    }

    public function redirectFunct()
    {
        $typeuser=Auth::user()->usertype;

        if($typeuser =='1')
        {
            return view('admin.adminpage');
        }

        else
        {
            return view('home');
        }
    }

    function detail()
    {
        $data=Project::all();
        return view('projectdetail',['member'=>$data]);
    }

    function updatedetails($id)
    {
        $data=Project::find($id);
        return view ('update',['disp'=>$data]);
    }

    function updatepdetails(Request $req)
    {
        $member=Project::find($req->id);
        $member->startDate = $req->startDate ;
        $member->endDate = $req->endDate ;
        $member->duration = $req->duration ;
        $member->cost = $req->cost ;
        $member->client = $req->client ;
        $member->stage = $req->stage ;
        $member->status = $req->status ;
        $member->save();

        return redirect('/projectdetail');

    }

    function view($id)
    {
        $data=Project::find($id);
        return view ('viewproject',['x'=>$data]);
    }
}
