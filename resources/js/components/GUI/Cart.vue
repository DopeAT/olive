<template>
    <div>
        <h5 class="font-weight-bold text-center">{{$t('Your Order Details')}}</h5>

        <div class="cart-body">
            <ul class="list-group overflow-list">
                <li
                    v-for="(order, index) in orders"
                    :key="index"
                    class="list-group-item d-flex justify-content-between"
                >
                    <span class="font-weight-bold">
                        <span class="fas fa-flask"></span>
                        {{order.name}}
                        <span class="small">({{ order.total }} x €{{ order.price }})</span>
                    </span>
                    <strong>
                        <i
                            v-if="order.total === 1 && orders.length > 1"
                            class="pointer fa fa-trash text-danger"
                            @click="removeProduct(order)"
                        ></i>
                        <i :class="{ disabled: order.total <= 1}" class="pointer fa fa-minus-circle" @click="decreaseProduct(order)"></i>
                        <span class="mx-1"> {{order.total}} </span>
                        <i class="pointer fa fa-plus-circle" @click="increaseProduct(order)"></i>
                    </strong>
                </li>
                <li key="total"
                    class="list-group-item d-flex justify-content-between"
                >
                    <span>Total (Euro)</span>
                    <strong>€{{ orderTotal }}</strong>
                </li>
            </ul>

<!--            <div class="input-group my-3">-->
<!--                <input type="text" class="form-control" :placeholder="$t('Promo code')" :aria-label="$t('Promo code')"-->
<!--                       v-model="promoCode" aria-describedby="discount">-->
<!--                <div class="input-group-append">-->
<!--                    <button class="btn btn-success" type="button" id="button-discount" @click="redeemDiscount">-->
<!--                        {{$t('Add')}}-->
<!--                    </button>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex'

    export default {
        name: "Cart",
        data() {
            return {
                promoCode: null
            }
        },
        computed: {
            ...mapGetters({
                orders: 'Order/getOrders',
                orderTotal: 'Order/getTotalPayAmount',
                //     discount: 'OrderDetails/getDiscount'
            }),
        },
        methods: {
            increaseProduct(order) {
                let total = order.total + 1
                this.$store.commit('Order/setTotal', {
                    id: order.id,
                    total
                })
            },
            decreaseProduct(order) {
                let total = order.total - 1

                if (!total) return

                this.$store.commit('Order/setTotal', {
                    id: order.id,
                    total
                })
            },
            removeProduct(order) {
                if (this.orders.length <= 1) return

                this.$store.commit('Order/remove', order.id)
            }
            // redeemDiscount() {
            //     if (!this.promoCode || this.promoCode.length < 4) return
            //
            //     // this.$store.dispatch('OrderDetails/fetchDiscountRate', {code: this.promoCode});
            // }
        },
    }
</script>

<style scoped>
    .overflow-list {
        max-height: 150px;
        overflow: auto;
    }

    .pointer {
        cursor: pointer;
    }
</style>
