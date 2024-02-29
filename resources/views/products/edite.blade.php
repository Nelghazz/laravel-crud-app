@extends('products.layout')
@section('content')

<div-class="row">
<div class="col-1g-12 margin-tb">
<div class="pull-left">
 <h2>update Product</h2> 
</div>
 <div class="pull-right">
<a class="btn btn-primary" href="{{ route ('products.index') }}">Back</a>
 </div>
</div> 
</div>


@if ($errors->any ( ))
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your input.<br><br> <u1>

@foreach ($errors->all () as $error)
<li>{{ $error }}</1i>
 @endforeach

</ul> 
</div>
@endif

<form action="{{ route('products.update',$product->id ) }}" method="POST" >
    @csrf
    @method('PUT')
    <div class="row"> 
    
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group"> <strong>Name:</strong>
        <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder= "Name"> </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Detail:</strong>
         <input class="form-control" value="{{ $product->details }}" style="height:150px" name="details" placeholder="Detail"></input>
        </div> 
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div> 
    
    </div>
</form>
@endsection