@extends('customers.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">All Customers Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">FullName : {{ $customers->fullname }}</h5>
        <p class="card-text">Age : {{ $customers->age }}</p>
        <p class="card-text">Address : {{ $customers->address}}</p>
        <p class="card-text">Discription : {{ $customers->discription }}</p>
        <p class="card-text">City : {{ $customers->city }}</p>
        <p class="card-text">Status : {{ $customers->status }}</p>
  </div>
       
    </hr>
  
  </div>
</div>