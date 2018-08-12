<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    //


    public function index(){

        $activities = Activity::all();

        return view('activities.ActAdminPanel', compact('activities'));

}

public function destroy(Request $request, $id){

        if($request->ajax()){

            $activity = Activity::find($id);
            $activity->delete();
            $act_total = Activity::all()->count();

            return response()->json([
                'total'=>$act_total,
                'mensaje'=>$activity->name.' eliminada'
            ]);
        }

}

}
