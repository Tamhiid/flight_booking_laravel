@extends('layout')
@section('content')

<style>
nav {
    display: none !important;
}

@font-face {
  font-family: 'product sans';
  src: url('assets/css/Product Sans Bold.ttf');
}
h2.brand {
    /* font-style: italic; */
    font-size: 27px !important;
}
.vl {
  border-left: 6px solid #424242;
  height: 400px;
}
.text-light2 {
    color: #d9d9d9;
}
h3 {
    /* font-weight: lighter !important; */
    font-size: 21px !important;
    margin-bottom: 20px;  
    font-family: Tahoma, sans-serif;
    font-weight: lighter;
}
p.head {
    text-transform: uppercase;
    font-family: arial;
    font-size: 17px;
    margin-bottom: 10px ;
    color: grey;  
}
p.txt {
    text-transform: uppercase;
    font-family: arial;
    font-size: 25px;
    font-weight: bolder;
}
.bord {
    border: 2px solid lightgray;
    /* border-left: 0px !important; */
}
.out {
    /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);   */
    background-color: white;
    padding-left: 25px;
    padding-right: 0px;
    padding-top: 20px;
    border: 2px solid lightgray;
    border-top-left-radius: 25px;
    border-bottom-left-radius: 25px;
}
h2 {
    font-weight: lighter !important;
    font-size: 35px !important;
    margin-bottom: 20px;  
    font-family :'product sans' !important;
    font-weight: bolder;
}
h1 {
    font-weight: lighter !important;
    font-size: 45px !important;
    margin-bottom: 20px;  
    font-family :'product sans' !important;
    font-weight: bolder;
  }
</style>

   
<main>
<div class="row mb-5">                                                         
                        <div class="col-9 out">
                            <div class="row ">                                                     
                                <div class="col">
                                    <h2 class="text-secondary mb-0 brand">
                                        Online Flight Booking</h2> 
                                </div>
                                <div class="col">
                                    <h2 class="mb-0">Economy CLASS</h2>
                                </div>
                            </div>
                            <hr>
                            <div class="row mb-3">  
                                <div class="col-4">
                                    <p class="head">Airline</p>
                                    <p class="txt">Halla Airline</p>
                                </div>            
                                <div class="col-4">
                                    <p class="head">from</p>
                                    <p class="txt">KAMPALA</p>
                                </div>
                                <div class="col-4">
                                    <p class="head">to</p>
                                    <p class="txt">JUBBA</p>                
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-8">
                                    <p class="head">Passenger</p>
                                    <p class=" h5 text-uppercase">
                                    ABDULGHANI ABDULLAHI MOHAMED
                                    </p>                              
                                </div>
                                <div class="col-4">
                                    <p class="head">board time</p>
                                    <p class="txt">12:45</p>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <p class="head">departure</p>
                                    <p class="txt mb-1">12/02/2022</p>
                                    <p class="h1 font-weight-bold mb-3">12:00</p>  
                                </div>            
                                <div class="col-3">
                                    <p class="head">arrival</p>
                                    <p class="txt mb-1">12/02/2022</p>
                                    <p class="h1 font-weight-bold mb-3">12:00</p>  
                                </div>
                                <div class="col-3">
                                    <p class="head">gate</p>
                                    <p class="txt">A22</p>
                                </div>            
                                <div class="col-3">
                                    <p class="head">seat</p>
                                    <p class="txt">A2</p>
                                </div>                
                            </div>                    
                        </div>
                        <div class="col-3 bord pl-0" style="background-color:#376b8d;
                            padding:20px;  border-top-right-radius: 25px; border-bottom-right-radius: 25px;">
                            <div class="row">  
                                <div class="col">                                    
                                <h2 class="text-light text-center brand">
                                    Online Flight Booking</h2> 
                                </div>                                      
                            </div>                             
                            <div class="row justify-content-center">
                                <div class="col-12">                                    
                                    <img src="assets/images/airtic.png" class="mx-auto d-block"
                                    height="180px" width="200px" alt="">
                                </div>                                
                            </div>
                            <div class="row">
                            <h3 class="text-light2 text-center mt-2 mb-0">
                            &nbsp Thank you for choosing us. </br> </br>
                                Please be at the gate at boarding time</h3>    
                            </div>                            
                        </div>                                                 
                        </div> 


                        <script>
  window.print();
  </script>

@endsection