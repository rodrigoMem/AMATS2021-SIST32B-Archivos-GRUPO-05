<div >
    @extends('includes.base')
    @section('content')
        
       
        <h1>hola</h1>
     </body>
    @foreach ($doctors as $item)
        <p>{{$item->name}}</p>
    @endforeach
     
    @endsection
    
    </div> 
    