<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $surveyStr1 = '{
	    "id": 1,
            "name": "pooch",
            "version": "1.1.0"
	}';
        $surveyStr2 = '{
	    "id": 2,
            "name": "numpy",
            "version": "1.17.3"
	}';
        $surveyData1 = json_decode($surveyStr1);
        $surveyData2 = json_decode($surveyStr2);
	return view('frontend.index', compact('surveyData1', 'surveyData2'));
    }
}
