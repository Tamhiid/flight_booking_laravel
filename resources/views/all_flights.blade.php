

     


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
        
        <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300&family=Poiret+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
        
    </head>
<!-- log on to codeastro.com for more projects -->
<style>
table {
  background-color: white;
}
h1 {
  margin-top: 20px;
  margin-bottom: 20px;
  font-family: 'product sans';  
  font-size: 45px !important; 
  font-weight: lighter;
}
a:hover {
  text-decoration: none;
}
body {
  /* background-color: #B0E2FF; */
  background-color: #efefef;
}
th {
  font-size: 22px;
  /* font-weight: lighter; */
  /* font-family: 'Courier New', Courier, monospace; */
}
td {
  margin-top: 10px !important;
  font-size: 16px;
  font-weight: bold;
  font-family: 'Assistant', sans-serif !important;
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
          <div class="container-md mt-2">
            <h1 class="display-4 text-center text-secondary"
              >FLIGHT LIST</h1>
            <table class="table table-bordered">
              <thead class="table-dark">
                <tr><!-- log on to codeastro.com for more projects -->
                  <th scope="col">ID</th>
                  <th scope="col">Departure</th>
                  <th scope="col">Arrival</th>
                  <th scope="col">Source</th>
                  <th scope="col">Destination</th>
                  <th scope="col">Airline</th>
                  <th scope="col">Seats</th>
                  <th scope="col">Price</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                
              @foreach($all_flights as $flight)
              

              <tr class='text-center'>                  
                    <td scope='row'>
                      <a href='#'>
                      {{$flight->id}} </a> </td>
                      <td>{{$flight->departure}}</td>
                      <td>{{$flight->arrival}}</td>
                    <td>{{$flight->source}}</td>
                    <td>{{$flight->destination}}</td>
                    <td>{{$flight->airline_name}}</td>
                    <td>{{$flight->seats}}</td>
                    <td>$ {{$flight->price}}</td>
                    <td>
                    <form action='#' method='post'>
                      <input name='flight_id' type='hidden' value="{{$flight->id}}">
                      <button  class='btn' type='submit' name='del_flight'>
                      <i class='text-danger fa fa-trash'></i></button>
                    </form>
                    </td>                  
                  </tr>

              @endforeach

              </tbody>
            </table>

          </div>
    

    </main>
	<!-- log on to codeastro.com for more projects -->

    
    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"></script>   
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>