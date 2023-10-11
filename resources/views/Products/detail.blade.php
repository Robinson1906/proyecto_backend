@extends('layout.main')
@section('content')

    <h1 class="text-center m-5"> Detalle del producto </h1>

    <div class="container ">
        <div class="row">
            <div class="col-md-8">
                <img src="../img/producto1.png" class="img-fluid" alt="...">
            </div>
            <div class="col-md-4">
                <h1>Nombre del producto</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis, hic exercitationem! Perspiciatis expedita veniam beatae labore. Ullam veniam necessitatibus consequuntur! Illo vitae asperiores rerum ex? Alias odit nobis recusandae sequi.</p>
               
                <h3>Precio: 10.000.000</h3>
                
                <button type="button" class="btn btn-primary my-background">Añadir carrito</button>
            </div>
        </div>
    </div>

@endsection