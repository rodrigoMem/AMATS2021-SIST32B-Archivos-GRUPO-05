@extends('includes.base')
@section('content')
    <div class="col d-flex justify-content-center mt-5 ">

        <div class="card text-center shadow rounded" style="width: 70%;">
            <div class="card-header bg-primary">
                Featured
            </div>
            <div class="card-body ">
                <form method="post" action="create">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Nombre Completo</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Educación</label>
                            <input type="education" class="form-control" name="education">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Address">Dirección</label>
                        <input type="text" class="form-control" placeholder="Apartment, studio, or floor" name="address">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="specialist">Especialidad</label>
                            <input type="text" class="form-control" name="specilist">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Numero de Telefono</label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                    </div>
                    <select class="form-select" aria-label="Default select example" name="role_id">
                        <option value="">Open this select menu</option>
                       
                       
                        @foreach ($roles as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach

                    </select>
                    <div class="form-group">

                    </div>
                    <button type="submit" class="btn btn-primary border-bottom btn-grad">Crear</button>
                </form>
            </div>

        </div>
    </div>
   
@endsection
