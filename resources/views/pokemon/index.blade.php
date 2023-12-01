
@section('title', 'Pokemons')
    
@section('contenido')

<main>
    <div class="container">
        <h2>Pokémons</h2>

        <a href="{{url('pokemon/create')}}">Crear pokemon</a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Tamaño</th>
                    <th>Peso</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($pokemons as $pokemon)
                    <tr>
                        <td>{{$pokemon->id}}</td>
                        <td>{{$pokemon->nombre}}</td>
                        <td>{{$pokemon->tipo}}</td>
                        <td>{{$pokemon->tamaño}}</td>
                        <td>{{$pokemon->peso}}</td>
                        <td><a href="{{url('pokemon/'.$pokemon->id.'/edit')}}"><button>Editar</button></td>
                        <td><form action="{{url('pokemon/'.$pokemon->id)}}" method="POST"> 
                            @method("DELETE")
                            @csrf
                            <button type="submit">Eliminar</button>
                            </form>
                        </td>     
                    </tr>
                @endforeach
            </tbody>

        </table>

    </div>
</main>