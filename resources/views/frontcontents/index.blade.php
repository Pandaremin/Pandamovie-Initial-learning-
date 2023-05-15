@extends('frontcontents.layout')
  
@section('content')


  <div style="">
  <div class="title mb-3" >
  <h4 class="mt-1"><b>Recently added movies</b></h4>
  </div>

    <div class="row" id="row">
     @foreach ($contents as $content)
      <div class="col-4 col-sm-4 col-md-3 col-lg-2 mt-3 movieClick">
         <div class="movie">
         
         <a href="{{ route('show',$content->id) }}"><img src="{{ $content->poster}}" alt=""></a>
         </div>
         <div class="movieinfoellispe">
         <div class="movie-info">
          <p>{{ $content->title }}</p>
          
         </div>
         </div>
         
       </div>
            
            
        
        @endforeach
</div>  
{!! $contents->links() !!}
  </div>
@endsection