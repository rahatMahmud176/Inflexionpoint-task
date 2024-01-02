@extends('backend.master')

@section('title')
    Dashboard
@endsection

@section('content')

 <div class="row">
    <div class="card text-left col-md-6 mx-auto my-auto"> 
      <div class="card-body">
        <h2 class="card-title">
            @can('is_admin')    
                Hello, Admin How are you Today? 
            @else 
                Hello, User How are you Today? 
            @endcan

        </h2> 
      </div>
    </div>
 </div>
    
@endsection