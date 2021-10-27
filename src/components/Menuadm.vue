<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <router-link to="/" class="navbar-brand">DOGDARK</router-link>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Sistema
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <router-link to="/adm/admin" class="dropdown-item">Administración</router-link>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </li>
            
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Edición
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                    <router-link to="/adm/admart" class="dropdown-item">Artículos</router-link>
                </li>
                <li>
                    <router-link to="/adm/admnart" class="dropdown-item">Nuevo artículo</router-link>
                </li>
                <li>
                    <router-link to="/" class="dropdown-item">Categorías</router-link>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <router-link to="/" class="dropdown-item">Multimedia</router-link>
                </li>
            </ul>
            </li>


        </ul>
        <div class="d-flex">
            hola
        </div>
        </div>
    </div>
    </nav>
</template>
<script>
export default {
    name:'Menuadm'
}
</script>