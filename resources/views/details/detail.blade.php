@extends('./../Layouts/app')

@section('form-screen')
  <div class="card mt-3"> 
    <div class="card-body">
    <button class="btn btn-primary rounded-circle">
      <i class="bi bi-arrow-left"></i>
    </button>
        <a href="/inform" class="text-decoration-none">retour</a>  
        <div class="title mt-3"> NOM : {{ $detail->name }}</div>
        <div class="title mt-3"> PRENOM : {{ $detail->lastname }}</div>
        <div class="title mt-3"> NUMERO : {{ $detail->number }}</div>
        <div class="title mt-3"> EMAIL : {{ $detail->email }}</div>
        <div class="title mt-3"> INFORMATION PERSONNEL : <br> {{ $detail->description }}</div>
    </div>
    <div class="card-footer">
       <a href="/inform/{{ $detail->id }}/edit" class="btn btn-info">Editer </a>
        <button class="btn btn-danger">suprimer</button>
    </div>
  </div>
@endsection