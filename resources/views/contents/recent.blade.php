@extends('contents.layout')
 
@section('content')
<div class="container">
    
<div class="mt-3 mb-3 ms-2">
      <div class="row p-2"
      ><div class="col-lg-6">
        <h3>Recently added movies</h3>
      </div>
      
        <div class="col-lg-6 " style="display:flex;justify-content:flex-end;">
          <a class="btn btn-primary" href="{{ route('contentsadmin.index') }}"> Back</a>
      </div>
     
    </div>
  
</div>
<div class="mb-4" style="border-top: 2px solid #151f30;"></div>

    <div class="card card2" style="overflow: auto ;">
    <div class="card-header"style="padding:20px;">
    <b>Movies list</b> 
    </div>
    <div class="card-body">
    <table style="width:100%;min-width:450px;">
    <tr>
    <th style="width:5%;">Id</th>
    <th style="width:30%;">Title</th>
    <th style="width:5%;">Rating</th>
    <th style="width:10%;">Views</th>
    <th style="display:flex;justify-content:center;">Action</th>
  </tr>
  @foreach ($contents2 as $content)
  <tr>
    <td>{{ $content->id }}</td>
    <td>{{ $content->title }}</td>
    <td>${{ $content->rating }}</td>
    <td>{{ $content->views }}</td>
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
{!! $contents2->links() !!}  

</div>  
   

    
    </div>
    
  
    
      
@endsection