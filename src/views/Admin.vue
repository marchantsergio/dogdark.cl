<template>
    <Menuadm/>
    <div class="container">
        <div class="row">
            <div class="col-12"><h2>ADMINISTRACION</h2></div>
            <div class="col-12">
                <div class="row row-cols-1 row-cols-md-6 g-4">

                    <div class="col">
                        <div class="card h-100 text-center bg-primary text-white">
                            <div class="card-header">
                                <i class="bi bi-journal-text fs-1"></i>
                            </div>
                            <div class="card-footer">
                                <router-link to="/adm/admart" class="text-light">Artículos</router-link>
                            </div>
                        </div>
                    </div>
                    <!--
                    <div class="col">
                        <div class="card h-100 text-center bg-success text-white">
                            <div class="card-header">
                                <i class="bi bi-book fs-1"></i>
                            </div>
                            <div class="card-footer">
                                <router-link to="/adm/admnart" class="text-light">Nuevo artículo</router-link>
                            </div>
                        </div>
                    </div>
                    -->
                </div>    
            </div>
        </div>
    </div>
</template>
<script>
import Menuadm from '../components/Menuadm.vue'

export default {
    name:'Admin',
    components:{
        Menuadm
    },
    mounted(){
        if(localStorage.getItem('rol')!=="administrador")
        {
            this.$router.push('/login')
        }
    }
}
</script>