<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Campsite;


class RatingFormController extends Controller {

    // public function create()
    // {
    //     return view('ratingform.create');
    // }

    public function store(Request $request)
    {     
        $campsite = new Campsite;
        $campsite->camp_name = $request->input('camp_name');
        $campsite->city = $request->input('city');

        $campsite->save();
        return redirect('/');
    }
}
