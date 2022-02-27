<template>
    <form id="payment-form" @submit.prevent="purchase">

        <div v-if="isLoading" class="loadContent">
            <div id="loader"></div>
        </div>

        <div v-if="paymentProceed && paymentMessage.length">
            <div class="alert" :class="(paymentSuccess ? 'alert-success' : 'alert-danger')" role="alert">
                {{paymentMessage}}
            </div>
        </div>

        <div class="form-group">
            <label for="email">{{ $t('Email Address') }} *</label>
            <input type="email"
                   class="form-control"
                   :class="{ 'is-invalid': errors.email }"
                   id="email"
                   :placeholder="$t('Email Address')"
                   v-model="form.email"
                   :readonly="paymentProceed"
            >
            <span v-if="errors && errors.email" class="invalid-feedback" role="alert">
                <strong>{{ errors.email }}</strong>
            </span>
        </div>

        <div class="form-group">
            <label for="phone">{{ $t('Phone') }} *</label>
            <input type="text"
                   class="form-control"
                   :class="{ 'is-invalid': errors.phone }"
                   id="phone"
                   :placeholder="$t('Phone')"
                   name="phone"
                   v-model="form.phone"
                   :readonly="paymentProceed"
            >
            <span v-if="errors && errors.phone" class="invalid-feedback" role="alert">
                <strong>{{ errors.phone }}</strong>
            </span>
        </div>

        <div class="form-group">
            <label for="cardName">{{ $t('Address') }} *</label>
            <textarea
                v-model="form.address"
                :readonly="paymentProceed"
                :placeholder="$t('Address')"
                id="address"
                class="form-control"
                :class="{ 'is-invalid': errors.address }"
            ></textarea>
            <span v-if="errors && errors.address" class="invalid-feedback" role="alert">
                <strong>{{ errors.address }}</strong>
            </span>
        </div>

        <div class="form-group">
            <label for="cardName">{{ $t('Cardholder Name') }} *</label>
            <input type="text"
                   class="form-control"
                   :class="{ 'is-invalid': errors.cardName }"
                   id="cardName"
                   :placeholder="$t('Card')"
                   v-model="form.cardName"
                   :readonly="paymentProceed"
            >
            <span v-if="errors && errors.cardName" class="invalid-feedback" role="alert">
                <strong>{{ errors.cardName }}</strong>
            </span>
        </div>

        <div class="form-group">
            <label for="card-element">{{ $t('Card') }} *</label>
            <CreditCard @errorCard="errors.errorCard = $event" @completeCard="cardCompleted"/>
        </div>

        <div class="row">
            <div class="col-12 mt-2 mx-0">
                <button
                    class="btn btn-md btn-success"
                    :disabled="disabledButton"
                >{{ $t('Proceed Payment') }}</button>
            </div>
        </div>
    </form>
</template>

<script>
    import { createToken } from 'vue-stripe-elements-plus'
    import CreditCard from "./CreditCard";
    // import {mapGetters} from "vuex";
    import rules from "./../../mixins/rules";

    export default {
        name: "PaymentForm",
        components: {
            CreditCard
        },
        mixins: [rules],
        data() {
            return {
                isLoading: false,
                completeCard: false,
                stripeToken: null,
                paymentProceed: false,
                paymentSuccess: false,
                paymentMessage: '',
                form: {
                    cardName: null,
                    phone: null,
                    email: null,
                    address: null,
                },
                errors: {
                    errorCard: null,
                    cardName: null,
                    email: null,
                    phone: null,
                    address: null,
                },
            }
        },
        computed: {
          disabledButton() {
              return !!(this.errors.errorCard || !this.completeCard || this.paymentProceed)
          }
        },
        methods: {
            cardCompleted(completed) {
                this.completeCard = completed
                this.errors.errorCard = false
            },
            async purchase() {
                this.errors = {};

                // Email
                if (!this.form.email) {
                    this.errors.email = 'Email required'
                } else if (!this.validEmail(this.form.email)) {
                    this.errors.email = 'Valid email required'
                }

                // Phone
                if(!this.form.phone) this.errors.phone = 'Phone required'

                // Cardholder Name
                if(!this.form.cardName) this.errors.cardName = 'Please enter cardholder name'

                if (!this.form.address) this.errors.address = 'Please enter your address'

                if (Object.keys(this.errors).length === 0 && this.errors.constructor === Object) {
                    this.isLoading = true
                    this.paymentProceed = true

                    try {
                        const tokenRes = await createToken()

                        if(!tokenRes.token.id) return

                        this.stripeToken = tokenRes.token.id

                        const chargeRes = await axios.post("/charge", {
                            stripeToken: this.stripeToken,
                            cardName: this.form.cardName,
                            phone: this.form.phone,
                            email: this.form.email,
                            address: this.form.address,
                            amount: 50,
                        })

                        this.paymentMessage = chargeRes.data.info.message
                        this.paymentSuccess = chargeRes.data.info.success
                    } catch (err) {
                        this.paymentMessage = err.message.includes(500)
                                                ? 'Something went wrong. Please try again later!'
                                                : err.message
                    } finally {
                        this.isLoading = false
                    }
                }
            }
        }
    }
</script>

<style scoped>

    .loadContent {
        position: absolute;
        background: rgba(0, 0, 0, 0.35);
        z-index: 9999;
        height: 100%;
        width: 100%;
    }

    #loader {
        position: absolute;
        left: 50%;
        top: 50%;
        z-index: 1;
        width: 150px;
        height: 150px;
        margin: -75px 0 0 -75px;
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        width: 120px;
        height: 120px;
        -webkit-animation: spin 2s linear infinite;
        animation: spin 2s linear infinite;
    }

    @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>
