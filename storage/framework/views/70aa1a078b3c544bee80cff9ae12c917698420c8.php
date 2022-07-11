

<?php $__env->startSection('content'); ?>
<div class="container w-50">
    <div class="card p-5" style="background-color: #9966ff;">
        <h3 class="mb-4">Edit Data Pelanggan</h3>
        <form method="post" action="<?php echo e(url('pelanggan/update')); ?>/<?php echo e($data->id_pelanggan); ?>">
            <?php echo csrf_field(); ?>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nama Pelanggan</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Nama Pelanggan" name="nama_pelanggan" value="<?php echo e($data->nama_pelanggan); ?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Handphone</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Handphone" name="hp_pelanggan" value="<?php echo e($data->hp_pelanggan); ?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Alamat" name="alamat_pelanggan" value="<?php echo e($data->alamat_pelanggan); ?>" required>
                </div>
            </div>
            <button type="submit" class="btn btn-light">Simpan</button>
        </form>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_mei\resources\views/pelanggan/edit.blade.php ENDPATH**/ ?>