@extends('home.layouts.base')
@section('content')
<div class="mt-5">
    <div class="row">
        <div class="col-md-3 ">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title text-center">Doctor Informacion</h5>
                    <img src="" alt="">imagen
                    <p class="card-text">Content</p>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <form action="/book-appointment"  method="post">
                <input type="hidden" name="doctor_id" value="{{$doctor_id}}">
                <input type="hidden" name="date" value="{{$date}}">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$date}}</h5>
                    <div class="row">
                        @foreach ($times as $item)
                            <div class="col-md-3">
                                <label class="btn btn-outline-primary" type="button">
                                    <input  type="radio" name="time" value="{{$item->time}}">
                                    <span>{{$item->time}}</span>
                                </label>
                            </div>
                    <input type="hidden" name="appointment_id" value="{{$item->appointment_id}}">

                            <span>{{$item->time}}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            
                    <button type="submit" name="" id="" class="btn btn-success btn-lg btn-block mt-1">Agendar Cita</button>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection

{{-- MOVER ESTO A PUBLIC --}}
<style>
    label.btn {
        padding:0;
    }
    label.btn input {
        opacity: 0;
        position: absolute;
    }
    label.btn span {
        text-align: center;
        padding:6px 12px;
        display: block;
        min-width: 80px;
    }

    label.btn input:checked+span {
        background-color:rgb(80, 110, 228);
        color:white;
    }
</style>
