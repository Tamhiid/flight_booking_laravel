<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>	
        <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/44f557ccce.js"></script>
        <!-- Bootstrap CSS -->
		<!-- log on to codeastro.com for more projects -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>  
        <title>Online Flight Booking</title>         
      
        <link href="{{ url('/asset/images/brand.png') }}" rel="icon">      
        <link href="{{ url('/asset/css/form.css') }}" rel="stylesheet">      
    </head>
<style>
.astext {
    background:none;
    border:none;
    margin:0;
    padding:0;
    cursor: pointer;
}    
@font-face {
  font-family: 'product sans';
  src: url('{{ url('/asset/css/Product Sans Bold.ttf') }}');
  
}
h5:hover {
    color: #E8E8E8;
}
h5 {
    color: white;
    font-weight: bold;
    font-size: 20px ;
	font-family: 'Montserrat', sans-serif;
}
.btn-login {
    /* font-size: 22px ; */
    font-weight: bold;
	font-family: 'Montserrat', sans-serif;    
}
</style>
    <body>        
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent ">
        <a class="navbar-brand" href="index.php"><h5>Home</h5>            
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">                                
          
                <li class="nav-item">
                    <a class="nav-link" href="my_flights.php">
                        <h5> My Flights</h5>
                    </a>
                </li>       
                <li class="nav-item">
                    <a class="nav-link" href="ticket.php">
                        <h5> Tickets</h5>
                    </a>
                </li>    <!-- log on to codeastro.com for more projects -->                                                              
       
                <li class="nav-item">
                    <a class="nav-link" href="feedback.php">
                        <h5> Feedback</h5>
                    </a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <h5> About</h5>
                    </a>
                </li>             
            </ul>    <!-- log on to codeastro.com for more projects -->       
         
          
        </div>
        </nav>


        @yield('content')












        <!-- log on to codeastro.com for more projects -->

     
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        
  </body>
</html><!-- log on to codeastro.com for more projects -->












