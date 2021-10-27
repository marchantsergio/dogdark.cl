<template>
    <Menu/>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 mb-4 mt-4" data-aos="zoom-in">
                <h2 class="text-center"><strong>BLOG</strong></h2>
                <hr/>
            </div>
            <div class="col-12 col-md-9">
                <div v-if='merror==""'>
                    <h2>titulo</h2>
                    <p>texto corto</p>
                    <p>fecha</p>
                    <p><router-link to="/" class="btn btn-success">Leer más...</router-link></p>
                    <hr/>
                </div>
                <div v-else>
                    <h3 class="text-center">{{ merror }}</h3>
                </div>  
            </div>


            <div class="col-12 col-md-3">
                <div class="card mb-4" style="width: 18rem;">
                    <div class="card-header bg-primary text-light">
                        Categorías
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                </div>

                <div class="card mb-4" style="width: 18rem;">
                    <div class="card-header bg-primary text-light">
                        Ultimos artículos
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</template>
<script>
import Menu from '../components/Menu.vue'
import axios from 'axios'
import { Global } from '../Global'


export default {
    name:'Blog',
  components:{
    Menu
  },
  data(){
      return{
          retorno:[],
          merror:''
      }
  },
  mounted(){
      axios
      .post(
          Global.urirl + 'consulta/',{
              opcion:2
          }
      )
      .then(
          res=>{
                this.merror = ''
                if(res.status==200)
                {
                    //console.log('hay coneccion')
                    this.retorno = res.data
                    if(this.retorno.length==0)
                    {
                        this.merror = 'Aún no hay registros'
                    }else{
                        console.log('si vienen datos')
                    }
                }else{
                    this.merror = 'Error de conexión'
                }
          }
      )
      .catch(error=>{
        this.merror = "" + error
        })
  }
}
</script>