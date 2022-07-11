

<?php $__env->startSection('content'); ?>
<div class="container w-50">
    <div class="card p-5" style="background-color: #9966ff;">
        <h3 class="mb-4">Edit Data Transaksi</h3>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaksi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <form method="post" action="<?php echo e(url('transaksi/update')); ?>/<?php echo e($transaksi->id_transaksi); ?>">
            <?php echo csrf_field(); ?>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Pelanggan</label>
                <div class="col-sm-8">
                    <select class="form-select" name="pelanggan_transaksi">
                        <option value="<?php echo e($transaksi->pelanggan_transaksi); ?>"><?php echo e($transaksi->nama_pelanggan); ?></option>
                        <?php $__currentLoopData = $pelanggans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelanggan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($pelanggan->id_pelanggan); ?>"><?php echo e($pelanggan->nama_pelanggan); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Jenis Pakaian</label>
                <div class="col-sm-8">
                    <select class="form-select" name="pakaian_transaksi">
                        <option value="<?php echo e($transaksi->pakaian_transaksi); ?>"><?php echo e($transaksi->jenis_pakaian); ?></option>
                        <?php $__currentLoopData = $pakaians; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pakaian): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($pakaian->id_pakaian); ?>"><?php echo e($pakaian->jenis_pakaian); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Berat (Kg)</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Berat (Kg)" name="berat_transaksi" value="<?php echo e($transaksi->berat_transaksi); ?>" required>
                </div>
            </div>
            <button type="submit" class="btn btn-light">Simpan</button>
        </form>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_mei\resources\views/transaksi/edit.blade.php ENDPATH**/ ?>