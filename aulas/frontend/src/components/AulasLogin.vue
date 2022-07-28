<template>
    <v-container>
        <v-row aling="center" justify="center">
            <v-col cols="12" sm="12">
                <v-card class="elevation-10 mt-10">
                    <v-window v-model= step>
                    <v-window-item :value="1">
                    <v-row>
                        <v-col cols="12" sm="6">
                            <v-card-text class="mt-12">
                                <h2 class="text-center">Ingresar a tu Cuenta</h2>
                              
                                <v-row aling="center" justify="center">
                                    <v-col cols="12" sm="8">
                                        <v-text-field label="Usuario" outlined dense color="blue" autocomplete="false" class="mt-16"></v-text-field>
                                        <v-text-field label="Contraseña" outlined dense color="blue" autocomplete="false" type="password"></v-text-field>
                                        <v-row>
                                            <v-col cols="12" sm="7">
                                                <v-checkbox label="Recordar contraseña" class="mt-nl" color="blue"></v-checkbox>
                                            </v-col>
                                            
                                        </v-row>
                                        <v-btn color="blue" dark block title>Conectarse</v-btn>
                                        
                                    </v-col>
                                </v-row>
                            </v-card-text>
                        </v-col>
                        <v-col cols="12" sm="6" class="blue rounded-bl-pill">
                            <div style="text-aling:center; padding: 180px 0;">
                            <v-card-text class="white--text">
                                <h1 class="text-center">No tienes cuenta?</h1>
                                <h3 class="text-center">
                                    Creemos una cuenta para comenzar<br>
                                </h3>
                            </v-card-text>
                                <div class="text-center">
                                    <v-btn title outlined dark @click="step++">Crear cuenta</v-btn>
                                </div>
                            </div>
                        </v-col>
                    </v-row>
                    </v-window-item>
                    <v-window-item :value="2">
                    <v-row>
                        <v-col cols="12" sm="6" class="blue rounded-br-pill">
                            <div style="text-aling:center; padding: 180px 0;">
                            <v-card-text class="white--text">
                                <h2 class="text-center">Ya la creaste?</h2>
                                <h3 class="text-center">volvamos</h3>
                            </v-card-text>
                            <div class="text-center">
                                <v-btn tile outlined dark @click="step--">Conectarse</v-btn>
                            </div>
                            </div>
                        </v-col>
                        <v-col cols="12" sm="6">
                            <v-card-text class="mt-12">
                                <h2 class="tex-center">Crear nueva cuenta</h2>
                               
                                <v-row>
                                    <v-col cols="12" sm="6">
                                        <v-text-field label="Usuario" outlined dense color="blue" autocomplete="false" class="mt-4"></v-text-field>

                                    </v-col>
                                    <v-col cols="12" sm="6">
                                        <v-text-field label="Contraseña" outlined dense color="blue" type="password" class="mt-4"></v-text-field>
                                    </v-col>
                                </v-row>
                                <v-btn color="blue" dark block title>Crear</v-btn>
                            </v-card-text>
                        </v-col>
                    </v-row>
                    </v-window-item>
                    </v-window>
                </v-card>
            </v-col>
        </v-row>
    </v-container>




</template>

<script>
export default{
     data:()=>({
        step : 1,
       
  
     }),
      propos:{
        source: String
     }

}
</script>

<style scoped>
.v-appication .rounded-bl-xl {
    border-bottom-left-radius: 300px !important;
    }
.v-appication .rounded-bl-xl {
    border-bottom-right-radius: 300px !important;
    }

</style>