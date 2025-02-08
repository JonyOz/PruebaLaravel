@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="container text-center">
    <!-- Sección "Conoce y Descubre" -->
    <div class="hero-section py-5">
        <h1 class="mb-4">Conoce y Descubre</h1>
        <p class="lead">Descubre nuestros emocionantes proyectos</p>
        <div class="d-flex justify-content-center gap-3">
            <button class="btn btn-warning">Empecemos</button>
            <button class="btn btn-outline-warning">Aprender Más</button>
        </div>
    </div>

    <!-- Sección de Capacidades -->
    <div class="laparte2 py-5">
    <div class="row mt-5">
        <div class="col-md-6">
            <h2>Capacidades</h2>
            <ul class="list-unstyled">
                <li><strong>Capacidad:</strong> 1</li>
                <li><strong>Nombre:</strong> 11</li>
                <li><strong>Copia de conocimiento:</strong> 3.0 m</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h2>Además de la respuesta</h2>
            <ul class="list-unstyled">
                <li><strong>Diseño:</strong> 20</li>
                <li><strong>Recursos:</strong> 30</li>
                <li><strong>Además de la respuesta:</strong> 10</li>
                <li><strong>Copro:</strong> 1</li>
                <li><strong>Diseño:</strong> 5</li>
                <li><strong>Diseñadores:</strong> 2</li>
                <li><strong>Puntivo-código obras:</strong> 4</li>
                <li><strong>Lapa:</strong> 8</li>
                <li><strong>Trabajadores:</strong> 7</li>
                <li><strong>Edipo documentos electrónico:</strong> 6</li>
                <li><strong>Inicio:</strong> 9</li>
                <li><strong>Recursos:</strong> 32</li>
            </ul>
        </div>
    </div>
    </div>

    <div class="laparte3 py-5">
    <!-- Sección de Video y Descripción -->
    <div class="row mt-5 align-items-center">
        <div class="col-md-6">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-6">
            <h2>Edumocs</h2>
            <p>Conéctate y pre-inscríbete a todos los cursos que necesites y expande tus conocimientos. Reserva y obtén acceso al curso de tu interés.</p>
        </div>
    </div>

    <!-- Sección de Conócenos -->
    <div class="row mt-5">
        <div class="col-md-6">
            <img src="/images/inicio1.jpg" class="img-fluid rounded" alt="Imagen 1">
        </div>
        <div class="col-md-6">
            <h3>Conócenos</h3>
            <p>Naranti</p>
            <button class="btn btn-warning">Ver Más</button>
        </div>
    </div>
</div>
</div>
@endsection