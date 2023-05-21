@extends('layout')
@section('content')


<style>
table {
  background-color: white;
}
@font-face {
  font-family: 'product sans';
  src: url('assets/css/Product Sans Bold.ttf');
}
h1{
    font-family :'product sans' !important;
	color:#424242 ;
	font-size:40px !important;
	margin-top:20px;
	text-align:center;
}
body {
  background: #bdc3c7;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #2c3e50, #bdc3c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
th {
  font-size: 22px;
  /* font-family: 'Courier New', Courier, monospace; */
}
td {
  margin-top: 10px !important;
  font-size: 16px;
  font-weight: bold;
  /* color: #3931af; */
  color: #424242;
}
</style>
    <main>
       
          <div class="container-md mt-2">
            <h1 class="display-4 text-center text-light"
              >FLIGHTS FROM: {{$from}}<br> 
                 to  {{$to}}</h1>
            <table class="table table-striped table-bordered table-hover">
              <thead>
                <tr class="text-center">
                  <th scope="col">Airline</th>
                  <th scope="col">Departure</th>
                  <th scope="col">Arrival</th>
                  <th scope="col">Status</th>
                  <th scope="col">Fare</th>
                  <th scope="col">Buy</th>
                </tr>
              </thead>
              <tbody>
                @foreach($flight as $fly)
              <tr class='text-center'>                  
                    <td>{{$fly->airline_name}}</td>
                    <td>{{$fly->departure}}</td>
                    <td>{{$fly->arrival}}</td>
                    <td>
                      <div>
                          <div class='alert ".$alert." text-center mb-0 pt-1 pb-1' 
                              role='alert'>
                              ready
                          </div>
                      </div>  
                    </td>                   
                    <td>$ {{$fly->price}}</td>
                    @if($fly->status === '')
                    <td>Login to continue</td>
                    @elseif($fly->status === 'dep')
              
					<td>Not Available</td>
				 @else
                  
                   <td>
                    <form action='/pass_form' method='post'>
                        @csrf
                    <input name='flight_id' type='hidden' value="{{$fly->id}}">
                      <input name='type' type='hidden' value="{{$type}}">
                      <input name='passengers' type='hidden' value="{{$passengers}}">
                      <input name='price' type='hidden' value="{{$fly->price}}">
                      <input name='ret_date' type='hidden' value="{{$ret_date}}">
                      <input name='class' type='hidden' value="{{$f_class}}">
                      <button name='book_but' type='submit' 
                      class='btn btn-success mt-0'>
                      <div style=''>
                      <i class='fa fa-lg fa-check'></i>  
                      </div>
                    </button>
                    </form>
                    </td>  
                  @endif
                 </tr>                
               
                 @endforeach

              </tbody>
            </table>

          </div>
       

    </main>


@endsection