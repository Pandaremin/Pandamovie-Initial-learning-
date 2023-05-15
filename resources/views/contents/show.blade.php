@extends('medias.layout')
@section('content')
<div class="container">
<div class="row"   >
    <div class="col-lg-6" style="display:flex;justify-content:flex-start;">
        <div >
            <h3>Media Info</h3>
        </div>
        
    </div>
            <div class="col-lg-6" style="display:flex;justify-content:flex-end;">
                <a class="btn btn-primary" href="{{ route('medias.index') }}"> Back</a>
            </div>
        
    </div>
    
    
        <div class="row">
        <div class="col-lg-4 col-sm-12 col-md-12">
        
        <img src="{{$media->posterurl}}" width="100%" alt="">

        </div>
        <div class="col-lg-8 col-sm-12 col-md-12">
        
            <div class="form-group">
                <strong>Name:</strong>
                {{$media->name}}
            </div>
            <div class="form-group">
                <strong>Info:</strong>
                {{$media->info}}
            </div>
            <div class="form-group">
                <strong>Rating:</strong>
                {{$media->rating}}
            </div>
            <div class="form-group">
                <strong>Duration:</strong>
                {{$media->duration}}
            </div>
            <div class="form-group">
                <strong>Released Date:</strong>
                {{$media->releasedate}}
            </div>   
        </div>
    </div>
    
    </div>
   
@endsection