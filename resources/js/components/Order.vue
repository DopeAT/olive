<template>
    <section class="section">
        <div class="container">
            <div class="row my-5 py-3">
                <div class="col-md-8">
                    <PaymentForm />
                </div>

                <div class="col-md-4 grey p-lg-3 py-md-3 px-md-0" style="background-color: #f5f5f5;">
                    <Cart />
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import PaymentForm from "./GUI/Payments/PaymentForm"
import Cart from "./GUI/Cart"

export default {
    name: "Order",
    components: {Cart, PaymentForm},
    mounted() {
        const params = new URLSearchParams(window.location.search)
        const order = params.get('order')
        const amount = params.get('amount')

        if (order && amount) {
            this.$store.dispatch('Order/initOrder', { order, amount })
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
    .mainContainer {
        padding: 2rem 3.5rem 2rem 6rem; text-align: left;
    }

    /* Small devices (landscape phones, 576px and up) */
    @media (min-width: 768px) {

    }

    /* Medium devices (tablets, 768px and up) */
    @media (max-width: 992px) {
        .mainContainer {
            padding: 2rem 0.5rem 1rem 0.5rem;text-align: left;
        }
    }
</style>

