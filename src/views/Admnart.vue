<template>
    <Menuadm/>
    <form v-on:submit.prevent="ingreso()">
    <div class="container">
        <div class="row">
           <div class="col-12"><h2>NUEVO ARTICULO</h2></div> 
           <div class="col-12 col-md-8">
               <div class="mb-4">
                    <input 
                        type="text"
                        placeholder="Título"
                        class="form-control"
                        v-model="titulo"
                   />
               </div>
               <div>
                    <editor
                        api-key="nftneibcgkgxik91ybc1kpaau1jmp6ljbpifsv1cnssjgq9h"
                        :init="{
                        menubar: true,
                        plugins: 'lists link image emoticons media code fullscreen hr insertdatetime pagebreak preview table codesample',
                        toolbar1: 'styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | table hr insertdatetime blockquote backcolor forecolor',
                        toolbar2: 'image | media emoticons | link openlink unlink pagebreak preview | code codesample fullscreen',
                        language: 'es',
                        height:400,
                        }"
                        v-model="contenido"
                    />
               </div>
           </div>
           <div class="col-12 col-md-4">
                <div class="mb-4">
                    <input 
                        type="submit"
                        value="GRABAR"
                        class="btn btn-success"
                    />
                </div>
                <select class="form-select" v-model="estado">
                    <option v-bind:value="1">PUBLICAR</option>
                    <option v-bind:value="0">GUARDAR</option>
                </select>
           </div>
        </div>
    </div>
    </form>
</template>
<script>
import Menuadm from '../components/Menuadm.vue'
import Editor from '@tinymce/tinymce-vue'

export default {
    name:'Admnart',
    data(){
        return{
            titulo:'',
            contenido:'',
            estado:''
        }
    },
    components:{
        Menuadm,
        'editor': Editor
    },
    methods:{
        ingreso()
        {
            console.log(this.titulo)
            console.log(this.contenido)
            console.log(this.estado)
        }
    },
    mounted(){
        if(localStorage.getItem('rol')!=="administrador")
        {
            this.$router.push('/login')
        }
    }
}
</script>