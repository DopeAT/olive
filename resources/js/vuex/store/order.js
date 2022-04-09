export default {
    namespaced: true,
    state: {
        orders: [],
        // payment: null,
        products: [],
    },
    getters: {
        getOrders: (state) => state.orders,
        getTotalPayAmount: (state) => {
            return state.orders.reduce((t, { price, total }) => t + parseFloat(price) * total, 0)
        },
        // getPayment: (state) => state.payment,
        // getProducts: (state) => state.payment,
    },
    mutations: {
        setOrders: (state, payload) => {
            state.orders = payload
        },
        setProducts: (state, payload) => {
            state.products = payload
        },
        // updateOrder: (state, payload) => {
        //     const orderIndex = state.orders.findIndex(order => order.id == payload.id)
        //     state.orders[orderIndex] = payload
        // }
        setTotal: (state, payload) => {
            const orderIndex = state.orders.findIndex(order => order.id == payload.id)
            state.orders[orderIndex] = {
                ...state.orders[orderIndex],
                total: payload.total,
            }

            state.orders = [...state.orders]
        },
        remove: (state, id) => {
            state.orders = state.orders.filter(order => order.id !== id)
        }
        // setPayment: (state, payload) => {
        //     state.payment = payload
        // },
    },
    actions: {
        updateOrders({state, commit, dispatch}, payload) {
            const orderIndex = state.orders.findIndex(order => order.id == payload.order)

            if (orderIndex > -1) return

            const products = state.products
            const product = products.find(product => product.id === payload.order)
            const orders = [...state.orders, {
                id: product.id,
                name: product.name,
                price: product.price,
                total: 1,
            }]

            commit('setOrders', orders)
        },
        // updatePayment({commit, dispatch}, payload) {
        //     commit('setPayment', payload);
        // },
        async getProducts({ commit }) {
            const productsRes = await axios.get('/api/products')

            commit('setProducts', productsRes.data)
        },
        initOrder({state, commit, dispatch}, payload) {
            const products = state.products
            const product = products.find(product => product.id === payload.order)

            commit('setOrders', [{
              id: product.id,
              name: product.name,
              price: product.price,
              total: 1,
            }])
        }
    }
}
