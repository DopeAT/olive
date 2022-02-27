@extends('layouts.app')
@section('page_id', 'order')
@section('content')

    <Order />

@endsection

@section('_scripts')
    <script>
        const PUBLISHABLE_KEY = '{{ env('MIX_STRIPE_PUBLISHABLE_KEY') }}';
        const GLOBAL_LOCALE_CODE = '{{ Config::get('app.locale') }}';
    </script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{ asset('js/order.js') }}" defer></script>
@endsection
