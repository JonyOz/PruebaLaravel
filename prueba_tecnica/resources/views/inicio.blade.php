@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="container text-center">
    <!-- Sección "Conoce y Descubre" -->
    <div class="hero-section py-5">
        <h1 class="mb-4">Conoce y Descubre</h1>
        <p class="lead">Descubre nuestros emocionantes proyectos</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="/formulario"><button class="btn btn-warning">Empecemos</button></a>
            <a href="/acerca"><button class="btn btn-outline-warning">Aprender Más</button></a>
        </div>
    </div>

    <!-- Sección de Capacidades -->
    <div class="laparte2 py-5">
    <div class="row mt-5">
        <div class="col-md-6">
            <h2>Capacidades</h2>
            <ul class="list-unstyled">
                <li><strong>DJango:</strong> 10</li>
                <li><strong>PHP:</strong> 8</li>
                <li><strong>Ciberseguridad:</strong> 10</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h2>Otras habilidades</h2>
            <ul class="list-unstyled">
                <li><strong>Diseño:</strong> 8</li>
                <li><strong>Scrum:</strong> 10</li>
                <li><strong>JavaScript:</strong> 10</li>
                <li><strong>CSS:</strong> 8</li>
                <li><strong>HTML:</strong> 8</li>
                <li><strong>UX:</strong> 9</li>
                <li><strong>Python:</strong> 10</li>
                <li><strong>XP:</strong> 8</li>
                <li><strong>Java:</strong> 10</li>
                <li><strong>C++:</strong> 6</li>
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
            <h2>Prueba Tecnica</h2>
            <p>Prueba tecnica para la empresa naranti diseñada y postulada para demostrar conocimientos básicos en el framework</p>
        </div>
    </div>

    <!-- Sección de Conócenos -->
    <div class="row mt-5">
        <div class="col-md-6">
            <img src="/img/logo.jpeg" class="img-fluid rounded" alt="Imagen 1">
        </div>
        <div class="col-md-6">
            <h3>Conócenos</h3>
            <p>Naranti</p>
            <a href="/acerca"><button class="btn btn-warning">Ver Más</button></a>
        </div>
    </div>
</div>
</div>
@endsection