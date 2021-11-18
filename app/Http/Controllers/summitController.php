<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Summit;

use Illuminate\Support\Facades\DB;

class summitController extends Controller
{
    public function summit(){
        return view('frontend.hackthon');
    }

    public function storeHackathonReg(Request $request){
        $this->validate($request, [
            'gname' => 'required',
            'name1' => 'required',
            'name2' => 'required',
            'name3' => 'required',
            'phone' => 'required',
            'gmail' => 'required|email',
            'varsity' => 'required',
            'trid' => 'required',
        ]);
        $summit = Summit::create([
            'gname' => $request->gname,
            'name1' => $request->name1,
            'name2' => $request->name2,
            'name3' => $request->name3,
            'phone' => $request->phone,
            'gmail' => $request->gmail,
            'varsity' => $request->varsity,
            'trid' => $request->trid,

        ]);
        $summit->save();
        session()->flash('message', 'Registration has been  successfully Done for Hackthon! Wait for the confarmation sms');
        return redirect()->back();

    }
    public function show()
    {
        $summit = Summit::all();
        // $summits = DB::table('summits')->get()->all();
        return view('backend.hackthon', compact('summit'));
    }

}
