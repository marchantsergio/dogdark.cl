import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue'
import Blog from '../views/Blog.vue'
import Archivos from '../views/Archivos.vue'
import Admart from '../views/Admart.vue'
import Admnart from '../views/Admnart.vue'
import Login from '../views/Login.vue'

const routes = [
  { path: '/', name: 'Home', component: Home },
  { path: '/blog', name: 'Blog', component: Blog },
  { path: '/archivos', name: 'Archivos', component: Archivos },
  { path: '/login', name: 'Login', component: Login },

  { path: '/adm/admart', name: 'Admart', component: Admart },
  { path: '/adm/admnart', name: 'Admnart', component: Admnart },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
