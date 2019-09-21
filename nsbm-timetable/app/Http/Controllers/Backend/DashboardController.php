<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Timetable;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data = Timetable::all();


        return view('backend.dashboard')->withTimeTable($data);
        return view('frontend.user.timetableview')->withTimeTable($data);

    }
}
