@extends('mainpage.layout')
  
@section('content')


<div class="container"">     
<div class="title mb-3" >
  <div style="padding-right:8px;display:flex;justify-content:space-between;align-items:center;">
  <a style="color:white;text-decoration: none;" href="{{ url('movie') }}"><h4 class="mt-1"><b>Recently added</b></h4></a>
  <a class="btn" style="background-color:#131720 ;color:white;" href="{{ url('movie') }}">See</a>
</div>


</div>

<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    @foreach ($contents as $content)
      <div class="swiper-slide movieClick">
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


  <div class="title mb-3" >
  <div style="padding-right:8px;display:flex;justify-content:space-between;align-items:center;">
  <a style="color:white;text-decoration: none;" href="{{ url('movie/popular') }}"><h4 class="mt-1"><b>Popular</b></h4></a>
  <a class="btn" style="background-color:#131720 ;color:white;" href="{{ url('movie/popular') }}">See all</a>
</div>


</div>
  <div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    @foreach ($contents1 as $content1)
      <div class="swiper-slide movieClick">
         <div class="movie">
         
         <a href="{{ route('show',$content1->id) }}"><img src="{{ $content1->poster}}" alt=""></a>
         </div>
         
         <div class="ellipsis">
         <div class="movie-info">
          <p>{{ $content1->title }}</p>
          
         </div>
         </div>
         
       </div>
            
            
        
        @endforeach
  </div>




</div>       
  
  <script src="https://unpkg.com/swiper@7/swiper-bundle.js"></script>  
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>  
  <script>
      const swiper = new Swiper('.swiper', {
        
        
breakpoints: {
   // when window width is >= 320px
   320: {
    slidesPerView: 2.5,
    spaceBetween: 10
   },
   // when window width is >= 480px
   576: {
    slidesPerView: 3.5,
    spaceBetween: 20
   },
   // when window width is >= 640px
   768: {
    slidesPerView: 4.5,
    spaceBetween: 30
   },
   992: {
    slidesPerView: 5.5,
    spaceBetween: 30
   },
   1200: {
    slidesPerView: 5.5,
    spaceBetween: 30
   },

  },



freeMode: {
  enabled: true,
  sticky: true,
},
});


  </script>
  
</body>
@endsection