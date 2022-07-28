import Vue from 'vue'
import App from './App.vue'
import vuetify from './plugins/vuetify'
import custom_axios from '@/plugins/axios'
import VueAxios from 'vue-axios'
import router from './plugins/router'
import axios from 'axios'


Vue.config.productionTip = false
Vue.use(custom_axios, VueAxios, axios)

new Vue({
  vuetify,
  router,
  render: h => h(App)
}).$mount('#app')
