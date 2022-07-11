

<?php $__env->startSection('content'); ?>
<div class="container">
    <a href="<?php echo e(url('/transaksi/create')); ?>" class="btn btn-warning float-end mb-3">Tambah Data Transaksi</a>
    <table class="table">
        <thead class="table table-success">
            <tr class="text-center">
                <th>ID</th>
                <th width="200px">Nama Pelanggan</th>
                <th>Jenis Pakaian</th>
                <th>Berat (Kg)</th>
                <th>Total (Rp)</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaksi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="text-center">
                <td><?php echo e($transaksi->id_transaksi); ?></td>
                <td><?php echo e($transaksi->nama_pelanggan); ?></td>
                <td><?php echo e($transaksi->jenis_pakaian); ?></td>
                <td><?php echo e($transaksi->berat_transaksi); ?> Kg</td>
                <td>Rp. <?php echo e($transaksi->berat_transaksi * $transaksi->harga_perkilo); ?></td>
                <td width="100px"><a href="<?php echo e(url('transaksi/edit')); ?>/<?php echo e($transaksi->id_transaksi); ?>" class="btn btn-primary">Edit</a></td>
                <td width="100px"><a href="<?php echo e(url('transaksi/destroy')); ?>/<?php echo e($transaksi->id_transaksi); ?>" class="btn btn-danger" onclick="return confirm('Ingin Menghapus Transaksi Ini ?');">Hapus</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_mei\resources\views/transaksi/index.blade.php ENDPATH**/ ?>