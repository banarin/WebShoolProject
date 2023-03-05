@extends('./Layouts/app')

@section('form-screen')

<h2 class="align-center mt-2"> Ajouter un élèves </h2>
   <div class="card mt-2">
   <div class="card-body">
    <form action="/formulat" method="POST" class="form-product">
        @method('POST')
        @csrf
        <div class="form-group">
            <label for="">Nom :</label>
            <input type="text" name="name" class="form-control" placeholder="nom : " value={{old('name')}}>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div class="form-group">
            <label for="">prenom :</label>
            <input type="text" name="secondname" class="form-control" placeholder="prenom : " value={{old('secondname')}}>
            @error('secondname')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div class="form-group">
            <label for=""> email :</label>
            <input type="email" name="mail" class="form-control" placeholder="email : " value={{old('mail')}}>
            @error('mail')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div class="form-group">
            <label for=""> Mot de passe :</label>
            <input type="password" class="form-control" placeholder="mote de passe : " name="mdp" value={{old('mdp')}}>
            @error('mdp')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
         </div>     
        <br>
        <div class="form-group">
            <label for=""> Telephone :</label>
            <input type="phone" class="form-control" placeholder="telephone : " name="tel" value={{old('number')}}>
            @error('tel')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
          <br>
          <br>
          <div class="form-group">
            <label for="">description :</label>
            <input type="text" name="descrit" class="form-control" placeholder="description de l'élève : " value={{old('descrit')}}>
            @error('descrit')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">envoyer</button>

    </form>
   </div>
   </div>
@endsection