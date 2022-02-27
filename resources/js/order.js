window.Vue = require('vue')
window.axios = require('axios')

import store from './vuex/store'
import VueI18n from 'vue-i18n'

Vue.component('order', require('./components/Order.vue').default)
Vue.use(VueI18n)

import el from '../lang/el.json'
import ru from '../lang/ru.json'

const messages = {
    el,
    ru,
}

const i18n = new VueI18n({
    locale: GLOBAL_LOCALE_CODE, // set locale
    messages, // set locale messages
})


const app = new Vue({
    el: '#app',
    store,
    i18n,
});
