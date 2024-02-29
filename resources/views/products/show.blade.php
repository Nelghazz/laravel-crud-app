@extends('products.layout')
@section('content')

<div-class="row">
<div class="col-1g-12 margin-tb">
<div class="pull-left">
 <h2>{{ $product->name }} details</h2> 
</div>
 <div class="pull-right">
<a class="btn btn-primary" href="{{ route ('products.index') }}"> Back</a>
 </div>
</div> 
</div>

<table class="table table-bordered" >
    <thead> <tr>
        <th>name</th>
        <th>details</th>
    </tr> </thead>
   <tbody>
    <tr>
        <td>{{ $product->name }}</td>
        <td> {{ $product->details }}</td>
    </tr>
   </tbody>
</table>

@endsection