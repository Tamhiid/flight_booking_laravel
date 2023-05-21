

     


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

<style>

@font-face {
  font-family: 'product sans';
  src: url('../assets/css/Product Sans Bold.ttf');
}
button.btn-outline-light:hover {
  color: cornflowerblue !important;
}
  .navbar-custom {
    /* background-color: #6495ED; */
    background-color: #3a3a3a;
    /* font-family: 'Bangers', cursive; */
    font-family: 'product sans', cursive;    
  }
  h4 {
    font-size: 23px !important;
  }
  body {
    /* background-color: #B0E2FF; */
    background-color: #efefef;
  }
  td {
    /* font-family: 'Assistant', sans-serif !important; */
    font-size: 18px !important;
  }
  p {
  font-size: 35px;
  font-weight: 100;
  font-family: 'product sans';  
  }  

  .main-section{
	width:100%;
	margin:0 auto;
	text-align: center;
	padding: 0px 5px;
}
.dashbord{
	width:23%;
	display: inline-block;
	background-color:#34495E;
	color:#fff;
	margin-top: 50px; 
}
.icon-section i{
	font-size: 30px;
	padding:10px;
	border:1px solid #fff;
	border-radius:50%;
	margin-top:-25px;
	margin-bottom: 10px;
	background-color:#34495E;
}
.icon-section p{
	margin:0px;
	font-size: 20px;
	padding-bottom: 10px;
}
.detail-section{
	background-color: #2F4254;
	padding: 5px 0px;
}
.dashbord .detail-section:hover{
	background-color: #5a5a5a;
	cursor: pointer;
}
.detail-section a{
	color:#fff;
	text-decoration: none;
}
.dashbord-green .icon-section,.dashbord-green .icon-section i{
	background-color: #16A085;
}
.dashbord-green .detail-section{
	background-color: #149077;
}

.dashbord-blue .icon-section,.dashbord-blue .icon-section i{
	background-color: #2980B9;
}
.dashbord-blue .detail-section{
	background-color:#2573A6;
}
.dashbord-red .icon-section,.dashbord-red .icon-section i{
	background-color:#E74C3C;
}
.dashbord-red .detail-section{
	background-color:#CF4436;
}

  
</style>
<nav class="navbar navbar-custom navbar-expand-lg navbar-dark">
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
    <main><!-- log on to codeastro.com for more projects -->
        
          <div class="container">

            <div class="main-section">
              <div class="dashbord">
                <div class="icon-section">
                  <i class="fa fa-users" aria-hidden="true"></i><br>
                 Total Passengers
                  <p>123</p>
                </div>
               
              </div>
              <div class="dashbord dashbord-green">
                <div class="icon-section">
                  <i class="fa fa-money" aria-hidden="true"></i><br>
                 Amount
                  <p>$ 1000</p>
                </div>
               
              </div>
              <div class="dashbord dashbord-red">
                <div class="icon-section">
                  <i class="fa fa-plane" aria-hidden="true"></i><br>
                 Flights
                  <p>{{ $available_flights }}</p>
                </div>
               
              </div>     
              
              <div class="dashbord dashbord-blue">
                <div class="icon-section">
                  <i class="fa fa-plane fa-rotate-180" aria-hidden="true"></i><br>
                 Available Airlines
                  <p>{{ $available_airlines }}</p>
                </div>
               
              </div>  
              
            </div>

			<!-- log on to codeastro.com for more projects -->
          <div class="card mt-4" id="flight">
      <div class="card-body">
          <div class="dropdown" style="float: right;">
            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-filter"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#flight">Today's Flights</a>
              <a class="dropdown-item" href="#issue">Today's flight issues</a>
              <a class="dropdown-item" href="#dep">Flights departed today</a>
              <a class="dropdown-item" href="#arr">Flights arrived today</a>
            </div>
          </div>        
        <p class="text-secondary">Today's Flights</p>
        <table class="table-sm table table-hover">
          <thead class="thead-dark">
            <tr><!-- log on to codeastro.com for more projects -->
              <th scope="col">#</th>
              <th scope="col">Arrival</th>
              <th scope="col">Departure</th>
              <th scope="col">Destination</th>
              <th scope="col">Source</th>
              <th scope="col">Airlines</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>     <!-- log on to codeastro.com for more projects -->         
            
          </tbody>
        </table>        
      
      </div>
    </div>

    <div class="card" id="issue">
      <div class="card-body">
          <div class="dropdown" style="float: right;">
            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-filter"></i>
            </button><!-- log on to codeastro.com for more projects -->
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#flight">Today's flight</a>
              <a class="dropdown-item" href="#issue">Today's flight issues</a>
              <a class="dropdown-item" href="#dep">Flights departed today</a>
              <a class="dropdown-item" href="#arr">Flights arrived today</a>
            </div>
          </div>        
        <p class="text-secondary">Today's Flight Issues</p>
        <table class="table-sm table table-hover">
        <thead class="thead-dark">
            <tr><!-- log on to codeastro.com for more projects -->
              <th scope="col">#</th>
              <th scope="col">Arrival</th>
              <th scope="col">Departure</th>
              <th scope="col">Destination</th>
              <th scope="col">Source</th>
              <th scope="col">Airline</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              <tr>
            
          </tbody>
        </table>        
      
      </div>
    </div> 

    <div class="card" id="dep">
      <div class="card-body">
          <div class="dropdown" style="float: right;">
            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-filter"></i>
            </button><!-- log on to codeastro.com for more projects -->
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#flight">Today's flight</a>
              <a class="dropdown-item" href="#issue">Today's flight issues</a>
              <a class="dropdown-item" href="#dep">Flights departed today</a>
              <a class="dropdown-item" href="#arr">Flights arrived today</a>
            </div>
          </div>        
        <p class=" text-secondary">Flights Departed Today</p>
        <table class="table-sm table table-hover">
        <thead class="thead-dark">
            <tr><!-- log on to codeastro.com for more projects -->
              <th scope="col">#</th>
              <th scope="col">Arrival</th>
              <th scope="col">Departure</th>
              <th scope="col">Destination</th>
              <th scope="col">Source</th>
              <th scope="col">Airline</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              <tr>
            
          </tbody>
        </table>        
      
      </div>
    </div>       

    <div class="card mb-4" id="arr">
      <div class="card-body">
        <div class="dropdown" style="float: right;">
            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-filter"></i>
            </button><!-- log on to codeastro.com for more projects -->
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#flight">Today's flight</a>
              <a class="dropdown-item" href="#issue">Today's flight issues</a>
              <a class="dropdown-item" href="#dep">Flights departed today</a>
              <a class="dropdown-item" href="#arr">Flights arrived today</a>
            </div>
          </div>        
        <p class=" text-secondary">Flights Arrived Today</p>
        <table class="table-sm table table-hover">
        <thead class="thead-dark">
            <tr><!-- log on to codeastro.com for more projects -->
              <th scope="col">#</th>
              <th scope="col">Arrival</th>
              <th scope="col">Departure</th>
              <th scope="col">Destination</th>
              <th scope="col">Source</th>
              <th scope="col">Airline</th>
            </tr>
          </thead>
          <tbody>
              <tr>
           
          </tbody>
        </table>        
      
      </div>
    </div>      
  </div>
    </main>

    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"></script>   
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </html>
