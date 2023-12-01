
<?php $__env->startSection('title', 'Pokemons'); ?>
    
<?php $__env->startSection('contenido'); ?>

<main>
    <div class="container">
        <h2>Pokémons</h2>

        <a href="<?php echo e(url('pokemon/create')); ?>">Crear pokemon</a>

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
                <?php $__currentLoopData = $pokemons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pokemon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($pokemon->id); ?></td>
                        <td><?php echo e($pokemon->nombre); ?></td>
                        <td><?php echo e($pokemon->tipo); ?></td>
                        <td><?php echo e($pokemon->tamaño); ?></td>
                        <td><?php echo e($pokemon->peso); ?></td>
                        <td><a href="<?php echo e(url('pokemon/'.$pokemon->id.'/edit')); ?>"><button>Editar</button></td>
                        <td><form action="<?php echo e(url('pokemon/'.$pokemon->id)); ?>" method="POST"> 
                            <?php echo method_field("DELETE"); ?>
                            <?php echo csrf_field(); ?>
                            <button type="submit">Eliminar</button>
                            </form>
                        </td>     
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

        </table>

    </div>
</main><?php /**PATH C:\xampp\htdocs\pokemon\resources\views/pokemon/index.blade.php ENDPATH**/ ?>