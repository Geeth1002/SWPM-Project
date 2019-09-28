<?php
use Illuminate\Support\Facades\DB;
namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Timetable;

class DashboardController extends Controller
{
    public function index()
    {
       $data = Timetable::all();

       return view('backend.dashboard')->withTimeTable($data);

    }
   
}
