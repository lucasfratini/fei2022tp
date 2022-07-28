<template>
  <v-container>
    <v-navigation-drawer
    app
    permanent
    color="#BBDEFB"
    
    >
      <v-list-item>
        <v-img
          alt="Aulas Logo"
          class="shrink mr-2"
          contain
          :src="require('../assets/CURZA-logo.png')"
          transition="scale-transition"
          width="60"
                    
        />
        <v-list-item-content>
          <v-list-item-title class="text-h6">
            Aulas Curza
          </v-list-item-title>
          <v-list-item-subtitle>
            FEI
          </v-list-item-subtitle>
        </v-list-item-content>
      </v-list-item>
      <v-divider></v-divider>
      <v-list dense>
        <v-list-item
            v-for="item in items"
            :key="item.title"
            :to="item.to"
            link
        >
          <v-list-item-icon>
            <v-icon>{{ item.icon }}</v-icon>
          </v-list-item-icon>
          <v-list-item-content>
            <v-list-item-title>{{ item.title }}</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>

  </v-container>
</template>

<script>
  export default {
    name: 'MainMenu',

    data: () => ({
      items: [
        { title: 'Home', icon : 'mdi-home', to: '/AulasHome' },
        { title: 'Login', icon: 'mdi-login', to: '/AulasLogin' },
        { title: 'Carreras', icon: 'mdi-town-hall', to: '/AulasCarrera' },
        { title: 'Materia', icon: 'mdi-school', to: '/AulasMateria' },
        { title: 'Profesor', icon: 'mdi-account-school', to: '/AulasProfesor' },
        { title: 'Aula', icon: 'mdi-atlassian', to: '/AulasAulas' },
        { title: 'Reservar Aula', icon: 'mdi-calendar-month-outline', to: '/AulasReservaAula' },
        { title: 'Horario de Materias', icon: 'mdi-clock', to: '/AulasHorarioMateria' },
        { title: 'About', icon: 'mdi-information', to: '/AulasAbout' },

        ],
    }),
    mounted(){
      
    },
    computed: {
      
    }
  }
</script>