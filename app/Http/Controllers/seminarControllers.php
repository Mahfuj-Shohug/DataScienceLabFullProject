<?php

namespace App\Http\Controllers;

use App\Models\Seminar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class seminarControllers extends Controller
{
    public function seminar(){
        return view('frontend.seminar');
    }

    public function storeSeminarReg(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'varsity' => 'required',
            'dept' => 'required',
            'sname' => 'required',
            'phone' => 'required',
            'gmail' => 'required|email',
            'trid' => 'required',
        ]);
        $seminar = Seminar::create([
            'name' => $request->name,
            'varsity' => $request->varsity,
            'dept' => $request->dept,
            'sname' => $request->sname,
            'phone' => $request->phone,
            'gmail' => $request->gmail,
            'trid' => $request->trid,

        ]);
        $seminar->save();
        session()->flash('message', 'Registration has been  successfully Done for Seminar! Please wait for the confirmation sms');
        return redirect()->back();

        }
        public function show()
        {
            $seminar = Seminar::all();
            // $summits = DB::table('summits')->get()->all();
            return view('backend.seminar', compact('seminar'));
        }
}
