@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in! {{ Auth::user()->subscription('main')->cancelled() ? "Cancelada" : "Ativa"}}
                    <div>
                        <form action="/subscription" method="POST">
                            {{ csrf_field() }}
                            <script
                                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                    data-key="pk_test_wnSJSJVA8mCwGEm10xwp59qo"
                                    data-amount="2000"
                                    data-name="Plano Advogado"
                                    data-description="Seja visto por um mes"
                                    data-image="/img/documentation/checkout/marketplace.png"
                                    data-locale="auto"
                                    data-email="{{ Auth::user()->email }}"
                                    data-currency="BRL">
                            </script>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
