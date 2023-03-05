@extends('./Layouts/app')

<div class="container mt-3">
    <table class="table table-border table-sm-2">
        <thead class="table-success">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">nom</th>
            <th scope="col">prenom</th>
            <th scope="col">email</th>
            <th scope="col">telephone</th>
            <th scope="col">date d'ajoute</th>
            <th  scope="col"> detail </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">
                @foreach ($bases as $base)
                <p>{{ $base->id}}</p>
                @endforeach
            </th>
            <td>
                @foreach ($bases as $base)
                <p>{{ $base->name}}</p>
                @endforeach
            </td>
            <td>
              @foreach ($bases as $base)
              <p>{{ $base->lastname}}</p>
              @endforeach
          </td>
            <td>
                @foreach ($bases as $base)
                <p>{{ $base->email}}</p>
                @endforeach
            </td>
            <td>
                @foreach ($bases as $base)
                <p>{{ $base->number}}</p>
                @endforeach
            </td>
            <td>
                @foreach ($bases as $base)
                <p>{{ $base->created_at}}</p>
                @endforeach
            </td>
            <th>
              @foreach ($bases as $base) 
                <a href="/inform/{{ $base->id }}">voir</a>
              @endforeach
            </th>
          </tr>
          
        </tbody>
      </table>
      
     
</div>