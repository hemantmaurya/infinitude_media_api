<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use App\Country;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1(Request $request)     
     {
     if($request->has('date')==1){
     	$date = $request->get('date');
     }
     	$date_to = date("Y-m-d");

      $test = new Test;
 	$last_update = $test::max('last_update');  

$originalDate = $last_update;
$newDate = date("Y-m-d", strtotime($originalDate));
$date_from = date('Y-m-d', strtotime('-0 day', strtotime($newDate)));
//$url = 'http://omcmarkets.com/back.php/affiliate/externalSorce/api?key=eK9Hoy36L5&method=registration&insert_date='.$date_to.'&from_insert_date='.$date_from.'';
//$url = 'http://omcmarkets.com/back.php/affiliate/externalSorce/api?key=eK9Hoy36L5&method=registration&insert_date=2018-09-15&from_insert_date=2011-08-15';
$url = 'http://omcmarkets.com/back.php/affiliate/externalSorce/api?key=eK9Hoy36L5&method=registration&insert_date='.$date .'';

	echo '<br>'.$x = file_get_contents ($url);
     
     }
     
    public function index()
    {

	$date_to = date("Y-m-d");

      $test = new Test;
 	$last_update = $test::max('last_update');  

$originalDate = $last_update;
$newDate = date("Y-m-d", strtotime($originalDate));
$date_from = date('Y-m-d', strtotime('-0 day', strtotime($newDate)));
//$url = 'http://omcmarkets.com/back.php/affiliate/externalSorce/api?key=eK9Hoy36L5&method=registration&insert_date='.$date_to.'&from_insert_date='.$date_from.'';
//$url = 'http://omcmarkets.com/back.php/affiliate/externalSorce/api?key=eK9Hoy36L5&method=registration&insert_date=2018-09-15&from_insert_date=2011-08-15';
$url = 'http://omcmarkets.com/back.php/affiliate/externalSorce/api?key=eK9Hoy36L5&method=registration&insert_date='.$date_from.'';

	$x = file_get_contents ($url);

		//echo json_encode($x);

        $json = json_decode(file_get_contents($url), true);

        $x = $json['registration'];
         
         
foreach($json['registration'] as $value){
$value['visit_id'];

$valuex = Test::where('client_id', $value['client_id'])
->first();
if(!null == $valuex){
$valuex->visit_id = $value['visit_id'];
$valuex->status = $value['status'];
$valuex->last_update = $value['last_update'];
$valuex->country = $value['country'];
$valuex->balance = $value['balance'];
$valuex->currency = $value['currency'];
$valuex->custom_refer = $value['custom_refer'];
$valuex->has_ftd = $value['has_ftd'];
$valuex->campaign_keyword = $value['campaign_keyword'];
$valuex->ftd_date = $value['ftd_date'];
$valuex->lead_status = $value['lead_status'];
$valuex->firstName = $value['firstName'];
$valuex->lastName = $value['lastName'];
$valuex->email = $value['email'];
$valuex->password = $value['password'];
$valuex->phone = $value['phone'];
$valuex->reg_time = $value['reg_time'];
$valuex->campaignId = $value['campaignId'];
$valuex->save();

}else{
	
	      Test::create([
             'visit_id' => $value['visit_id'],
             'client_id' => $value['client_id'],
             'status' => $value['status'],
             'last_update' => $value['last_update'],
             'country' => $value['country'],
             'balance' => $value['balance'],
             'currency' => $value['currency'],
             'custom_refer' => $value['custom_refer'],
             'has_ftd' => $value['has_ftd'],
             'campaign_keyword' => $value['campaign_keyword'],
             'ftd_date' => $value['ftd_date'],
             'lead_status' => $value['lead_status'],
             'firstName' => $value['firstName'],
             'lastName' => $value['lastName'],
             'email' => $value['email'],
             'password' => $value['password'],
             'phone' => $value['phone'],
             'reg_time' => $value['reg_time'],
             'campaignId' => $value['campaignId']
         ]);
	
}
}
         
// echo $x[0]['ftd_date'];
        // echo $x[0]['visit_id'];

        // $test = new Test;
// Test::insert($x);


        // $test->visit_id = $x[0]['visit_id'];
        // $test->fill($x);

        // $test->save();
        // print_r($json);
        // $test = new Test;

//        $test = Test::paginate('15');

//        return view('test', ['test'=>$test]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function search(Request $request)
    {
        if($request->get('filter_param') !='country'){
        $result = Test::
            where($request->get('filter_param'), 'like', '%'.$request->get('val1').'%')
            ->get();

        echo '<datalist id="'.$request->get('data_list').'">';
        foreach ($result as $value) {
        echo '<option value="'.$value[$request->get('filter_param')].'" label="'.$value[$request->get('filter_param')].'" />';
        }
        echo ' </datalist>';

        }else{

            
            $countries = Country::where('name', 'like', "%".$request->get('val1')."%")
                ->orWhere('alpha-2', 'like', "%".$request->get('val1')."%")
                ->orWhere('alpha-3', 'like', "%".$request->get('val1')."%")
                ->get();

                        echo '<datalist id="'.$request->get('data_list').'">';
                        foreach($countries as $value){
                         echo '<option value="'.$value['name'].'" label="'.$value['alpha-2'].' '.$value['alpha-3'].'">' ;
                        }
                        echo ' </datalist>';


            echo '<datalist id="'.$request->get('data_list').'">';
                        foreach ($countries as  $value) {
            echo $value['name'];
                            echo '<option value="'.$value['name'].'" label="'.$value['name'].' '.$value['alpha-2'].' '.$value['alpha-3'] ;
                        }
                   echo ' </datalist>';



}
        // echo '<datalist id="'.$request->get('data_list').'">';
        // foreach ($result as $value) {
        // echo '<option value="'.$value[$request->get('filter_param')].'" label="'.$value[$request->get('filter_param')].' '.$result['name'].'" />';
        // }
        // echo ' </datalist>';
}



        

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function pagination(Request $request)
    {
        // echo '<br><br><br><br><br><br><br>'.$request->get('pagination_result');
          // $request->session()->put('search', '');
          // $request->session()->put('field', 'id');
          // $request->session()->put('sort', '');
          if($request->has('reset')){
            $request->session()->put('filter_column', 'last_update');
            $request->session()->put('search', '');
            $request->session()->put('field', 'id');
            $request->session()->put('sort', 'desc');
            $request->session()->put('has_ftd_session', '0');
          }
          
                    if($request->has('only_ftd')){
                    $request->session()->put('has_ftd_session', '1');
                    }

          $request->session()->put('filter_column', $request
                ->has('filter_column') ? $request->get('filter_column') : ($request->session()
                ->has('filter_column') ? $request->session()->get('filter_column') : 'last_update'));

          $request->session()->put('search', $request
                  ->has('search') ? $request->get('search') : ($request->session()
                  ->has('search') ? $request->session()->get('search') : ''));

          $request->session()->put('field', $request
                  ->has('field') ? $request->get('field') : ($request->session()
                  ->has('field') ? $request->session()->get('field') : 'id'));


          $request->session()->put('sort', $request
                  ->has('sort') ? $request->get('sort') : ($request->session()
                  ->has('sort') ? $request->session()->get('sort') : 'desc'));

            $posts = new Test;
          if($request->session()->get('has_ftd_session')==1){
	            if(strlen($request->session()->get('filter_column'))>0){
	              $posts = $posts->where('has_ftd', 1)
	              	  ->where($request->session()->get('filter_column'), 'like', '%' . $request->session()->get('search') . '%')
	                  ->orderBy($request->session()->get('field'), $request->session()->get('sort'))
	                  ->paginate(12);
	            }else{
	              $posts = $posts->where('has_ftd', 1)
	              	  ->where('firstName', 'like', '%' . $request->session()->get('search') . '%')
	                  ->orderBy($request->session()->get('field'), $request->session()->get('sort'))
	                  ->paginate(12);
	            }
            }else{
	                        if(strlen($request->session()->get('filter_column'))>0){
	              $posts = $posts->where($request->session()->get('filter_column'), 'like', '%' . $request->session()->get('search') . '%')
	                  ->orderBy($request->session()->get('field'), $request->session()->get('sort'))
	                  ->paginate(12);
	            }else{
	              $posts = $posts->where('firstName', 'like', '%' . $request->session()->get('search') . '%')
	                  ->orderBy($request->session()->get('field'), $request->session()->get('sort'))
	                  ->paginate(11);
	            }
            }

            if ($request->ajax()) {
              return view('index', compact('posts'));
            } else {
              return view('ajax', compact('posts'));
            }

    }

    public function conversions(Request $request)
    {
        // echo '<br><br><br><br><br><br><br>'.$request->get('pagination_result');
          // $request->session()->put('search', '');
          // $request->session()->put('field', 'id');
          // $request->session()->put('sort', '');
          if($request->has('reset')){
            $request->session()->put('filter_column', 'last_update');
            $request->session()->put('search', '');
            $request->session()->put('field', 'id');
            $request->session()->put('sort', 'desc');
            $request->session()->put('has_ftd_session', '0');
          }
          
                    if($request->has('only_ftd')){
                    $request->session()->put('has_ftd_session', '1');
                    }

          $request->session()->put('filter_column', $request
                ->has('filter_column') ? $request->get('filter_column') : ($request->session()
                ->has('filter_column') ? $request->session()->get('filter_column') : 'last_update'));

          $request->session()->put('search', $request
                  ->has('search') ? $request->get('search') : ($request->session()
                  ->has('search') ? $request->session()->get('search') : ''));

          $request->session()->put('field', $request
                  ->has('field') ? $request->get('field') : ($request->session()
                  ->has('field') ? $request->session()->get('field') : 'id'));


          $request->session()->put('sort', $request
                  ->has('sort') ? $request->get('sort') : ($request->session()
                  ->has('sort') ? $request->session()->get('sort') : 'desc'));

            $posts = new Test;
         
                if(strlen($request->session()->get('filter_column'))>0){
                  $posts = $posts->where('has_ftd', 1)
                  ->where($request->session()->get('filter_column'), 'like', '%' . $request->session()->get('search') . '%')
                      ->orderBy($request->session()->get('field'), $request->session()->get('sort'))
                      ->paginate(10);
                }else{
                  $posts = $posts->where('has_ftd', 1)
                  ->where('firstName', 'like', '%' . $request->session()->get('search') . '%')
                      ->orderBy($request->session()->get('field'), $request->session()->get('sort'))
                      ->paginate(10);
                }
            
            if ($request->ajax()) {
              return view('conversions', compact('posts'));
            } else {
              return view('conversions', compact('posts'));
            }

    }

    public function conversions_ajax(Request $request)
    {
            $posts = new Test;

             $request->get('client_id');
         
                   $posts = Test::where('has_ftd', 1)
                   ->where('country', 'like', '%'.$request->get('country').'%')
                   ->where('client_id', 'like', '%'.$request->get('client_id').'%')
                   ->where('firstName', 'like', '%'.$request->get('firstName').'%')
                   ->where('lastName', 'like', '%'.$request->get('lastName').'%')
                   ->where('email', 'like', '%'.$request->get('email').'%')
                   ->where('phone', 'like', '%'.$request->get('phone').'%')
                   ->where('campaignId', 'like', '%'.$request->get('campaignId').'%')
                   ->where('visit_id', 'like', '%'.$request->get('visit_id').'%')
                   ->where('balance', 'like', '%'.$request->get('balance').'%')
                   ->where('campaign_keyword', 'like', '%'.$request->get('campaign_keyword').'%')
                   ->paginate(10);
              return view('conversions_ajax', compact('posts'));
            

    }
}