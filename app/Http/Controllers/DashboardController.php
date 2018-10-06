<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Test;

class DashboardController extends Controller
{
  public function index(Request $request)
  {
      $test = new Test;
$today_ftd_no = $test->where('last_update', 'like' , date("Y-m-d").'%')
                  ->where('has_ftd', 1)
                  ->sum('has_ftd');
                  
$today_ftd_balance = $test->where('last_update', 'like' , date("Y-m-d").'%')
                  ->where('has_ftd', 1)
                  ->sum('balance');

  
    $test = new Test;
      $ftd_balance = $test->where('has_ftd', 1)
                  ->sum('balance');
      $total_ftd = $test->where('has_ftd', 1)
                      ->get();

if($request->has('days')){
      $ftd_balance = $test->where('last_update', '>=', now()->subDay($request->get('days')))
                  ->where('has_ftd', 1)
                  ->sum('balance');
      $total_ftd = $test->where('last_update', '>=', now()->subDay($request->get('days')))
                  ->where('has_ftd', 1)
                  ->get();
}
      $total_ftd = count($total_ftd);

if($request->has('days')){
  $days=$request->get('days');
}else{
  $days=0;
}

$ftd_balance = round($ftd_balance, 2);
       return view('dashboard', compact('ftd_balance', 'total_ftd', 'days', 'today_ftd_no', 'today_ftd_balance'));
  }
}