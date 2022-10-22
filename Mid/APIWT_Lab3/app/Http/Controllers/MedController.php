<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\MedRecord;
use App\Models\Med;

class MedController extends Controller
{
    public function med_add(Request $request){
        $request->validate([
            'medname' => 'required', 
            'meddetails' => 'required|regex:/^\d{1}-\d{1}-\d{1}$/',
            'days' => 'required',
            'select' => 'required|notIn:--Select--',
        ],
        [
            'select.not_in' => 'Selected To Mr. Invalid',
        ]);
        
        $med = new Med();
            $med->name = $request->medname;
            $med->details = $request->meddetails;
            $med->days = $request->days;
            $med->save();
        
        $mid = Med::orderBy('id', 'desc')->pluck('id')->first();
        $medrecord = new MedRecord();
            $medrecord->by_mid = $mid;
            $medrecord->by_uid = $request->select;
            $medrecord->save();

            return back()->with('success', 'Med added successful');
        }

        public function med_view(){
            $meds = MedRecord::where('by_uid',  Auth::user()->id)->get();

            $medArr = [];
            foreach($meds as $key => $value)
                $medArr[] = $value->medsRR();

            return redirect()->back()->with(compact('medArr'))
                                     ->with('view', 'view');
        }
}
