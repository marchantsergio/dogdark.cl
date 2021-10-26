<template>
    <Menu/>
    <form v-on:submit.prevent="login()">
    <div class="logi">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 offset-md-4 mt-4">
                    <div class="card p-4 shadow">
                        <div><h2 class="text-center"><strong>LOGIN</strong></h2></div>
                        <div class="alert alert-danger mb-2" v-if="merror && merror!=''">{{merror}}</div>

                        <div class="mb-2">
                            <div v-if="v$.userlog.$error" class="alert alert-danger text-center mb-2">{{ v$.userlog.$errors[0].$message }}</div>
                            <input 
                                type="text"
                                class="form-control"
                                v-model="userlog"
                            />
                        </div>
                        <div class="mb-2">
                            <div v-if="v$.passlog.$error" class="alert alert-danger text-center mb-2">{{ v$.passlog.$errors[0].$message }}</div>
                            <input 
                                type="password"
                                class="form-control"
                                v-model="passlog"
                            />
                        </div>
                        <div class="text-center">
                            <input 
                                type="submit" 
                                value="INGRESAR"
                                class="btn btn-success"
                            />
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    </form>
</template>
<script>
import Menu from '../components/Menu.vue'
import useValidate from '@vuelidate/core'
import { required, minLength } from '@vuelidate/validators'
import axios from 'axios'
import { Global } from '../Global'

export default {
    name:'Login',
    components:{
        Menu
    },
    data(){
        return{
            v$: useValidate(),
            userlog:'',
            passlog:'',
            merror:'',
            retorno:[]
        }
    },
    validations(){
        return{
            userlog:{
                required,
                minLength: minLength(4)
            },
            passlog:{
                required,
                minLength: minLength(4)
            }
        }
    },
    methods:{
        login(){
            this.merror = ''
            this.v$.$validate()
            if(!this.v$.$error)
            {
                //consultamos a la base de datos
                axios
                .post(
                    Global.urirl + 'consulta/',
                    {
                        opcion:1,
                        user: this.userlog,
                        pass: this.passlog
                    }
                )
                .then(
                    res=>{
                        if(res.status==200)
                        {
                            console.log(res.data)
                            //this.retorno = res.data[0]
                            //console.log(this.retorno)
                            
                        }else{
                            this.merror = "Error de Data"
                        }
                    }
                )
                .catch(error=>{
                    this.merror = "" + error
                })
            }
        }
    }

}
</script>