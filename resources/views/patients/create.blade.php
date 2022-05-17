@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
@if ($errors->any())
<div class="alert alert-danger">
<strong>whoops!!!</strong> there were some problems <br><br>
<ul>
@foreach ($errors->all() as $error)
<li> {{ $error }} </li>
@endforeach 
</ul>
</div>
@endif
<form action="{{ route('patients.store') }}" method="POST">
@csrf 
<div class="col-lg-12 margin-tb" >
    <div class="pull-left">
        <a class=" btn btn-primary" href="{{ route('patients.index') }}"> Back</a>
        </div>
<div class="container">
    <br/>
<h2 style="text-align: center ">add new patient</h2>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4 form-group">
<strong>Patient Name : </strong>
<input type="text" name="name" class="form-control" placeholder="name">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4 form-group">
<strong>Prenom : </strong>
<input type="text" name="prenom" class="form-control" placeholder="prenom">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4 form-group">
<strong>CIN : </strong>
<input type="text" name="CIN" class="form-control" placeholder="CIN">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4 form-group">
<strong>Date de naissance : </strong>
<input class="date form-control" type="dateNaissance" id="enddate" name="dateNaissance" placeholder="dateNaissance">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4 form-group">
<strong>Num de telephone : </strong>
 <input type="text" name="telephone" class="form-control" placeholder="telephone">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class=" col-md-4 form-group">
<strong>Email : </strong>
<input type="text" name="email" class="form-control" placeholder="email">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class=" col-md-4 form-group">
<strong>Adresse : </strong>
<input type="text" name="adresse" class="form-control" placeholder="adresse">
</div>
</div>
<div class="row">
<div class="col-md-4 text-center"></div>
<div class="form-group col-md-4">
<button type="submit" class="btn btn-success"> submit </button>
</div>
</div>
</form>
</div>
 <script type="text/javascript">  
    $('#dateNaissance').datepicker({ 
        autoclose: true,   
        format: 'yyyy-mm-dd'});
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
    </script>
    </html>
@endsection