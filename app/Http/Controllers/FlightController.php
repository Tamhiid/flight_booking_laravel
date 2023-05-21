<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airline;
use App\Models\Flights;
use App\Models\Passengers;
use Illuminate\Support\Facades\DB;
use App\Models\Tickets;

class FlightController extends Controller
{
    //

    function index(Request $req)
    {

        $passengers = $req->passengers;
        $type = $req->type;
        $ret_date = $req->ret_date;
        $f_class = $req->f_class;
        $flight = Flights::where('source', $req->dep_city)->where('destination',$req->arr_city)->join('airlines', 'airlines.id', '=', 'flights.airline')->get();
        // return $flight;
       return  view('flights_result',[
        'from'=>$req->dep_city,
         'to'=> $req->arr_city,
          'flights'=>$flight,
           'passengers'=>$passengers,
           'type'=> $type,
           'ret_date' => $ret_date,
           'f_class' => $f_class,
           'flight' => $flight
        ]);
    }


    function pass_form(Request $req)
    {
        $flight_id = $req->flight_id;
        $type = $req->type;
        $passengers = $req->passengers;
        $price= $req->price;
        $ret_date = $req->ret_date;
        $class = $req->class;
        // return $req->input();
        return view('pass_form',[
            'flight_id' => $flight_id,
            'type' => $type,
            'passengers' => $passengers,
            'price' => $price,
            'ret_date'=> $ret_date,
            'class' => $class
        ]);
    }


    function pass_detail(Request $request)
    {

        $count = count($request->input('firstname'));
        $passenger = new Passengers;

        for ($i=0; $i<$count; $i++){
            $data[] = array(
            'user_id' => $request->session()->get('user')['id'],    
            'flight_id' => $request->flight_id,
            'mobile' => $request->input('mobile')[$i],
            'dob' => $request->input('date')[$i],
            'f_name' => $request->input('firstname')[$i],
            'm_name' => $request->input('midname')[$i],
            'l_name' => $request->input('lastname')[$i],
           
            );
            // $ticket[] =array(
            //     ''
            // )
        
    }

    DB::table('passengers') -> insert($data);

    return view('ticket');

    // return 'success';
    // return $request->input();
       
    }
}
