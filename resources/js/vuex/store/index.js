import Vue from  'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

import Order from "./order"
import CustomerDetails from "./customerDetails"

import VuexPersistence from "vuex-persist"

const vuexLocal = new VuexPersistence({
    key: 'store-data',
    storage: window.localStorage,
    modules: ['Order', 'CustomerDetails']
})

export default new Vuex.Store({
    modules: { Order, CustomerDetails },
    plugins: [vuexLocal.plugin],
    strict: true
})
