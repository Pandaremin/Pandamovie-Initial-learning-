@extends('contents.layout')
 
@section('content')
<div class="">
    <div class="row" style="margin:15px 0;">
      <div class="col-6 col-lg-6">
            <h3><b>Dashboard</b></h3>
      </div>
            
      <div class="col-6 col-lg-6"  style="display:flex;justify-content:flex-end;">
        <a class="btn btncolor" href="{{ route('contentsadmin.create') }}"> Add New Item</a>
      </div>
    </div>
        
        <hr style="border:1px solid "> 
            

    
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success" style="background-color:rgb(37, 29, 56);color:white;">
            <p></p>
        </div>
    @endif
    
    
        <div class="" style="border-radius:10px;width:100%;max-width:350px;height:auto;background:#151f30;padding:10px;font-size:24px;display:flex;justify-content:center;">Total movies added: {{ $contents2->count() }} </div>
      
<div class="row">
  <div class="col-12 col-sm-12 col-lg-6 mt-4">
    <div class="card card1">
      <div class="card-header" style="padding:15px;display:flex;justify-content:space-between;align-items:center;">
      <b>Popular movies</b><a href="{{ route('contentsadmin.popular') }}" class="btn btncard" >See all</a>
      </div>
    <div class="card-body">
    <table style="width:100%;">
    <tr>
    <th style="width:5%;">Id</th>
    <th style="width:40%;">Title</th>
    <!-- <th style="width:5%;">Rating</th>
    <th style="width:10%;">Views</th> -->
    <th style="display:flex;justify-content:center;">Action</th>
  </tr>
  @foreach ($contents1 as $content1)
  <tr class="tr">
    <td>{{ $content1->id }}</td>
    <td>{{ $content1->title }}</td>
    <!-- <td>${{ $content1->rating }}</td>
    <td>{{ $content1->views }}</td> -->
    <td style="display:flex;justify-content:center;">
                <form action="{{ route('contentsadmin.destroy',$content1->id) }}" method="POST">
   
                  <a class="btn btncolor" href="{{ route('contentsadmin.edit',$content1->id) }}"><i class="fas fa-pen-fancy"></i>
                  </a>
                  <a class="btn btncolor" href="{{ route('show',$content1->id) }}"><i class="fas fa-eye"></i>
                  </a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btncolor"><i class="fas fa-trash-alt"></i></button>
                </form>
    </td>
  </tr>
  @endforeach
</table>
  </div>
</div>
</div>
    <div class="col-12 col-sm-12 col-lg-6 mt-4">
    <div class="card card2">
  <div class="card-header"style="padding:15px;display:flex;justify-content:space-between;align-items:center;">
  <b>Recently added movies</b> <a href="{{ route('contentsadmin.recent') }}" class="btn btncard">See all</a>
  </div>
  <div class="card-body">
  <table style="width:100%;">
    <tr>
    <th style="width:5%;">Id</th>
    <th style="width:40%;">Title</th>
    <!-- <th style="width:5%;">Rating</th>
    <th style="width:10%;">Views</th> -->
    <th style="display:flex;justify-content:center;">Action</th>
  </tr>
  @foreach ($contents as $content)
  <tr>
    <td>{{ $content->id }}</td>
    <td>{{ $content->title }}</td>
    <!-- <td>${{ $content->rating }}</td>
    <td>{{ $content->views }}</td> -->
    <td style="display:flex;justify-content:center;">
                <form action="{{ route('contentsadmin.destroy',$content->id) }}" method="POST">
   
                <a class="btn btncolor" href="{{ route('contentsadmin.edit',$content->id) }}"><i class="fas fa-pen-fancy"></i>
</a>
                    <a class="btn btncolor" href="{{ route('show',$content->id) }}"><i class="fas fa-eye"></i>
</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btncolor"><i class="fas fa-trash-alt"></i></button>
                </form>
            </td>
  </tr>
  @endforeach
</table>
    
  </div>
</div>  
    
</div>
</div>
</div>
    
      
@endsection
