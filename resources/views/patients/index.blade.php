@extends('layouts.app')
@section('content')
<div class="pull_left">
<h2 style="text-align: center ">Liste des patients</h2>
<link rel="" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</div>
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<a class="btn btn-success" href="{{ route('patients.create')}}"> create new patient</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class='alert alert-success'>
<p>{{ $message }} </p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th style="text-align: center ">nom</th>
<th style="text-align: center ">prenom</th>
<th style="text-align: center ">CIN</th>
<th style="text-align: center ">date de Naissance</th>
<th style="text-align: center ">Numero de telephone</th>
<th style="text-align: center ">email</th>
<th style="text-align: center ">adresse</th>
<th style="text-align: center ">sexe</th>
<th style="text-align: center " width="280px">Action</th>
</tr>
@foreach($patients as $Patient)
<tr>
<td>{{ ++$i }} </td>
<td>{{$Patient->nom}}</td>
<td>{{$Patient->prenom}}</td>
<td>{{$Patient->CIN}}</td>
<td>{{$Patient->dateNaissance}}</td>
<td>{{$Patient->telephone}}</td>
<td>{{$Patient->email}}</td>
<td>{{$Patient->adresse}}</td>
<td>{{$Patient->sexe}}</td>
<td>
<form action="{{route('patients.destroy',$Patient->id)}}" method="POST">
<a class="btn btn-info" href="{{ route('patients.show',$Patient->id) }}">show</a>
<a class="btn btn-primary" href="{{ route('patients.edit',$Patient->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
@endsection