@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Ajouter patient</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('patients.index') }}"> retour </a>
</div>
</div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
<strong>whoops!</strong> u have some problems with ur input <br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form action="{{ route('patients.update',$patient->id) }}" method="POST">
@csrf 
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>pateintName</strong>
<input type="text" name="patname" value="{{ $patient->patname}}"
class="form-control" placeholder="Name">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>prenom</strong>
<input type="text" name="prenom" value="{{ $patient->prenom}}"
class="form-control" placeholder="prenom">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>CIN</strong>
<input type="text" name="CIN" value="{{ $patient->CIN}}"
class="CIN" placeholder="CIN">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>dateNaissance</strong>
<input type="text" name="dateNaissance" value="{{ $patient->dateNaissance}"
class="dateNaissance" placeholder="dateNaissance">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>telephone</strong>
<input type="text" name="telephone" value="{{ $patient->telephone}"
class="telephone" placeholder="telephone">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>email</strong>
<input type="text" name="email" value="{{ $patient->email}"
class="email" placeholder="email">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>adresse</strong>
<input type="text" name="adresse" value="{{ $patient->adresse}"
class="adresse" placeholder="adresse">
</div>
</div>


<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit"  class="btn btn-primary"> submit </button>
</div>
</div>
</form>
@endsection
