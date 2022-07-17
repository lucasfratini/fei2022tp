<template>
    <div>
        <h1>Formulario para la carga de Aulas</h1><br>
        <br>
        
        {{ id }}

        <form>
            <p>
            Aula: <input type="text" name="aula" placeholder="Aula" />
            </p>
            <p>
            Materia: <input type="text" name="materia" placeholder="Materia" />
            </p>
            <p>
            Fecha Desde: <input type="text" name="fecha_desde" placeholder="Fecha Desde" />
            </p>
            <p>
            Fecha Hasta: <input type="text" name="fecha_hasta" placeholder="Fecha Hasta" />
            </p>
            <p>
            Descripcion: <input type="text" name="descripcion" placeholder="Descripcion"/>
            </p>
            
            <input type="submit" value="Enviar" title="Cargar" class="btn btn-primary"/><br>
        </form>

        <router-link to="/">Go to Home</router-link>
    </div>
</template>


<script>

export default {
    name: 'AulasCarga',
    computed: {
        id(){
            return this.$route.params.id
        }
    }
}

</script>
