

<?php $__env->startSection('content'); ?>
<div class="container">
    <a href="<?php echo e(url('/pakaian/create')); ?>" class="btn btn-warning float-end mb-3">Tambah Data Pakaian</a>
    <table class="table">
        <thead class="table table-success">
            <tr class="text-center">
                <th>ID</th>
                <th>Jenis Pakaian</th>
                <th>Harga Perkilo</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pakaian): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="text-center">
                <td><?php echo e($pakaian->id_pakaian); ?></td>
                <td><?php echo e($pakaian->jenis_pakaian); ?></td>
                <td>Rp. <?php echo e($pakaian->harga_perkilo); ?></td>
                <td width="100px"><a href="<?php echo e(url('pakaian/edit')); ?>/<?php echo e($pakaian->id_pakaian); ?>" class="btn btn-primary">Edit</a></td>
                <td width="100px"><a href="<?php echo e(url('pakaian/destroy')); ?>/<?php echo e($pakaian->id_pakaian); ?>" class="btn btn-danger" onclick="return confirm('Ingin Menghapus Pakaian Ini ?');">Hapus</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_mei\resources\views/pakaian/index.blade.php ENDPATH**/ ?>