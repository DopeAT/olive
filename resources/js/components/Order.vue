<template>
    <section class="section">
        <div class="container">
            <div class="row my-5 py-3">
                <div class="payment-form-section col-md-8 order-md-1 order-2">
                    <PaymentForm />
                </div>

                <div class="cart-section col-md-4 grey p-lg-3 py-md-3 px-md-0 order-md-2 order-1">
                    <Cart />
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import PaymentForm from "./GUI/Payments/PaymentForm"
import Cart from "./GUI/Cart"
import {mapGetters} from "vuex";

export default {
    name: "Order",
    components: {Cart, PaymentForm},
    computed: {
        ...mapGetters({
            orders: 'Order/getOrders',
        }),
    },
    async mounted() {
        await this.$store.dispatch('Order/getProducts')

        const params = new URLSearchParams(window.location.search)
        const order = parseInt(params.get('order'))

        if (isNaN(order)) return

        if (!this.orders.length) {
            return await this.$store.dispatch('Order/initOrder', { order: order || 1 })
        }

        if (order) {
          await this.$store.dispatch('Order/updateOrders', { order })
        }
    }
}
</script>

<style lang="scss">
    #payment-form {

        .StripeElement {
            box-sizing: border-box;
            padding: 20px 15px;
            width: 100%;
            margin: 0 0 5px 0;

            padding: 10px 12px;

            border: 1px solid transparent;
            border-radius: 4px;
            background-color: white;
            border: 2px solid #e1e1e1;
            border-radius: 4px;

            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

        .StripeElement--focus {
            box-shadow: 0 0 0 0.2rem rgba(52, 144, 220, 0.25);
            border-color: #a1cbef;
            outline: 0;
        }

        .StripeElement--invalid {
            border-color: #e3342f;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }

    }
</style>

<style scoped>
    .cart-section {
      background-color: #f5f5f5;
    }

    .mainContainer {
        padding: 2rem 3.5rem 2rem 6rem; text-align: left;
    }

    /* Small devices (landscape phones, 576px and up) */
    @media (max-width: 575.98px) {
        .cart-section {
            background-color: transparent;
            padding: 15px;
            border-bottom: 1px solid #f1f1f1;
        }

        .payment-form-section {
            margin-top: 10px;
        }
    }

    /* Medium devices (tablets, 768px and up) */
    @media (max-width: 992px) {
        .mainContainer {
            padding: 2rem 0.5rem 1rem 0.5rem;text-align: left;
        }
    }
</style>

