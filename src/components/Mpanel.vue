<template>
    <div class="list-group" id="list-tab" role="tablist">
        <router-link to="/panel" class="list-group-item list-group-item-action active">Panel</router-link>
        <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Profile</a>
        <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Messages</a>
        <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a>
        <router-link to="/adm/admin" class="list-group-item list-group-item-action" v-if='rol=="administrador"'>Admin</router-link>
    </div>
</template>
<script>
export default {
    name:'Mpanel',
    data(){
        return{
            usuario:'',
            rol:''
        }
    },
    mounted(){
        this.usuario = ''
        this.rol = ''
        if(localStorage.getItem('rol')!=="administrador")
        {
            this.$router.push('/login')
        }else{
            this.usuario = localStorage.getItem('user')
            this.rol = localStorage.getItem('rol')
        }
    }
}
</script>