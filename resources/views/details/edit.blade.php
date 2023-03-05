@extends('./../Layouts/app')

@section('form-screen')
    <div class="row mt-2">
        <div class="col-md-4">
           
        </div>
        <div class="col-md-4">
            <div class="card mt-3"> 
                <div class="card-body">
                    <h4 class="color-danger">Modifier des information   </h4>
                    <form action="/inform/{{ $detail->id }}/update">
                        @method('POST')
                        @csrf
                        <label for="" class="mb-2">nom : </label>
                        <input type="text" value="{{ $detail->name }}" class="form-control">
                        <label for="" class="mb-2">prenom : </label>
                        <input type="text" value="{{ $detail->lastname }}" class="form-control">
                        <label for="" class="mb-2">email : </label>
                        <input type="text" value="{{ $detail->email }}" class="form-control">
                        <label for="" class="mb-2">mot de passe : </label>
                        <input type="text" value="{{ $detail->pass }}" class="form-control">
                        <label for="" class="mb-2">numero : </label>
                        <input type="text" value="{{ $detail->number }}" class="form-control">
                        <label for="" class="mb-2">description : </label>
                        <textarea name="description" col="100" class="form-control">
                            {{ $detail->description }}
                        </textarea>
                        <button class="btn btn-success mt-1" type="submit">modifer</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
@endsection