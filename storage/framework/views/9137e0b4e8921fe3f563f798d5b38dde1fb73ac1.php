

<?php $__env->startSection('gambar1'); ?>
<img src="<?php echo e(asset('img/WhatsApp Image 2023-07-08 at 12.33.34 AM.jpeg')); ?>" alt="gambar">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('gambar2'); ?>
<img src="<?php echo e(asset('img/WhatsApp Image 2023-07-08 at 12.33.37 AM.jpeg')); ?>" alt="gambar">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('gambar3'); ?>
<img src="<?php echo e(asset('img/WhatsApp Image 2023-07-08 at 12.33.35 AM.jpeg')); ?>" alt="gambar">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('gambar4'); ?>
<img src="<?php echo e(asset('img/WhatsApp Image 2023-07-08 at 12.33.37 AM (1).jpeg')); ?>" alt="gambar">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('gambar5'); ?>
<img src="<?php echo e(asset('img/WhatsApp Image 2023-07-08 at 12.33.35 AM (1).jpeg')); ?>" alt="gambar">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('gambar6'); ?>
<img src="<?php echo e(asset('img/WhatsApp Image 2023-07-08 at 12.33.36 AM.jpeg')); ?>" alt="gambar">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('gambar7'); ?>
<img src="<?php echo e(asset('img/WhatsApp Image 2023-07-08 at 12.33.38 AM.jpeg')); ?>" alt="gambar">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('konten'); ?>
<h3>Tampil Data RPL</h3>
<a class="btn btn-success" href="<?php echo e(route('tambahrpl')); ?>"><i class="fa fa-plus"></i> Tambah RPL</a>
<br><br>


<form action="<?php echo e(route('showrpl')); ?>" method="GET" class="form-inline">
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" name="keyword" class="form-control" placeholder="Cari data...">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Cari</button>
</form>
<br>

<table class="table table-bordered table-hover">
  <tr>
    <th>Id Siswa</th>
    <th>Nama Siswa</th>
    <th>Kelas</th>
    <th>Jenis Kelamin</th>
    <th>Umur</th>
    <th>Aksi</th>
  </tr>
  <?php $__currentLoopData = $tb_rpl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
  <tr>
    <td><?php echo e($s->id_siswa); ?></td>
    <td><?php echo e($s->Nama_Siswa); ?></td>
    <td><?php echo e($s->Kelas); ?></td>
    <td><?php echo e($s->Jenis_Kelamin); ?></td>
    <td><?php echo e($s->Umur); ?></td>
    <td>
      
      <a href="/tb_rpl/ubah/<?php echo e($s->id_siswa); ?>" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
      <a href="/tb_rpl/hapus/<?php echo e($s->id_siswa); ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
    </td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Katrina_RPL2\portal-berita\resources\views/tampilrpl.blade.php ENDPATH**/ ?>