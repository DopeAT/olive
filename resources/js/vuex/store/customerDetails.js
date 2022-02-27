export default {
    namespaced: true,
    state: {
        currentCustomer: null
    },
    getters: {
        getCurrentCustomer: (state) => {
            return state.currentCustomer
        }
    },
    mutations: {
        setCurrentCustomer: (state, payload) => {
            state.currentCustomer = payload
        }
    },
}
