<template>
    <Menuadm/>
    <div class="container">
        desde articulos
    </div>
</template>
<script>
import Menuadm from '../components/Menuadm.vue'

export default {
    name:'Admart',
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