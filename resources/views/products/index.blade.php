@extends('products.layout')
@section('content')
<div class="row">
<div-class="col-1g-12">  <div class="pull-right">
<a class="btn btn-success" href="{{ route ('products.create') }}"> Create New Product +</a> </div>
</div> </div>

@if ($message = Session:: get('success'))
 <p class="alert alert-success" >{{$message}}</p> 
@endif

@if ($message = Session:: get('deleted'))
 <p class="alert alert-danger" >{{$message}}</p> 
@endif

<table class="table table-brodered" >
<tr>
    <th>id</th>
    <th>Name</th>
    <th>Details</th>
    <th width="280px" >actions</th>
</tr>
@foreach ( $product as $pr )
<tr>
    <td>{{ $pr->id }}</td>
    <td>{{ $pr->name }}</td>
    <td>{{ $pr->details }}</td> 
    <td>  

   <form action="{{ route('products.destroy',$pr->id) }}" method="POST" >
    <a class="btn btn-info" href="{{ route('products.show',$pr->id) }}">show</a> 
    <a class="btn btn-secondary" href="{{ route('products.edit',$pr->id) }}">edit</a> 
    @csrf
     @method('DELETE')
     <button type="submit" class="btn btn-danger" onclick='return confirm("are you sure you want to delete {{ $pr->name }} permentally")' >Delete</button>
    </form>     

    </td>
</tr>
@endforeach
</table>

{{ $product->links() }}

@endsection