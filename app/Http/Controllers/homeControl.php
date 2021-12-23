<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\User;
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
        $x=User::all();
        return view('member.projectdetail',['member'=>$data],['x'=>$x]);
    }

    function updatedetails($id)
    {
        $data=Project::find($id);
        $x=User::all();
        return view ('member.update',['disp'=>$data],['member'=>$x]);
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
        $member->member1 = $req->pmember1 ;
        $member->member2 = $req->pmember2 ;
        $member->save();

        return redirect('/projectdetail');

    }

    function view($id)
    {
        $data=Project::find($id);
        return view ('member.viewproject',['x'=>$data]);
    }
}
