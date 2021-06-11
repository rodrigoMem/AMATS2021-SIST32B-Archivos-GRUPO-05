<div >

<?php $__env->startSection('content'); ?>
    
   
    <h1>hola</h1>
 </body>
<?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p><?php echo e($item->name); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php 
 
 //var_dump($doctors);
 foreach ($doctors as $key => $value) {
     var_dump($value->name) ;
 }
 
 ?>
<?php $__env->stopSection(); ?>

</div> 


<?php echo $__env->make('includes.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\citasProject\App\Views/home/index.blade.php ENDPATH**/ ?>