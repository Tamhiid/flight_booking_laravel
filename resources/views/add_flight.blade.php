


     


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/44f557ccce.js"></script>
        <title>Online Flight Booking</title>          
        <link rel = "icon" href =  
            "../assets/images/brand.png" 
        type = "image/x-icon">    
        <link rel = "stylesheet" href =  
            "{{ url('/asset/css/form.css') }}" 
        >    
        <link rel = "stylesheet" href =  
            "{{ url('/asset/css/admin.css') }}" 
        >    
        <link rel = "stylesheet" href =  
            "{{ url('/asset/css/flight_form.css') }}" 
        >    
        <link rel = "stylesheet" href =  
            "{{ url('/asset/css/form.css') }}" 
        >    
        
        <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300&family=Poiret+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
        
    </head>

<style>
  input {
    border :0px !important;
    border-bottom: 2px solid #5c5c5c !important;
    /* color :cornflowerblue !important; */
    border-radius: 0px !important;
    font-weight: bold !important;
    background-color: whitesmoke !important;    
  }
  *:focus {
    outline: none !important;
  }
  label {
    /* color : #79BAEC !important; */
    color: #5c5c5c !important;
    font-size: 19px;
  }
  h5.form-name {
    /* color: cornflowerblue; */
    /* font-family: 'Courier New', Courier, monospace; */
    font-weight: 50;
    margin-bottom: 0px !important;
    margin-top: 10px;
  }
  h1 {
    font-size: 45px !important;
    font-family: 'product sans';  
    margin-bottom: 20px;  
  }
  body {
    /* padding-top: 20px; */
    /* background-image: url('../assets/images/bg5.jpg'); */
    background-color: #efefef;
    /* background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;     */
  }
  div.form-out {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  
    background-color: whitesmoke !important;
    padding: 40px;
    margin-top: 30px;
  }
  select.airline {
    float: right;
    font-weight: bold !important;
    /* color :cornflowerblue !important; */
  }
  @media screen and (max-width: 900px){
    body {
      background-color: lightblue;
      background-image: none;
    }
    div.form-out {
    padding: 20px;
    background-color: none !important;
    margin-top: 20px;
  }    
}  
</style>
<main>
<nav class="navbar navbar-custom navbar-expand-lg navbar-dark" style="background-color:black">
          <a class="navbar-brand text-light" href="/index"><h4>ADMIN PANEL</h4></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="/index">
                      <h5 class="ml-2"> Dashboard</h5>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/add_flight">
                      <h5 class="ml-2"> Add Flight</h5>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/all_flights">
                      <h5>List Flights</h5>
                    </a>
                  </li>   
                  <li class="nav-item">
                    <a class="nav-link" href="/all_airlines">
                      <h5>Manage Airlines</h5>
                    </a>
                  </li>              
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="review.php">
                      <h4>Reviews</h4>
                    </a>
                  </li>                      -->
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li class="nav-item">
                    <div class="dropdown mt-2">
                      <button class="btn bg-transparent dropdown-toggle text-white" type="button" 
                        id="dropdownMenuButton" data-toggle="dropdown" 
                          aria-haspopup="true" aria-expanded="false">
                        
                        <i class="fa fa-plus text-white"></i> Airlines </td>
                      </button>  
                      <div class="dropdown-menu">
                        <form class="px-2 py-2"  action="/add_airline" method="post">
                            @csrf
                          <div class="form-group">
                            <input type="text" class="form-control" name="airline" 
                              placeholder="Airlines Name">
                            <input type="number" class="form-control mt-3" name="seats" 
                              placeholder="Total Seats">                              
                          </div>  
                          <button type="submit" name="air_but" 
                            class="btn btn-success w-100">Submit</button>
                        </form>
                      </div>
                    </div>  
                  </li>
                  <li class="nav-item  p-1 border-light ">
                      <a class="nav-link" href="">
                          <i class="ml-1 fa fa-user text-light"></i>
                          <span class="nav_link text-light"
                            style="font-size: 20px;">
                         
                          </span>
                      </a>
                  </li>            
                </ul>                 
                <form action="../includes/logout.inc.php" method="POST">
                    @csrf
                <button class="btn btn-outline-light m-2" type="submit">
                    Logout </button>
                </form> 
            </div>
          

        </nav>
<div class="container mt-0">
  <div class="row">
   <!-- log on to codeastro.com for more projects -->
      <div class="bg-light form-out col-md-12">
      <h1 class="text-secondary text-center">ADD FLIGHT DETAILS</h1>

      <form method="POST" class=" text-center" 
        action="/add_flight">
        @csrf

        <div class="form-row mb-4">
          <div class="col-md-3 p-0">
            <h5 class="mb-0 form-name">DEPARTURE</h5>
          </div>
          <div class="col">    <!-- log on to codeastro.com for more projects -->       
            <input type="date" name = "source_date" class="form-control"
            required >
          </div>
          <div class="col">         
            <input type="time" name = "source_time" class="form-control"
              required >
          </div>
        </div>


        <div class="form-row mb-4">
        <div class="col-md-3 ">
            <h5 class="form-name mb-0">ARRIVAL</h5>
          </div>          
          <div class="col">
            <input type="date" name = "dest_date" class="form-control"
            required >
          </div>
          <div class="col">
            <input type="time" name = "dest_time" class="form-control"
            required >
          </div>
        </div>

        <div class="form-row mb-4">
          <div class="col">                
       <select name="source_city">
        <option>From City</option>
        @foreach($cities as $city)
									<option value="{{$city['city']}}">{{$city['city']}}</option>
								@endforeach
            </select>             
          </div>
          <div class="col">
            <select  name="destination_city">
                <option>To City</option>
                @foreach($cities as $city)
									<option value="{{$city['city']}}">{{$city['city']}}</option>
								@endforeach
              </select>                
          </div>
        </div>

        <div class="form-row">
          <div class="col">
            <div class="input-group">
                <label for="dura">Duration</label>
                <input type="text" name="dura" id="dura" required />
              </div>              
            </div>            
          <div class="col">
            <div class="input-group">
                <label for="price">Price</label>
                <input type="number" style="border: 0px; border-bottom: 2px solid #5c5c5c;" 
                  name="price" id="price" required />
              </div>            
          </div>
        <select name="air_id">
            <option>Select Airline</option>
            @foreach($airlines as $airline)
									<option value="{{$airline['id']}}">{{$airline['airline_name']}}</option>
								@endforeach
        </select>            
        </div>              

        <button name="flight_but" type="submit" 
          class="btn btn-success mt-5">
          <div style="font-size: 1.5rem;">
          <i class="fa fa-lg fa-arrow-right"></i> Proceed
          </div>
        </button>
      </form>
    </div>
    </div>
</div>
</main>
<script>
$(document).ready(function(){
  $('.input-group input').focus(function(){
    me = $(this) ;
    $("label[for='"+me.attr('id')+"']").addClass("animate-label");
  }) ;
  $('.input-group input').blur(function(){
    me = $(this) ;
    if ( me.val() == ""){
      $("label[for='"+me.attr('id')+"']").removeClass("animate-label");
    }
  }) ;
});
</script>


<script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"></script>   
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>

