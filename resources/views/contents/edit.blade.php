@extends('contents.layout')
   
@section('content')
<div class="container">
<div class="mt-3 mb-3 ms-2">
      <div class="row p-2"
      ><div class="col-lg-6">
        <h3>Edit</h3>
      </div>
      
        <div class="col-lg-6 " style="display:flex;justify-content:flex-end;">
          <a class="btn btn-primary" href="{{ route('contentsadmin.index') }}"> Back</a>
      </div>
     
    </div>
  
</div>
 
  
  <div style="border-top: 2px solid #151f30;"></div>
  @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check input field code<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

  <div class="formbox">
    <form action="{{route('contentsadmin.update',$content->id) }}" method="POST">
      @csrf 
      @method('PUT')
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <div class="mb-3">
        <input  class="form-control" id="floatingInput"  height="48" class="form-control form-control-sm" type="text" name="title" placeholder="Title" aria-label=".form-control-sm example" value="{{$content->title}}">
      </div>
    </div> 
    <div class="col-sm-12 col-md-12 col-lg-12">
      <div class="mb-3">
        <input  class="form-control" id="floatingInput"  height="48" class="form-control form-control-sm" type="text" name="poster" placeholder="Poster Link" aria-label=".form-control-sm example" value="{{$content->poster}}">
      </div>
      </div> 
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="mb-3">
          <input  class="form-control" id="floatingInput"  height="48" class="form-control form-control-sm" type="text" name="download1" placeholder="Download1" aria-label=".form-control-sm example" value="{{$content->download1}}">
        </div>
        </div> 
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div class="mb-3">
            <input  class="form-control" id="floatingInput" height="48" class="form-control form-control-sm" type="text" name="download2" placeholder="Download2" aria-label=".form-control-sm example" value="{{$content->download2}}">
          </div>
          </div> 
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="mb-3">
              
                <textarea id="txtComment" style="width:100%;height:190px;background-color:#151f30; color:white;border-radius:20px;padding:10px 25px;border:0px;" name="info" placeholder="Info" aria-label=".form-control-sm example"  >{{$content->info}}</textarea>
                


            </div>
            </div> 
    <div class="col-sm-12 col-md-12 col-lg-6">
      <div class="mb-3">
        <input  class="form-control" id="floatingInput"  height="48" class="form-control form-control-sm" type="text" name="rating" placeholder="Rating" aria-label=".form-control-sm example" value="{{$content->rating}}">
      </div>
      <div class="mb-3">
        <input  class="form-control" id="floatingInput"  height="48" class="form-control form-control-sm" type="text" name="releasedate" placeholder="Released Date" aria-label=".form-control-sm example" value="{{$content->releasedate}}">
      </div>
      <div class="mb-3">
        <input  class="form-control" id="floatingInput"  height="48" class="form-control form-control-sm" type="text" name="duration" placeholder="Duration" aria-label=".form-control-sm example" value="{{$content->duration}}">
      </div>
      
    </div> 
    <div class="col-sm-12 col-md-12 col-lg-12">
      <div class="mb-3">
        <input  class="form-control" id="floatingInput"  height="48" class="form-control form-control-sm" type="text" name="trailer" placeholder="Trailer Link" aria-label=".form-control-sm example" value="{{$content->trailer}}">
      </div>
    </div> 
    <div class="col-sm-12 col-md-12 col-lg-4">
      <div class="mb-3">
      <select name="genre1" height="48" placeholder="Genre1" class="form-control form-control-sm">
      <option value="{{$content->genre1}}">{{$content->genre1}}</option>
  <option value="Action">Action</option>
  <option value="Adult">Adult</option>
  <option value="Adventure">Adventure</option>
  <option value="Animation">Animation</option>
  <option value="Biography">Biography</option>
  <option value="Comedy">Comedy</option>
  <option value="Crime	">Crime	</option>
  <option value="Documentary">Documentary</option>
  <option value="Drama">Drama</option>
  <option value="Family">Family</option>
  <option value="Fantasy">Fantasy</option>
  <option value="History	">History	</option>
  <option value="Horror">Horror</option>
  <option value="Musical">Musical</option>
  <option value="Mystery">Mystery</option>
  <option value="Romance">Romance</option>
  <option value="Sci-Fi">Sci-Fi</option>
  <option value="Short Film">Short Film</option>
  <option value="Sport">Sport</option>
  <option value="Superhero">Superhero</option>
  <option value="Thriller">Thriller</option>
  <option value="War">War</option>
  <option value="Western">Western</option>
  
</select>      </div>
    </div> 
    <div class="col-sm-12 col-md-12 col-lg-4">
      <div class="mb-3">
      <select name="genre2" height="48" placeholder="Genre2" class="form-control form-control-sm">
      <option value="{{$content->genre2}}">{{$content->genre2}}</option>
  <option value="Action">Action</option>
  <option value="Adult">Adult</option>
  <option value="Adventure">Adventure</option>
  <option value="Animation">Animation</option>
  <option value="Biography">Biography</option>
  <option value="Comedy">Comedy</option>
  <option value="Crime	">Crime	</option>
  <option value="Documentary">Documentary</option>
  <option value="Drama">Drama</option>
  <option value="Family">Family</option>
  <option value="Fantasy">Fantasy</option>
  <option value="History	">History	</option>
  <option value="Horror">Horror</option>
  <option value="Musical">Musical</option>
  <option value="Mystery">Mystery</option>
  <option value="Romance">Romance</option>
  <option value="Sci-Fi">Sci-Fi</option>
  <option value="Short Film">Short Film</option>
  <option value="Sport">Sport</option>
  <option value="Superhero">Superhero</option>
  <option value="Thriller">Thriller</option>
  <option value="War">War</option>
  <option value="Western">Western</option>
  
</select>        </div>
    </div> 
    <div class="col-sm-12 col-md-12 col-lg-4">
      <div class="mb-3">
      <select name="genre3" height="48" placeholder="Genre3" class="form-control form-control-sm">
      <option value="{{$content->genre3}}">{{$content->genre3}}</option>
  <option value="Action">Action</option>
  <option value="Adult">Adult</option>
  <option value="Adventure">Adventure</option>
  <option value="Animation">Animation</option>
  <option value="Biography">Biography</option>
  <option value="Comedy">Comedy</option>
  <option value="Crime	">Crime	</option>
  <option value="Documentary">Documentary</option>
  <option value="Drama">Drama</option>
  <option value="Family">Family</option>
  <option value="Fantasy">Fantasy</option>
  <option value="History	">History	</option>
  <option value="Horror">Horror</option>
  <option value="Musical">Musical</option>
  <option value="Mystery">Mystery</option>
  <option value="Romance">Romance</option>
  <option value="Sci-Fi">Sci-Fi</option>
  <option value="Short Film">Short Film</option>
  <option value="Sport">Sport</option>
  <option value="Superhero">Superhero</option>
  <option value="Thriller">Thriller</option>
  <option value="War">War</option>
  <option value="Western">Western</option>
  
</select>        </div>
    </div> 
    <div class="col-sm-12 col-md-12 col-lg-6">
      <div class="mb-3">
      <select name="agerestriction" height="48" placeholder="Age restriction" class="form-control form-control-sm">
      <option value="{{$content->agerestriction}}">{{$content->agerestriction}}</option>
  <option value="All">All</option>
  <option value="Adult">Adult</option>
  
</select>      </div>
    </div> 
    <div class="col-sm-12 col-md-12 col-lg-6">
      <div class="mb-3">
      <select name="sub" height="48" placeholder="Substitle" class="form-control form-control-sm">
      <option value="{{$content->sub}}">{{$content->sub}}</option>

  <option value="MSub">MSub</option>
  <option value="ESub">ESub</option>
  <option value="NoSub">NoSub</option>
  
</select>
<input style="visibility: hidden;"  height="0" class="form-control" type="text" name="views" placeholder="" value={{$content->views}} aria-label=".form-control-sm example">
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btncolor">Submit</button>
        </div>
  </div>


    </form>

</div>
</div>
</div>






@endsection