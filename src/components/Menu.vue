<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <router-link to="/" class="navbar-brand">DOGDARK</router-link>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto mb-2 mb-lg-0">

            <li class="nav-item">
                <router-link to="/" class="nav-link active">Home</router-link>
            </li>

            <li class="nav-item">
                <router-link to="/blog" class="nav-link active">Blog</router-link>
            </li>

            <li class="nav-item">
                <router-link to="/archivos" class="nav-link active">Archivos</router-link>
            </li>

        </ul>
        <!--
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        -->
        <div class="d-flex">
            <div v-if='usuario==""'>
                <router-link to="/login" class="text-light">Login</router-link>
            </div>
            <div v-else>
                <router-link to="/panel" class="text-light">Panel</router-link>
            </div>
        </div>
        </div>
    </div>
    </nav>
</template>
<script>
export default {
    name:'Menu',
    data(){
        return{
            usuario:'',
            rol:''
        }
    },
    mounted(){
        if(localStorage.getItem('user'))
        {
            this.usuario = localStorage.getItem('user')
            this.rol = localStorage.getItem('rol')
        }
    }
}
</script>