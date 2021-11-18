<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Workshop;

use Illuminate\Http\Request;

class workshopController extends Controller
{
    public function workshop(){
        return view('frontend.workshop');
    }

    public function storeWorkshopReg(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'varsity' => 'required',
            'dept' => 'required',
            'wname' => 'required',
            'phone' => 'required',
            'gmail' => 'required|email',
            'trid' => 'required',
        ]);
        $workshop = Workshop::create([
            'name' => $request->name,
            'varsity' => $request->varsity,
            'dept' => $request->dept,
            'wname' => $request->wname,
            'phone' => $request->phone,
            'gmail' => $request->gmail,
            'trid' => $request->trid,

        ]);
        $workshop->save();
        session()->flash('message', 'Registration has been  successfully Done for Workshop! Please wait for the confirmation sms');
        return redirect()->back();

        }
        public function show()
        {
            $workshop = Workshop::all();
            // $summits = DB::table('summits')->get()->all();
            return view('backend.workshop', compact('workshop'));
        }
}
