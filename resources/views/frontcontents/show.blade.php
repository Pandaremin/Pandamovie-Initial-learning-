@extends('frontcontents.layout')
@section('content')


<div class="row" style="margin-top:40pX;">
              <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="iframe-container">
                <IFRAME SRC="{{$content->download1 }}" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=315 allowfullscreen></IFRAME>
              </div>
              </div>
              
          
</div>
    
    
        <div class="row mt-5">
        <div class="col-12 col-sm-12 col-md-4 col-lg-4"style="display:flex;justify-content:center;" >
        
        <img style="border-radius:5px;width:auto; height: 320px;margin-top:30px" src="{{$content->poster}}"  alt="">

        </div>
        <div class="col-lg-8 col-sm-12 col-md-8">
        
            <div class="form-group mt-3">
                <h3><b>{{$content->title}}</b></h3>
            </div>
            <div class="form-group mt-3">
                
                {{$content->info}}
            </div>
            <div class="form-group mt-5">
            <i class="far fa-star me-1" style="color:blue;"></i>
                {{$content->rating}}/10   
                
            </div>
            <div class="form-group mt-3" >
            
                <i class="far fa-clock me-1" style="color:blue;"></i> {{$content->duration}}    
                
            </div>
            <div class="form-group mt-3" >
            
                <i class="far fa-calendar-alt me-1" style="color:blue;"></i> {{$content->releasedate}}
            </div>
            <div class="form-group mt-5">
            <div class="row">
                     <div class="col-6 col-sm-3"style="display:flex;justify-content:center;"><a style="color:white;background:blue;display:flex;justify-content:center;" class="btn btncolor" href="{{$content->trailer }}"> <i class="fas fa-play-circle me-1"></i> Trailer</a></div>
                     <div class="col-6 col-sm-3"style="display:flex;justify-content:center;"><a style=" color:white;background:blue;;display:flex;justify-content:center" class="btn btncolor" href="{{$content->trailer}}"> Download</a></div>
                 </div>
            </div>
             <div class="form-group mt-4">
                 <div class="row">
                     <div class="col-6 col-sm-4"style="display:flex;justify-content:center;"><a style="background:#131720; border-radius:50px;display:flex;justify-content:center;" class="btn btncolor" href="{{ route('genre.show',$content->genre1) }}"> {{$content->genre1}}</a></div>
                     <div class="col-6 col-sm-4"style="display:flex;justify-content:center;"><a style=" background:#131720; border-radius:50px;display:flex;justify-content:center;" class="btn btncolor" href="{{ route('genre.show',$content->genre2) }}"> {{$content->genre2}}</a></div>
                     <div class="col-6 col-sm-4 "style="display:flex;justify-content:center;width:auto;"><a style=" background:#131720; border-radius:50px;display:flex;justify-content:center;" class="btn btncolor" href="{{ route('genre.show',$content->genre3) }}"> {{$content->genre3}}</a></div>

                 </div>
                 
                 
             </div>
             
            
        
                
            </div>   
        </div>
    
    

   
@endsection