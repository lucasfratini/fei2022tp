<template>
  
  <v-simple-table>
    
        <template v-slot:default>
      <thead>
        <tr>
          <th class="text-left">
          ID
          </th>
          <th class="text-left">
            Nombre
          </th>
        </tr>
      </thead>
      <tbody>
        <tr
          v-for="post in posts"
          :key="post.id"
        >
          <td>{{ post.id }}</td>
          <td>{{ post.nombre }}</td>
          
          
        </tr>
      </tbody>
    </template>
  </v-simple-table>
</template>


<script>

import axios from 'axios'

export default {
    name: 'AulasCarrera',
    data(){
        return {
            posts:[]
        }
    },
    mounted(){
            let vue=this;
            axios.get("apiv1/carrera")  
            .then (function(response){
                vue.posts=response.data;              
            })     
            
    },

    
}

</script>