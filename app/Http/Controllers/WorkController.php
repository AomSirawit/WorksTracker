<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Works;
use App\Models\Status;

class WorkController extends Controller
{

    public function Running(){

        $runningWorks = Works::with('status')->where('status_id', 1)->orderBy('created_at', 'desc')->get();


        return view('Running',compact('runningWorks'));

    }

    public function Success(){

        $success = Works::where('status_id',2)->orderBy('created_at', 'desc')->get();

        return view('Success',compact('success'));

    }

    public function Cancle(){

        $cancle = Works::where('status_id',3)->orderBy('created_at', 'desc')->get();

        return view('Cancle',compact('cancle'));

    }


    public function All(){

        $all = Works::all();

        return view('All',compact('all'));

    }

    public function Add(){
        return view('AddWorks');
    }

    public function store(Request $request){

        $validate = $request->validate([
            'title' => 'required|string|max:255',
            'status_id' => 'required|integer',
            'progress' => 'required|integer',
            
        ]);

        $Works = new Works();
        $Works->title = $validate['title'];
        $Works->status_id = $validate['status_id'];
        $Works->progress = $validate['progress'];
        $Works->save();

        return redirect()->route('dashboard');
    }

    public function Edit($id){

        $works = Works::findOrFail($id);
        $status = Status::all();

        return view('EditWorks',compact('works','status'));
    }

    public function Update(Request $request, $id){
        $validate = $request->validate([
            'title' => 'required|string|max:255',
            'status_id' => 'required|integer',
            'progress' => 'required|integer'
        ]);

        $work = Works::findOrFail($id);

        $work->title = $validate['title'];
        $work->status_id = $validate['status_id'];
        $work->progress = $validate['progress'];
        $work->save();

        return redirect()->route('dashboard');
    }
    
    public function Destroy($id){
        $work = Works::findOrFail($id);

        $work->delete();

        return redirect()->back();
    }
}
