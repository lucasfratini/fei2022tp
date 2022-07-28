<template>
    <div>
        <h1>SELECCION DE HORARIO POR MATERIA</h1>
       <router-link to="/AulasHome">Go to Home</router-link>
        {{ id }}
    </div>
</template>


<script>

export default {
    name: 'AulasAbout',
    computed: {
        id(){
            return this.$route.params.id
        }
    }
}

</script>