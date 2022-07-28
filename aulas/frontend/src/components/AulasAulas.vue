 <template>
    <div>
        <h1>ARMADO DE "AULAS"</h1>
        <router-link to="/AulasHome">Go to Home</router-link>
        {{ id }}
    </div>
</template>


<script>

export default {
    name: 'AulasMateria',
    computed: {
        id(){
            return this.$route.params.id
        }
    }
}

</script>