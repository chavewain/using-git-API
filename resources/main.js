import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'

import axios from 'axios'
import VueAxios from 'vue-axios'

Vue.use(VueAxios, axios)

Vue.config.productionTip = false

MIX_APP_URL="${APP_URL}";

console.log('URL - ',MIX_APP_URL);

new Vue({
    data: {
        // Uh oh - appName is *also* the name of the
        // instance property we defined!
        appName: 'The name of some other app'
      },
    axios,
  router,
  store,
  beforeCreate: function() {
    console.log(this.appName)
  },
  render: h => h(App)
}).$mount('#app')
