<?php

namespace App\Http\Controllers;
use App\Models\Project_manager;
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
        $data=Project_manager::all();
        return view('projectdetail',['member'=>$data]);
    }

    function pdetail(Request $req)
    {
        $member = new Project ;
        $member->startDate = $req->startDate ;
        $member->endDate = $req->endDate ;
        $member->Duration = $req->Duration ;
        $member->Cost = $req->Cost ;
        $member->client = $req->client ;
        $member->stage = $req->stage ;
        $member->status = $req->status ;
        $member->pmID = $req->pname ;
        $member->save();

        return redirect('/');
    }
    
    function viewdetail()
    {
        $data = Project_manager::join('project','project.id','=','project_manager.pmID')
                                ->get(['project.id','project_manager.ptype','project.startDate','project.endDate','project_manager.pname','project.Duration','project.Cost','project.client','project.stage','project.status']);
        
        return view('manage', compact('data'));
    }

    function showpro($id)
    {
        $data=Project::find($id);
        return view ('update',['disp'=>$data]);
    }

    function update(Request $req)
    {
        $member=Project::find($req->id);
        $member->startDate = $req->startDate ;
        $member->endDate = $req->endDate ;
        $member->Duration = $req->Duration ;
        $member->Cost = $req->Cost ;
        $member->client = $req->client ;
        $member->stage = $req->stage ;
        $member->status = $req->status ;
        $member->save();

        return redirect('manageproj');

    }
}
