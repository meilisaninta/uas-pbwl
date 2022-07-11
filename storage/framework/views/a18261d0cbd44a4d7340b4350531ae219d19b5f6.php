

<?php $__env->startSection('content'); ?>
<div class="container">
    <a href="<?php echo e(url('/pelanggan/create')); ?>" class="btn btn-warning float-end mb-3">Tambah Data Pelanggan</a>
    <table class="table">
        <thead class="table table-success">
            <tr class="text-center">
                <th>ID</th>
                <th width="200px">Nama Pelanggan</th>
                <th>Handphone</th>
                <th width="300px">Alamat</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelanggan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="text-center">
                <td><?php echo e($pelanggan->id_pelanggan); ?></td>
                <td><?php echo e($pelanggan->nama_pelanggan); ?></td>
                <td><?php echo e($pelanggan->hp_pelanggan); ?></td>
                <td><?php echo e($pelanggan->alamat_pelanggan); ?></td>
                <td width="100px"><a href="<?php echo e(url('pelanggan/edit')); ?>/<?php echo e($pelanggan->id_pelanggan); ?>" class="btn btn-primary">Edit</a></td>
                <td width="100px"><a href="<?php echo e(url('pelanggan/destroy')); ?>/<?php echo e($pelanggan->id_pelanggan); ?>" class="btn btn-danger" onclick="return confirm('Ingin Menghapus pelanggan Ini ?');">Hapus</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_mei\resources\views/pelanggan/index.blade.php ENDPATH**/ ?>