@extends('contacts.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Create Page</div>
  <div class="card-body">
      
      <form action="{{ url('contact') }}" method="post">
        {!! csrf_field() !!}

        <label>First_Name</label></br>
        <input type="text" name="firstname" id="firstname" class="form-control" required></br>
        <label>Last_Name</label></br>
        <input type="text" name="lastname" id="lastname" class="form-control" required></br>
        <label>Date_of_birth</label></br>
        <input type="date" name="Dateofbirth" id="Dateofbirth" class="form-control" required></br>
        <label>Username</label></br>
        <input type="text" name="username" id="username" class="form-control" required></br>
        <label>Password</label></br>
        <input type="password" name="password" id="password" class="form-control" required></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control" required></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@endsection