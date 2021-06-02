<?php $__env->startSection('content'); ?>

    <h2 class="mb-5 p-5 mr-5">Horarios<i class="fas fa-user-clock  p-2 "></i></h2>
    <div class=" container-fluid">
<form method="post" action="create">
    
    <input type="hidden" name="appointment_id" >
        <div class="card mb-5">
            <div class="card-body">
                <h5 class="card-title">Seleccionar fecha</h5>
                <input class="form-control" type="date" name="date">
            </div>
        </div>

        
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" 
        id="Check-all" 
        onclick="
        for( item in document.getElementsByName('time[]')) 
        document.getElementsByName('time[]').item(item).checked =this.checked" >

    <label class="custom-control-label" for="Check-all">Marcar todo</label>
</div>

        <div class="row">

            
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Elegir horario AM</h3>
                    </div>

                    <div class="table-responsive">

                        <table class="table align-items-center table-flush">

                            <tbody>


                                <tr>

                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="6am"
                                                id="Check-item1">
                                            <label class="custom-control-label" for="Check-item1">6am</label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="6:20am"
                                                id="Check-item2">
                                            <label class="custom-control-label" for="Check-item2">6:20am</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="6:40am"
                                                id="Check-item3">
                                            <label class="custom-control-label" for="Check-item3">6:40am</label>
                                        </div>
                                    </td>
                                </tr>


                                <tr>

                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="7am"
                                                id="Check-item4">
                                            <label class="custom-control-label" for="Check-item4">7am</label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="7:20am"
                                                id="Check-item5">
                                            <label class="custom-control-label" for="Check-item5">7:20am</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="7:40am"
                                                id="Check-item6">
                                            <label class="custom-control-label" for="Check-item6">7:40am</label>
                                        </div>
                                    </td>
                                </tr>



                                <tr>

                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="8am"
                                                id="Check-item7">
                                            <label class="custom-control-label" for="Check-item7">8am</label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="8:20am"
                                                id="Check-item8">
                                            <label class="custom-control-label" for="Check-item8">8:20am</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="8:40am"
                                                id="Check-item9">
                                            <label class="custom-control-label" for="Check-item9">8:40am</label>
                                        </div>
                                    </td>
                                </tr>



                                <tr>

                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="9am"
                                                id="Check-item10">
                                            <label class="custom-control-label" for="Check-item10">9am</label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="9:20am"
                                                id="Check-item11">
                                            <label class="custom-control-label" for="Check-item11">9:20am</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="9:40am"
                                                id="Check-item12">
                                            <label class="custom-control-label" for="Check-item12">9:40am</label>
                                        </div>
                                    </td>
                                </tr>

                                <tr>

                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="10am"
                                                id="Check-item13">
                                            <label class="custom-control-label" for="Check-item13">10am</label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="10:20am"
                                                id="Check-item14">
                                            <label class="custom-control-label" for="Check-item14">10:20am</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="10:40am"
                                                id="Check-item15">
                                            <label class="custom-control-label" for="Check-item15">10:40am</label>
                                        </div>
                                    </td>
                                </tr>


                                <tr>

                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="11am"
                                                id="Check-item16">
                                            <label class="custom-control-label" for="Check-item16">11am</label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="11:20am"
                                                id="Check-item17">
                                            <label class="custom-control-label" for="Check-item17">11:20am</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="11:40am"
                                                id="Check-item18">
                                            <label class="custom-control-label" for="Check-item18">11:40am</label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">

                    </div>
                </div>
            </div>

            
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Elegir horario PM</h3>
                    </div>

                    <div class="table-responsive">

                        <table class="table align-items-center table-flush">

                            <tbody>


                                <tr>

                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="12pm"
                                                id="Check-item01">
                                            <label class="custom-control-label" for="Check-item01">12pm</label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="12:20pm"
                                                id="Check-item02">
                                            <label class="custom-control-label" for="Check-item02">12:20pm</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="12:40pm"
                                                id="Check-item30">
                                            <label class="custom-control-label" for="Check-item03">12:40pm</label>
                                        </div>
                                    </td>
                                </tr>


                                <tr>

                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="1pm"
                                                id="Check-item04">
                                            <label class="custom-control-label" for="Check-item04">1pm</label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="1:20pm"
                                                id="Check-item05">
                                            <label class="custom-control-label" for="Check-item05">1:20pm</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="1:40pm"
                                                id="Check-item06">
                                            <label class="custom-control-label" for="Check-item06">1:40pm</label>
                                        </div>
                                    </td>
                                </tr>



                                <tr>

                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="2pm"
                                                id="Check-item07">
                                            <label class="custom-control-label" for="Check-item07">2pm</label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="2:20pm"
                                                id="Check-item08">
                                            <label class="custom-control-label" for="Check-item08">2:20pm</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="2:40pm"
                                                id="Check-item09">
                                            <label class="custom-control-label" for="Check-item09">2:40pm</label>
                                        </div>
                                    </td>
                                </tr>



                                <tr>

                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="3pm"
                                                id="Check-item010">
                                            <label class="custom-control-label" for="Check-item010">3pm</label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="3:20pm"
                                                id="Check-item011">
                                            <label class="custom-control-label" for="Check-item011">3:20pm</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="3:40pm"
                                                id="Check-item012">
                                            <label class="custom-control-label" for="Check-item012">3:40pm</label>
                                        </div>
                                    </td>
                                </tr>

                                <tr>

                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="4pm"
                                                id="Check-item013">
                                            <label class="custom-control-label" for="Check-item013">4pm</label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="4:20pm"
                                                id="Check-item014">
                                            <label class="custom-control-label" for="Check-item014">4:20pm</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="4:40pm"
                                                id="Check-item015">
                                            <label class="custom-control-label" for="Check-item015">4:40pm</label>
                                        </div>
                                    </td>
                                </tr>


                                <tr>

                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="5pm"
                                                id="Check-item016">
                                            <label class="custom-control-label" for="Check-item016">5pm</label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="5:20pm"
                                                id="Check-item017">
                                            <label class="custom-control-label" for="Check-item017">5:20pm</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="time[]" value="5:40pm"
                                                id="Check-item018">
                                            <label class="custom-control-label" for="Check-item018">5:40pm</label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">

                    </div>
                </div>
            </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary border-bottom btn-grad">Crear</button>

</form>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('doctor.layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\citasProject\App\Views/doctor/appoinmentsTable.blade.php ENDPATH**/ ?>