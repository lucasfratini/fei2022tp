import Vue from 'vue'
import VueRouter from 'vue-router'

import AulasHome from '../components/AulasHome'
import AulasAbout from '../components/AulasAbout'
import Carga from '../components/Carga'

Vue.use(VueRouter)

const routes = [
    {path: '/', name: 'AulasHome', component: AulasHome},
    {path: '/about', name: 'AulasAbout', component: AulasAbout},
    {path: '/carga', name: 'AulasCarga', component: Carga}
]

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

export default router
