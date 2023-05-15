@extends('mainpage.layout')
  
@section('content')
<div class="container" >
  
<h1 class="showcase-heading"><b>Recently added</b></h1>
    <div class="row" id="row">
        
    @foreach ($content as $contents)
    <div class="col-4 col-sm-4 col-md-3 col-lg-2 movieClick">
         <div class="movie">
         
         <a href="{{ route('show',$contents->id) }}"><img src="{{ $contents ->poster}}" alt=""></a>
         </div>
         <div class="movieinfoellispe">
         <div class="movie-info">
          <p>{{ $contents->title }}</p>
          
         </div>
         </div>
         
       </div>
            
            
        
        @endforeach
</div>  

  </div> 
@endsection