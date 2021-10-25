import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap'
import '../src/assets/css/estilo.min.css'
import AOS from 'aos'
import 'aos/dist/aos.css'


createApp(App).use(router, AOS.init()).mount('#app')
