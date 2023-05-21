<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use App\Models\Airline;
use App\Models\City;
use App\Models\Flights;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    //

    function login()
    {
        return view('login');
    }

    function admin_login(Request $req)
    {
        $admin = Admin::where(['admin_email'=> $req->user_id])->first();

        if(!$admin || !Hash::check( $req->user_pass,$admin->admin_pwd))
        {
            return 'Incorrect username';
        }else{
            $req->session()->put('user',$admin);
           return redirect('/index');
        }
        
    }

    function home()
    {
        $available_airlines = Airline::all()->count();
        $available_flights = Flights::all()->count();
        return view('index',['available_airlines'=>$available_airlines, 'available_flights'=> $available_flights]);
    }

    function add_flight()
    {
        $cities = City::all();
        $airlines = Airline::all();
        return view('add_flight', ['cities'=> $cities, 'airlines'=> $airlines]);
    }

    function all_airlines()
    {

        $all_airlines = Airline::all();
        return view('all_airlines',['all_airlines'=> $all_airlines]);
    }

    function all_flights()
    {

        $all_flights = DB::table('flights')->join('airlines', 'airlines.id' , '=' , 'flights.airline')->get();
        return view('all_flights', ['all_flights'=> $all_flights]);
        // return $all_flights;
    }


    function add_airline(Request $req)
    {
        $exist = Airline::find(['airline_name'=>  $req->airline]);
        if($exist){
            return 'Airline already exist';
        }else{

            $airline = new Airline;
            $airline->airline_name = $req->airline;
            $airline->seats = $req->seats;
            $airline->user_id = $req->session()->get('user')['id'];
            $airline->save();
    
            return redirect('/index');
        }
    }


    function new_flight(Request $req)
    {
        $exist = Flights::find(['source'=> $req->source_city, 'destination'=> $req->destination_city]);
        $air_id = Airline::find(['id'=> $req->air_id])->first();

        // if($exist){
        //     return $exist;
        // }else{
            $flight = new Flights;
            $flight->source = $req->source_city;
            $flight->destination = $req->destination_city;
            $flight->arrival = $req->dest_date.' '.$req->dest_time;
            $flight->departure = $req->source_date.' '.$req->source_time;
            $flight->user_id = $req->session()->get('user')['id'];
            $flight->seats = $air_id->seats;
            $flight->price = $req->price;
            $flight->duration = $req->dura;
            $flight->status = 'depart';
            $flight->issue = 'issue';
            $flight->last_seat = '';
            $flight->bus_seats = 0;
            $flight->last_bus_seats = '';
            $flight->airline = $req->air_id;

            $flight->save();

          return  redirect('/index');
        // }
    }

    function flights_result()
    {
        return view('flights_result');
    }
}
