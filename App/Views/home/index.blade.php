<div >
@extends('includes.base')
@section('content')
    
   
    <h1>hola</h1>
 </body>
@foreach ($doctors as $item)
    <p>{{$item->name}}</p>
@endforeach
 <?php 
 
 //var_dump($doctors);
 foreach ($doctors as $key => $value) {
     var_dump($value->name) ;
 }
 
 ?>
@endsection

</div> 

