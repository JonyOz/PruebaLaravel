@extends('layouts.app')

@section('title', 'Acerca de Nosotros')

@section('content')
<div class="container">
    <!-- Sección de Título -->
    <div class="text-center my-5 acerca-section">
        <h1>Acerca de la Empresa</h1>
        <p class="lead">Conoce más sobre nosotros y nuestros valores.</p>
    </div>

    <!-- Sección de Información -->
    <div class="row">
        <div class="col-md-6">
            <h2>Conócenos</h2>
            <p>
                Somos una empresa comprometida con la innovación y la excelencia. Nuestros valores nos guían en cada paso:
            </p>
            <ul>
                <li><strong>Valor 1:</strong> Innovación constante.</li>
                <li><strong>Valor 2:</strong> Compromiso con la calidad.</li>
                <li><strong>Valor 3:</strong> Enfoque en el cliente.</li>
            </ul>
        </div>
        <div class="col-md-6">
            <img src="/images/acerca.jpg" class="img-fluid rounded" alt="Imagen Acerca de Nosotros">
        </div>
    </div>

    <!-- Sección de Números (Estadísticas) -->
    <div class="row mt-5 stats-section">
        <div class="col-md-12">
            <h2 class="text-center">Nuestros Números</h2>
            <div class="d-flex justify-content-around flex-wrap">
                <div class="text-center">
                    <h3>200+</h3>
                    <p>Proyectos Completados</p>
                </div>
                <div class="text-center">
                    <h3>50+</h3>
                    <p>Clientes Satisfechos</p>
                </div>
                <div class="text-center">
                    <h3>10+</h3>
                    <p class="stats-section p">Años de Experiencia</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de Equipo -->
    <div class="row mt-5 team-section">
        <div class="col-md-12">
            <h2 class="text-center">Nuestro Equipo</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="/images/team1.jpg" class="img-fluid rounded-circle team-section img" alt="Miembro del Equipo 1">
                    <h4 class="team-section h4">Juan Pérez</h4>
                    <p class="team-section p">CEO</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="/images/team2.jpg" class="img-fluid rounded-circle" alt="Miembro del Equipo 2">
                    <h4 class="team-section h4">María Gómez</h4>
                    <p class="team-section p">Directora de Marketing</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="/images/team3.jpg" class="img-fluid rounded-circle team-section img" alt="Miembro del Equipo 3">
                    <h4 class="team-section h4">Carlos López</h4>
                    <p class="team-section p">Desarrollador Senior</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection