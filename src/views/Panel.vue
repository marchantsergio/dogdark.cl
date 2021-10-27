<template>
    <Menu/>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12"><h2 class="text-uppercase"><strong>PANEL DE {{ usuario }} </strong></h2></div>
            <div class="col-12 col-md-9">contenido</div>
            <div class="col-12 col-md-3">
                <Mpanel/>
            </div>
        </div>
    </div>
</template>
<script>
import Menu from '../components/Menu.vue'
import Mpanel from '../components/Mpanel.vue'

export default {
    name:'Panel',
    data(){
        return{
            usuario:'',
            rol:''
        }
    },
    components:{
        Menu,
        Mpanel
    },
    mounted(){
        this.usuario = ''
        this.rol = ''
        if(!localStorage.getItem('user'))
        {
            this.$router.push('/login')
        }else{
            this.usuario = localStorage.getItem('user')
            this.rol = localStorage.getItem('rol')
        }
    }
}
</script>