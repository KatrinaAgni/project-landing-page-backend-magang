

<?php $__env->startSection('konten'); ?>
<h3>Form Input Santri</h3>
<form method="post" action="<?php echo e(route('simpanrpl')); ?>">
  <?php echo csrf_field(); ?>
  <div class="form-group">
    <label>Nama Siswa</label>
    <input type="text" name="Nama_Siswa" class="form-control" placeholder="Nama Siswa" required="">
  </div>
  <div class="form-group">
    <label>Kelas</label>
    <input type="varchar" name="Kelas" class="form-control" placeholder="Kelas" required="">
  </div>
  <div class="form-group">
    <label>Jenis Kelamin</label>
    <input type="varchar" name="Jenis_Kelamin" class="form-control" placeholder="Jenis Kelamin" required="">
  </div>
  <div class="form-group">
    <label>Umur</label>
    <input type="integer" name="Umur" class="form-control" placeholder="Umur" required="">
  </div>
  <div class="form-group text-right">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
  </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Katrina_RPL2\portal-berita\resources\views/tambahrpl.blade.php ENDPATH**/ ?>