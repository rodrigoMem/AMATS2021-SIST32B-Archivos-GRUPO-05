<?php $__env->startSection('content'); ?>

    <style>
        .card-header {
            background-color: #C5B7F6;
        }

        .card-footer {
            background-color: white;
        }

    </style>
    <h2 class="mb-5">Lista de Doctores</h2>
    <div class=" container-fluid">

        <div class="row" id="loaded">

            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Doctores</h3>
                    </div>

                    <div class="table-responsive">

                        <table class="table align-items-center table-flush">
                            <thead class="">
                                <tr>
                                    <th scope="col">Imagen</th>
                                    <th scope="col">Paciente</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Hora</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">doctor</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php if(@count($patients)): ?>
                                    <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td></td>

                                            <td><?php echo e($patient->id_user); ?></td>
                                            <td></td>

                                            <td> <?php echo e($patient->time); ?></td>
                                            <td><?php echo e($patient->date); ?></td>
                                            <td><?php echo e($patient->id_doctor); ?></td>
                                            <?php if($patient->status == 0): ?>
                                            <td> <a href="status/update/<?php echo e($booking->id); ?>"> <button type="button" class="btn btn-primary">No visitado</button></a></td>
               
                                        <?php else: ?>
                                        <td> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#item-<?php echo e($patient->id); ?>">show</button></td>
                                        
                                             <!-- Modal -->
                                    <div class="modal fade" id="item-<?php echo e($patient->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog  modal-lg shadow" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle"><?php echo e($patient->id_doctor); ?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" name="user_id" value="<?php echo e($patient->id_user); ?>">
                                                <input type="hidden" name="doctor_id" value="<?php echo e($patient->id_doctor); ?>">
                                                <input type="hidden" name="date" value="<?php echo e($patient->date); ?>">
                                            <div class="form-group">
                                                <label >Enfermedad</label>
                                                <input  class="form-control" type="text" name="disease">
                                            </div>
                                            <div class="form-group">
                                                <label >Sintomas</label>
                                                <input  class="form-control" type="text" name="simptoms">
                                            </div>
                                            <div class="form-group">
                                                <label >Uso de medicación</label>
                                                <input  class="form-control" type="text" name="usage_medication">
                                            </div>
                                            <div class="form-group">
                                                <label >Feedback</label>
                                                <input  class="form-control" type="text" name="feedback">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label >Firma</label>
                                                <input  class="form-control" type="text" name="signature">
                                            </div>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                        <?php endif; ?>
                                        </tr>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <h2 class=" d-flex justify-content-center mb-5">No existen doctores por el momento.</h2>
                                <?php endif; ?>


                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav aria-label="...">
                            <ul class="pagination justify-content-end mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">
                                        <i class="fas fa-angle-left"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-angle-right"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('includes.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\citasProject\App\Views/doctor/patientTable.blade.php ENDPATH**/ ?>