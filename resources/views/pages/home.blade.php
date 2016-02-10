@extends('layouts.default')
@section('content')
<div class="container" >
    <br>
    <br>


<div class="col-md-3">
    <h2>Search Box</h2>
           <div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class="  search-query form-control" placeholder="Search" />
                                <span class="input-group-btn">
                                    <button class="btn btn-success" type="button">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
            </div>


    <h3> Find Alumni Graduation</h3>
    <div class="dropdown">
         <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Gradutaion Date
  <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="#">2070-10-10</a></li>
        <li><a href="#">2071-10-10</a></li>
        <li><a href="#">2072-10-10</a></li>
      </ul>
    </div>


	
    
</div>





<div class="col-md-9">

    <h2>Our Alumni</h2>
   
        

        @foreach($users as $user)
            <div class="row">
             <div class="col-md-12">
                <div class="panel panel-info">
                    <div  class="panel-heading">
                       <h3><a href="#"><span class="badge">{{ $user->ID }}</span>
                            {{ $user->Name }} </a></h3> 
                    </div>
                    <div class="panel-body">
                        <div class="col-md-8">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><dt> Graduation Date:</dt></td>                                    
                                            <td><mark> {{$user->Graduation_Date}}</mark></td>
                                        </tr>
                                        <tr>
                                            <td><dt> Address:</dt></td>
                                            <td><mark> {{$user->Address}}</mark></td>
                                        </tr>
                                        <tr>
                                            <td><dt> Email:</dt></td>
                                            <td><mark> {{$user->Email}}</mark></td>
                                        </tr>
                                        <tr>
                                            <td><dt> Comment</dt></td>
                                            <td><mark> {{$user->Comments}}</mark></td>
                                        </tr>

                                    </tbody>

                                </table>                     
                                 
                            </div>
                        </div>

                        <div class="col-md-4">
                            <img src="http://placehold.it/200x200" class="img-circle" alt="name">


                        </div>

                 </div>
                 

        


                

            
                </div>
            </div>
        </div>
        @endforeach


       
    
</div>






@endsection
        



