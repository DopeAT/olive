export default {
    namespaced: true,
    state: {
        orders: [],
        payment: null,
        products: [],
    },
    getters: {
        getOrders: (state) => state.orders,
        getPayment: (state) => state.payment,
        getProducts: (state) => state.payment,
    },
    mutations: {
        setOrders: (state, payload) => {
            state.orders = payload
        },
        setProducts: (state, payload) => {
            state.products = payload
        },
        setTotal: (state, payload) => {
            state.orders =  {
                ...state.order,
                total: payload,
            }
        },
        setPayment: (state, payload) => {
            state.payment = payload
        },
    },
    actions: {
        updateOrder({commit, dispatch}, payload) {
            commit('setOrder', payload);
        },
        updatePayment({commit, dispatch}, payload) {
            commit('setPayment', payload);
        },
        async getProducts({ commit, dispatch }, payload) {
            const productsRes = await axios.get('/api/products')

            commit('setProducts', productsRes)
        },
        initOrder({state, commit, dispatch}, payload) {
            const orders = state.orders

            if (payload) {
                const existedOrder = orders.find(order => order.id === payload.order)

                if (existedOrder) {

                }
            }

            // commit('setOrder', {
            //     product: {
            //         id: 1,
            //         name: 'Olive Oil',
            //         description: 'Wild Olive Leaf Extract!',
            //         price_el: 25.00,
            //         price_en: 25.00,
            //         price_ru: 25.00,
            //     },
            //     total: 1,
            // })
        }
    }
}
