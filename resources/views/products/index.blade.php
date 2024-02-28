@extends('products.layout')
@section('content')
<div class="row">
<div-class="col-1g-12"> <div class="pull-left">
 <h2>Laravel 8 CRUD Example</h2> </div> <div class="pull-right">
<a class="btn btn-success" href="{{ route ('products.create') }}"> Create New Product</a> </div>
</div> </div>

@if ($message = Session:: get('success'))
 <p class="alert alert-success" >{{$message}}</p> 
 
@endif

<table class="table table-brodered" >
<tr>
    <th>id</th>
    <th>Name</th>
    <th>Details</th>
    <th>actions</th>
</tr>
@foreach ( $product as $p )
<tr>
    <td>{{ $p->id }}</td>
    <td>{{ $p->name }}</td>
    <td>{{ $p->details }}</td> 
</tr>
@endforeach
</table>



@endsection