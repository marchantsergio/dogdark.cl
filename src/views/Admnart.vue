<template>
    <Menuadm/>
    <form v-on:submit.prevent="ingreso()">
    <div class="container">
        <div class="row">
           <div class="col-12"><h2>NUEVO ARTICULO</h2></div> 
           <div class="col-12 col-md-8">
               <div class="mb-4">
                    <div class="alert alert-danger mb-2" v-if="merror && merror!=''">{{merror}}</div>
                    <div v-if="v$.titulo.$error" class="alert alert-danger text-center mb-2">{{ v$.titulo.$errors[0].$message }}</div>
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
                        external_filemanager_path:'/filemanager/',
                        filemanager_title:'Dogdark Filemanager',
                        external_plugins: { 'filemanager' : '/filemanager/plugin.min.js'}
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
                <div class="card p-2">
                    <p><strong>PUBLICAR</strong></p>
                    <select class="form-select" v-model="estado">
                        <option disabled value="">Opción</option>
                        <option>PUBLICAR</option>
                        <option>GUARDAR</option>
                    </select>
                </div>
                <div class="mt-2 card p-2">
                    <p><strong>CATEGORIA</strong></p>
                    <select class="form-select" v-model="categoria">
                        <option disabled value="">Elija una categoria</option>
                        <option>general</option>
                        <option>tutorial</option>
                        <option>games</option>
                    </select>
                </div>
                <div class="mt-2 card p-2">
                    <p><strong>SEO</strong></p>
                    <select class="form-select" v-model="seo">
                        <option disabled value="">Elija una opción</option>
                        <option>index-follow</option>
                        <option>index-nofollow</option>
                        <option>noindex-follow</option>
                        <option>noindex-nofollow</option>
                    </select>
                </div>
           </div>
        </div>
    </div>
    </form>
</template>
<script>
import Menuadm from '../components/Menuadm.vue'
import Editor from '@tinymce/tinymce-vue'
import axios from 'axios'
import { Global } from '../Global'
import useValidate from '@vuelidate/core'
import { required, minLength } from '@vuelidate/validators'

export default {
    name:'Admnart',
    data(){
        return{
            v$: useValidate(),
            titulo:'',
            contenido:'',
            estado:'',
            categoria:'',
            seo:'',
            autor: '',
            merror:'',
            retorno:[]
        }
    },
    components:{
        Menuadm,
        'editor': Editor
    },
    validations()
    {
        return{
            titulo:{
                required,
                minLength: minLength(10)
            }
        }
    },
    methods:{
        ingreso()
        {
            this.merror = ''
            this.v$.$validate()
            if(!this.v$.$error)
            {
                if(this.estado==""){
                    this.merror = "Publicar sin opción"
                }else if(this.categoria==""){
                    this.merror = "Categoría sin opción"
                }else if(this.seo==""){
                    this.merror = "Seo sin opción"
                }else{
                    axios
                    .post(
                        Global.urirl + 'insertar/',
                        {
                            opcion:1,
                            titulo: this.titulo,
                            contenido : this.contenido,
                            estado: this.estado,
                            categoria: this.categoria,
                            seo: this.seo,
                            autor: this.autor
                        }
                    )
                    .then(
                        res=>{
                            if(res.status==200)
                            {
                                this.$router.push('/adm/admeart/' + res.data)
                            }else{
                                this.merror = "Error de Data"
                            }
                        }
                    )
                }
            }
        }
    },
    mounted(){
        this.autor = ''
        if(localStorage.getItem('rol')!=="administrador")
        {
            this.$router.push('/login')
        }else{
            this.autor = localStorage.getItem('user')
        }
    }
}
</script>