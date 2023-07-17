

<?php $__env->startSection('konten'); ?>
<h3>Ubah Data Siswa RPL</h3>
  <?php $__currentLoopData = $tb_rpl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <form method="post" action="<?php echo e(route('updaterpl')); ?>">
      <?php echo csrf_field(); ?>
      <input type="hidden" name="id_siswa" value="<?php echo e($s->id_siswa); ?>">
      <div class="form-group">
        <label>Nama Siswa</label>
        <input type="text" name="Nama_Siswa" value="<?php echo e($s->Nama_Siswa); ?>" class="form-control" placeholder="Nama Siswa" required="">
      </div>
      <div class="form-group">
        <label>Kelas</label>
        <input type="varchar" name="Kelas" value="<?php echo e($s->Kelas); ?>" class="form-control" placeholder="Kelas" required="">
      </div>
      <div class="form-group">
        <label>Jenis Kelamin</label>
        <input type="text" name="Jenis_Kelamin" value="<?php echo e($s->Jenis_Kelamin); ?>" class="form-control" placeholder="Jenis Kelamin" required="">
      </div>
      <div class="form-group">
        <label>Umur</label>
        <input type="integer" name="Umur" value="<?php echo e($s->Umur); ?>" class="form-control" placeholder="Umur" required="">
      </div>
      <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update Data</button>
      </div>
    </form>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Katrina_RPL2\portal-berita\resources\views/ubahrpl.blade.php ENDPATH**/ ?>