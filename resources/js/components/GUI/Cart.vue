<template>
    <div>
        <h5 class="font-weight-bold text-center">{{ $t('Your Order Details') }}</h5>

        <div class="cart-body">
            <ul class="list-group overflow-list">
                <li class="list-group-item d-flex justify-content-between">
                    <span class="small">Olive Power 30 ml. </span>
                    <strong>
                        <i class="pointer fa fa-minus-circle" @click="decreaseProduct"></i>
                        <span class="mx-1"> {{ totalItems }} </span>
                        <i class="pointer fa fa-plus-circle" @click="increaseProduct"></i>
                    </strong>
                </li>
            </ul>

            <div class="input-group my-3">
                <input type="text" class="form-control" placeholder="Promo code" aria-label="Promo code" v-model="promoCode" aria-describedby="discount">
                <div class="input-group-append">
                    <button class="btn btn-success" type="button" id="button-discount" @click="redeemDiscount">Redeem</button>
                </div>
            </div>

<!--            <div class="mt-3">-->
<!--                <div class="card p-3">-->
<!--                    <div class="text-center">-->
<!--                        <h5 class="mt-2"><i class="fas fa-life-ring text-danger"></i> <b>NOT SURE</b></h5>-->
<!--                        <p>About your order?</p>-->
<!--                    </div>-->
<!--                    <div class="description-text text-center">-->
<!--                        <small class="text-muted">-->
<!--                            <span>Let us help you decide!</span> <br/>-->
<!--                        </small>-->
<!--                    </div>-->
<!--                    <div class="card-actions row justify-content-around p-2">-->
<!--                        <a class="font-weight-bold" href="blog">Blog</a>-->
<!--                        <a class="font-weight-bold" href="mailto:alextser@yahoo.co.uk">Contact Us</a>-->
<!--                        <a class="font-weight-bold" href="javascript:void(Tawk_API.toggle())">Live Chat</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</template>

<script>
    import { mapGetters } from 'vuex'

    export default {
        name: "Cart",
        data() {
            return {
                promoCode: null
            }
        },
        computed: {
            ...mapGetters({
            //     delivery: 'OrderDetails/getDeliveryDate',
            //     total: 'OrderDetails/getTotal',
                order: 'Order/getOrder',
            //     Levels: 'OrderLevels/get',
            //     AdditionalServices: 'Services/getAdditionalServices',
            //     discount: 'OrderDetails/getDiscount'
            }),
            totalItems() {
                return this.order && this.order.total
            }
        },
        methods: {
            increaseProduct() {
                let total = this.totalItems + 1
                this.$store.commit('Order/setTotal', this.totalItems + 1)
            },
            decreaseProduct() {
                let total = this.totalItems

                if (total <= 1) return
                this.$store.commit('Order/setTotal', total - 1)
            },
            redeemDiscount() {
                if (!this.promoCode || this.promoCode.length < 4) return

                // this.$store.dispatch('OrderDetails/fetchDiscountRate', {code: this.promoCode});
            }
        },
        mounted() {
            if (!this.order) {
                this.$store.dispatch('Order/initOrder')
            }
        }
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
