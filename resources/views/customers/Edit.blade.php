@extends('customers.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Customer Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('customer/' .$customers->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$customers->id}}" id="id" />
        <label>FullName</label></br>
        <input type="text" name="fullName" id="fullName" value="{{$customers->name}}" class="form-control"></br>
        <label>Age</label></br>
        <input type="text" name="age" id="age" value="{{$customers->address}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$customers->mobile}}" class="form-control"></br>
        <label>Discription</label></br>
        <input type="text" name="discription" id="discription" value="{{$customers->address}}" class="form-control"></br>
        <label>City</label></br>
        <input type="text" name="city" id="city" value="{{$customers->mobile}}" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status" value="{{$customers->mobile}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop