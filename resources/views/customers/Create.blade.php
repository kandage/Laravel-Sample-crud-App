@extends('customers.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Customer Page</div>
  <div class="card-body">
      
      <form action="{{ url('customer') }}" method="post">
        {!! csrf_field() !!}
        <label>FullName</label></br>
        <input type="text" name="fullName" id="fullName" class="form-control"></br>
        <label>Age</label></br>
        <input type="text" name="age" id="age" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Discription</label></br>
        <input type="text" name="discription" id="discription" class="form-control"></br>
        <label>City</label></br>
        <input type="text" name="city" id="city" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status" class="form-control"></br>
       
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop