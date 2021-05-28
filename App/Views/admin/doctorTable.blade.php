@extends('includes.base')
@section('content')

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

<div class="row">

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
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    @if (@count($doctors))
                        @foreach ($doctors as $item)
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <a href="#" class="avatar rounded-circle mr-3">
                                            {{-- <img alt="Image placeholder"
src="https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/img/theme/bootstrap.jpg"> --}}
                                        </a>
                                    </div>
                                </td>
                                <td>{{ $item->name }}</td>
                                <td> {{ $item->email }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->phone_number }}</td>
                                <td>
                                    <a href=""> <i class="fa fa-times" aria-hidden="true"></i></a>
                                    <a href=""> <i class="fa fa-edit" aria-hidden="true"></i></a>

                                </td>
                            </tr>

                        @endforeach
                    @else
                        <h2 class=" d-flex justify-content-center mb-5">No existen doctores por el momento.</h2>
                    @endif


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



@endsection
