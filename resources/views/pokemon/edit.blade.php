
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h2>Pokémons</h2>
                <div class="card-body">
                    <form method="POST" action="{{ url('pokemon/'.$pokemon->id) }}">
                        @method("PUT")
                        @csrf
                        <br>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" value="{{$pokemon->nombre}}" required>
                        </div><br>

                        <div class="form-group">
                            <label for="tipo">Tipo</label>
                            <select name="tipo" id="tipo" class="form-control" >
                                <option value="Fuego">Fuego</option>
                                <option value="Agua">Agua</option>
                                <option value="Planta">Tierra</option>
                            </select>
                        </div><br>

                        <div class="form-group">
                            <label for="tamaño">Tamaño</label>
                            <select name="tamaño" id="tamaño" class="form-control" >
                                <option value="Grande">Grande</option>
                                <option value="Mediano">Mediano</option>
                                <option value="Pequeño">Pequeño</option>
                            </select>
                        </div><br>
                        
                        <div class="form-group">
                            <label for="peso">Peso</label>
                            <input type="text" name="peso" id="peso" class="form-control" value="{{$pokemon->peso}}">
                        </div><br>
                        <div>

                        <button type="submit" class="btn btn-primary">Editar Pokémon</button>

                        <a href="{{url('pokemon')}}">Volver</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>