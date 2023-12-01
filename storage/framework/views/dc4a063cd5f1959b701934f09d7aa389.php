
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h2>Pokémons</h2>
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('pokemon.store')); ?>">
                        <?php echo csrf_field(); ?>
                        <br>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" required>
                        </div><br>

                        <div class="form-group">
                            <label for="tipo">Tipo</label>
                            <select name="tipo" id="tipo" class="form-control" required>
                                <option value="Fuego">Fuego</option>
                                <option value="Agua">Agua</option>
                                <option value="Planta">Tierra</option>
                            </select>
                        </div><br>

                        <div class="form-group">
                            <label for="tamaño">Tamaño</label>
                            <select name="tamaño" id="tamaño" class="form-control" required>
                                <option value="Grande">Grande</option>
                                <option value="Mediano">Mediano</option>
                                <option value="Pequeño">Pequeño</option>
                            </select>
                        </div><br>
                        
                        <div class="form-group">
                            <label for="peso">Peso</label>
                            <input type="text" name="peso" id="peso" class="form-control" required>
                        </div><br>
                        <div>

                        <button type="submit" class="btn btn-primary">Crear Pokémon</button>

                        <a href="<?php echo e(url('pokemon')); ?>">Volver</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\pokemon\resources\views/pokemon/create.blade.php ENDPATH**/ ?>