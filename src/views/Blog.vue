<template>
    <Menu/>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 mb-4 mt-4" data-aos="zoom-in">
                <h2 class="text-center"><strong>BLOG</strong></h2>
                <hr/>
            </div>
            <div class="col-12 col-md-9">

                <div>
                    <h2>titulo</h2>
                    <p>texto corto</p>
                    <p>fecha</p>
                    <p><router-link to="/" class="btn btn-success">Leer más...</router-link></p>
                    <hr/>
                </div>
                
            </div>
            <div class="col-12 col-md-3">
                <div class="card mb-4" style="width: 18rem;">
                    <div class="card-header bg-primary text-light">
                        Featured
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                </div>

                <div class="card mb-4" style="width: 18rem;">
                    <div class="card-header bg-primary text-light">
                        Featured
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                </div>

                <div class="card mb-4" style="width: 18rem;">
                    <div class="card-header bg-primary text-light">
                        Featured
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

export default {
    name:'Blog',
  components:{
    Menu
  }
}
</script>