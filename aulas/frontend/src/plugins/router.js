import Vue from 'vue'
import VueRouter from 'vue-router'


Vue.use(VueRouter)

import AulasHome from '../components/AulasHome.vue';
import AulasAbout from '../components/AulasAbout.vue';
import AulasAulas from '../components/AulasAulas.vue';
import AulasCarrera from '../components/AulasCarrera.vue';
import AulasProfesor from '../components/AulasProfesor.vue';
import AulasMateria from '../components/AulasMateria.vue';
import AulasHorarioMateria from '../components/AulasHorarioMateria.vue';
import AulasReservaAula from '../components/AulasReservaAula.vue';
import AulasLogin from '../components/AulasLogin.vue';


const routes = [
    {path: '/AulasHome', name: 'Home', component: AulasHome},
    {path: '/AulasAbout', name: 'About', component: AulasAbout},
    {path: '/AulasAulas', name: 'Aula', component: AulasAulas},
    {path: '/AulasCarrera', name: 'Carrera', component: AulasCarrera},
    {path: '/AulasProfesor', name: 'Profesor', component: AulasProfesor},
    {path: '/AulasMateria', name: 'Materia', component: AulasMateria},
    {path: '/AulasHorarioMateria', name: 'HorarioMateria', component: AulasHorarioMateria},
    {path: '/AulasReservaAula', name: 'ReservaAula', component: AulasReservaAula},
    {path: '/AulasLogin', name: 'Login', component: AulasLogin},

    
]

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

export default router