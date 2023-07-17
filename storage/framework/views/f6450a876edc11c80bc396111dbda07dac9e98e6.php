
  
<?php $__env->startSection('content'); ?>

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail User
            </div>
            <div class="card-body">
                <?php $__currentLoopData = $tb_rpl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>ID Siswa: </b><?php echo e($s->id_siswa); ?></li>
                    <li class="list-group-item"><b>Nama Siswa: </b><?php echo e($s->Nama_Siswa); ?></li>
                    <li class="list-group-item"><b>Kelas: </b><?php echo e($s->Kelas); ?></li>
                    <li class="list-group-item"><b>Jenis Kelamin: </b><?php echo e($s->Jenis_Kelamin); ?></li>
                    <li class="list-group-item"><b>Umur: </b><?php echo e($s->Umur); ?></li>
                </ul>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <a class="btn btn-success mt-3" href="<?php echo e(route('tampilrpl')); ?>">Kembali</a>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Katrina_RPL2\portal-berita\resources\views/showrpl.blade.php ENDPATH**/ ?>