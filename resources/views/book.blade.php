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

<div class="container-md mt-2">
            <h1 class="display-4 text-center text-light"
              >FLIGHTS FROM: Mogadishu 
                 to Addis Ababa </h1>
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
               
                                
               
                  <tr class='text-center'>                  
                    <td>Hala Airline</td>
                    <td>10/12/2020</td>
                    <td>10/12/2020</td>
                    <td>
                      <div>
                          <div class='alert " text-center mb-0 pt-1 pb-1' 
                              role='alert'>
                              Depart
                          </div>
                      </div>  
                    </td>                   
                    <td>$ 120</td>
                   
                <td>
                    <form action='pass_form.php' method='post'>
                    <input name='flight_id' type='hidden' value="1">
                      <input name='type' type='hidden' value="1">
                      <input name='passengers' type='hidden' value="1">
                      <input name='price' type='hidden' value="1">
                      <input name='ret_date' type='hidden' value="1">
                      <input name='class' type='hidden' value="1">
                      <button name='book_but' type='submit' 
                      class='btn btn-success mt-0'>
                      <div style=''>
                      <i class='fa fa-lg fa-check'></i>  
                      </div>
                    </button>
                    </form>
                    </td>                                                       
                 
                 </tr>              
               

              </tbody>
            </table>

          </div>


@endsection