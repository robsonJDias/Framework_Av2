<?php $__env->startSection('main'); ?>

<h1 class="mb-5">Listagem de Participantes</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Sobrenome</th>
            <th scope="col">Data de Nascimento</th>
            <th scope="col">Endereço</th>
            <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $participantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $participante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
            <td><?php echo e($participante->id); ?></td>
            <td><?php echo e($participante->nome); ?></td>
            <td><?php echo e($participante->sobrenome); ?></td>
            <td><?php echo e($participante->data_nascimento); ?></td>
            <td><?php echo e($participante->endereco); ?></td>
            <td><?php echo e($participante->email); ?></td>
        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\av2Framework\resources\views/pastial/inscritos.blade.php ENDPATH**/ ?>