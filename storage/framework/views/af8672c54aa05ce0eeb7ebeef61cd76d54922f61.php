

<?php $__env->startSection('content'); ?>
<div class="container w-50">
    <div class="card p-5" style="background-color: #9966ff;">
        <h3 class="mb-4">Tambah Data Pakaian</h3>
        <form method="post" action="<?php echo e(url('pakaian/store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Jenis Pakaian</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Jenis Pakaian" name="jenis_pakaian" value="<?php echo e(old('jenis_pakaian')); ?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Harga Perkilo</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Rp." name="harga_perkilo" value="<?php echo e(old('harga_perkilo')); ?>" required>
                </div>
            </div>
            <button type="submit" class="btn btn-light">Tambah</button>
        </form>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_mei\resources\views/pakaian/create.blade.php ENDPATH**/ ?>