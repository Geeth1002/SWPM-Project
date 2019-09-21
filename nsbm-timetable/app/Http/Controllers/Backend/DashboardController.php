<?php
use Illuminate\Support\Facades\DB;
namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\DB;

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

       //$data = DB::table('timetables')->whereDate('date', '=', date('Y-m-d'))->get();

       return view('backend.dashboard')->withTimeTable($data);


    }
}
