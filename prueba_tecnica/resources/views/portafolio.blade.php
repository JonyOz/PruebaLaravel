<!-- resources/views/portafolio.blade.php -->
@extends('layouts.app')
@section('title','Portafolio')
@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Nuestro Portafolio</h2>

    <div class="row">
        <!-- Proyecto 1 -->
        <div class="col-md-4">
            <div class="card shadow">
                <img src="img/p1.png" class="card-img-top" alt="Proyecto 1">
                <div class="card-body">
                    <h5 class="card-title">Edumoocs</h5>
                    <p class="card-text">Edumoocs fue un proyecto que se desarrollo para una plataforma de cursos en django usando python y nuestra primer experiencia colaborativa</p>
                    <a href="https://github.com/Akiko1708/repositorio_EduMoocs" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>

        <!-- Proyecto 2 -->
        <div class="col-md-4">
            <div class="card shadow">
                <img src="img/p2.png" class="card-img-top" alt="Proyecto 2">
                <div class="card-body">
                    <h5 class="card-title">Cursos-Django</h5>
                    <p class="card-text">Cursos-Django fue un proyecto base que se tomó en la escuela por el cual empezamos nuestra curva de aprendizaje con el framework</p>
                    <a href="https://github.com/JonyOz/curso-django" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>

        <!-- Proyecto 3 -->
        <div class="col-md-4">
            <div class="card shadow">
                <img src="img/p3.png" class="card-img-top" alt="Proyecto 3">
                <div class="card-body">
                    <h5 class="card-title">PWA Ejemplo</h5>
                    <p class="card-text">Fue un proyecto en el cual aprendimos sobre el desarrollo de aplicaciones web progresivas, lo que posteriormente se transformó en Yoli una web desarrollada para un proyecto final como una pequeña startup</p>
                    <a href="https://github.com/JonyOz/PWA" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sección de contacto -->
<div class="container mt-5 text-center">
    <h3>¿Interesado en trabajar con nosotros?</h3>
    <p>Contáctanos para más información sobre nuestros servicios.</p>
    <a href="/formulario" class="btn btn-success">Contáctanos</a>
</div>
@endsection
