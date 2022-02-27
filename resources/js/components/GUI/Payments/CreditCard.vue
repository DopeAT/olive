<template>
    <div>
        <card class='stripe-card'
              :class='{ complete }'
              stripe='pk_test_51K2GDAFtGxzYz84LymyyY1j1ZjO9xx4lML92d0f071kztsBKWu3xSpTcms0a9wOivmAKPTaRutjkh7uHwPxjtsxg00Ma3jxZI6'
              :options='stripeOptions'
              @change='change($event)'
        />

        <div v-if="errorMessage" id="card-errors" role="alert" v-text="errorMessage"></div>
    </div>
</template>

<script>

    import { Card, createToken } from 'vue-stripe-elements-plus'

    export default {
        name: "CreditCard",
        components: { Card },
        data () {
            return {
                complete: false,
                errorMessage: '',
                stripeOptions: {
                    style: {
                        base: {
                            color: '#32325d',
                            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                            fontSmoothing: 'antialiased',
                            fontSize: '16px',
                            '::placeholder': {
                                color: '#aab7c4'
                            }
                        },
                        invalid: {
                            color: '#fa755a',
                            iconColor: '#fa755a'
                        },
                    },
                    hidePostalCode: true
                }
            }
        },
        watch: {
            complete(val) {
                console.log(val)
            }
        },
        methods: {
            pay () {
                createToken().then(data => console.log(data.token))
            },
            change(event) {
                this.errorMessage = false;

                if(event.complete) {
                    this.$emit('completeCard', true)
                    return;
                }

                if (event.error) {
                    this.$emit('errorCard', true);
                    this.errorMessage = event.error.message;
                }
            }
        }
    }
</script>

<style>

</style>
