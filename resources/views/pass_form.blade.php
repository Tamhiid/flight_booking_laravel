@extends('layout')
@section('content')

<style>
.main-col {
    padding: 30px;
    background-color: whitesmoke;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  
    margin-top: 50px;   
}
.pass-form {
    background-color: white;
    border: 5px dotted #607d8b;
    padding: 20px;
    margin-top: 30px;
}

body {
  background: #bdc3c7;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #2c3e50, #bdc3c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
@font-face {
  font-family: 'product sans';
  src: url('assets/css/Product Sans Bold.ttf');
  }
  h1 {
    font-size: 42px !important;
    margin-bottom: 20px;  
    font-family :'product sans' !important;
    font-weight: bolder;
  }
  input {
    border :0px !important;
    border-bottom: 2px solid #424242 !important;
    color :#424242 !important;
    border-radius: 0px !important;
    font-weight: bold !important;   
    margin-bottom: 10px;
  }
  label {
    color : #828282 !important;
    font-size: 19px;
  }  
@media screen and (max-width: 900px){
    body {
  background: #bdc3c7;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #2c3e50, #bdc3c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}  
}
</style>

   
<main>
    <div class="container mb-5">
    <div class="col-md-12 main-col">
        <h1 class="text-center text-secondary">PASSENGER DETAILS</h1>  
        <form action="/pass_detail" class="needs-validation mt-4" 
            method="POST">
         @csrf
            <input type="hidden" name="type" value={{$type}}>   
            <input type="hidden" name="ret_date" value={{$ret_date}}>   
            <input type="hidden" name="class" value={{$class}}>   
            <input type="hidden" name="passengers" value={{$passengers}}>   
            <input type="hidden" name="price" value={{$price}}>   
            <input type="hidden" name="flight_id" value={{$flight_id}}>   
     
            @for ($i=1; $i<=$passengers; $i++)
            <div class="pass-form">  
            <div class="form-row">
                <div class="col-md">
                    <div class="input-group">
                        <label for="firstname.$i">Firstname</label>
                        <input type="text" name="firstname[]" id="firstname''" class="pl-0 pr-0" 
                            required style="width: 100%;">
                    </div>
                </div>
                <div class="col-md">
                    <div class="input-group">
                        <label for="midname.$i">Middlename</label>
                        <input type="text" name="midname[]" id="midname''" class="pl-0 pr-0"
                            required style="width: 100%;">
                    </div>
                </div>

                <div class="col-md">
                    <div class="input-group">
                        <label for="lastname.$i">Lastname</label>
                        <input type="text" name="lastname[]" id="lastname''" class="pl-0 pr-0"
                             required style="width: 100%;">
                    </div>
                </div>
            </div>
         
            <div class="form-row">
                <div class="col-md">
                    <div class="input-group">
                        <label for="mobile''">Contact No</label>
                        <input type="number" name="mobile[]" min="0" id="mobile''" 
                            required>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group mt-3"> 
                        <label for="dob">DOB</label>
                        <input id="date" name="date[]" type="date"
                             required>
                    </div>
                </div>
            </div>
            </div> 
            @endfor   
            <div class="col text-center">
                <button name="pass_but" type="submit" 
                class="btn btn-success mt-4">
                <div style="font-size: 1.5rem;">
                <i class="fa fa-lg fa-arrow-right"></i> Proceed  
                </div>
                </button>
            </div>         
        </form>              
    </div>
    </div>
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
</main>

@endsection