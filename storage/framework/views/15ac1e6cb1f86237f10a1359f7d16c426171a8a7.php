<?php $__env->startSection('main'); ?>

<h1 class="mb-5">Cadastro de Participantes</h1>

<div class="container">
    <div colass = "row mt-5">

        <form method="post" action="">

            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="Text" class="form-control" name="nome" id="nome" placeholder="">
            </div>
            <div class="mb-3">
                <label for="sobrenome" class="form-label">Sobrenome</label>
                <input type="Text" class="form-control" name="sobrenome" id="sobrenome" placeholder="">
            </div>
            <div class="mb-3">
                <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" name="data_nascimento" id="data_nascimento" placeholder="">
            </div>
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="Text" class="form-control" name="endereco" id="endereco" placeholder="">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="Text" class="form-control" name="email" id="email" placeholder="teste@exemplo.com">
            </div>

            <div class="mb-3">
                <button type="submit" class ="btn btn-success"">CADASTRAR</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\av2Framework\resources\views/pastial/participantes.blade.php ENDPATH**/ ?>