<style>
    /* Credit Card Form */
    .usable-creditcard-form, .usable-creditcard-form * {
        font-size: 13px;
    }
    .usable-creditcard-form {
        position: relative;
        padding: 0px;
        width: 300px;
        margin-left: auto;
        margin-right: auto;
    }
    .usable-creditcard-form .wrapper {
        border: 1px solid #CCC;
        border-top: 1px solid #AAA;
        border-right: 1px solid #AAA;
        height: 74px;
        width: 300px;
        position: relative;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
    }
    .usable-creditcard-form .input-group {
        position: absolute;
        top: 300px;
    }
    .usable-creditcard-form .input-group.nmb_a {
        position: absolute;
        width: 200px;
        top: 0px;
        left: 0px;
    }
    .usable-creditcard-form .input-group.nmb_b {
        position: absolute;
        width: 100px;
        top: 0px;
        right: 0px;
    }
    .usable-creditcard-form .input-group.nmb_b input,
    .usable-creditcard-form .input-group.nmb_d input {
        text-align: center;
    }
    .usable-creditcard-form .input-group.nmb_c {
        position: absolute;
        width: 200px;
        top: 37px;
        left: 0px;
    }
    .usable-creditcard-form .input-group.nmb_d {
        position: absolute;
        width: 100px;
        top: 37px;
        right: 0px;
    }
    .usable-creditcard-form input {
        background: none;
        display: block;
        width: 100%;
        padding: 10px;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        margin:0px;
        padding-left: 35px;
        border: none;
    }
    .usable-creditcard-form .input-group .icon {
        position: absolute;
        width: 22px;
        height: 22px;
        background: #CCC;
        left: 8px;
        top: 7px;
    }
    .usable-creditcard-form .input-group.nmb_a input {
        border-right: 1px solid #ECECEC;
    }
    .usable-creditcard-form .input-group.nmb_c input {
        border-top: 1px solid #ECECEC;
        border-right: 1px solid #ECECEC;
    }

    .usable-creditcard-form input::-webkit-input-placeholder {
        font-size: 12px;
        text-transform: none;
    }
    .usable-creditcard-form .input-group.nmb_d input {
        border-top: 1px solid #ECECEC;
    }

    .usable-creditcard-form .input-group.nmb_c input {
        text-transform: uppercase;
    }
    .usable-creditcard-form .accept {
        color: #999;
        font-size: 11px;
        margin-bottom: 5px;
    }
    .usable-creditcard-form .footer {
        margin-top: 3px;
        position: relative;
        margin-left: 5px;
        margin-right: 5px;
    }
    .usable-creditcard-form .footer img {
        padding: 0px;
        margin: 0px;
    }
    .usable-creditcard-form .iugu-btn {
        position: absolute;
        top: 0px;
        right: 0px;
    }

    /* Do not forget to store your images in a secure server */
    .usable-creditcard-form .input-group .icon.ccic-name {
        background: url("http://storage.pupui.com.br/9CA0F40E971643D1B7C8DE46BBC18396/assets/ccic-name.1cafa1882fdd56f8425de54a5a5bbd1e.png") no-repeat;
    }
    .usable-creditcard-form .input-group .icon.ccic-exp {
        background: url("http://storage.pupui.com.br/9CA0F40E971643D1B7C8DE46BBC18396/assets/ccic-exp.05e708b1489d5e00c871f20ba33bbff3.png") no-repeat;
    }
    .usable-creditcard-form .input-group .icon.ccic-brand {
        background: url("http://storage.pupui.com.br/9CA0F40E971643D1B7C8DE46BBC18396/assets/ccic-brands.48dba03883007f86e118f683dcfc4297.png") no-repeat;
    }
    .usable-creditcard-form .input-group .icon.ccic-cvv { background: url("http://storage.pupui.com.br/9CA0F40E971643D1B7C8DE46BBC18396/assets/ccic-cvv.1fe78dcc390427094bdc14dedea10f34.png") no-repeat; }

    .usable-creditcard-form .input-group .icon.ccic-cvv,
    .usable-creditcard-form .input-group .icon.ccic-brand
    {
        -webkit-transition:background-position .2s ease-in;
        -moz-transition:background-position .2s ease-in;
        -o-transition:background-position .2s ease-in;
        transition:background-position .2s ease-in;
    }

    .amex .usable-creditcard-form .input-group .icon.ccic-cvv {
        background-position: 0px -22px;
    }

    .amex .usable-creditcard-form .input-group .icon.ccic-brand {
        background-position: 0px -110px;
    }

    .visa .usable-creditcard-form .input-group .icon.ccic-brand {
        background-position: 0px -22px;
    }

    .diners .usable-creditcard-form .input-group .icon.ccic-brand {
        background-position: 0px -88px;
    }

    .mastercard .usable-creditcard-form .input-group .icon.ccic-brand {
        background-position: 0px -66px;
    }

    /* Non Credit Card Form - Token Area */
    .token-area {
        margin-top: 20px;
        margin-bottom: 20px;
        border: 1px dotted #CCC;
        display: block;
        padding: 20px;
        background: #EFEFEF;
    }
</style>

<form id="payment-form" action="{{url('/assinar')}}" method="POST">
    {{ csrf_field() }}
    <div class="usable-creditcard-form">
        <div class="wrapper">
            <div class="input-group nmb_a">
                <div class="icon ccic-brand"></div>
                <input autocomplete="off" class="credit_card_number" data-iugu="number" placeholder="Número do Cartão" type="text" value="" />
            </div>
            <div class="input-group nmb_b">
                <div class="icon ccic-cvv"></div>
                <input autocomplete="off" class="credit_card_cvv" data-iugu="verification_value" placeholder="CVV" type="text" value="" />
            </div>
            <div class="input-group nmb_c">
                <div class="icon ccic-name"></div>
                <input class="credit_card_name" data-iugu="full_name" placeholder="Titular do Cartão" type="text" value="" />
            </div>
            <div class="input-group nmb_d">
                <div class="icon ccic-exp"></div>
                <input autocomplete="off" class="credit_card_expiration" data-iugu="expiration" placeholder="MM/AA" type="text" value="" />
            </div>
        </div>
        <div class="footer">
            <img src="http://storage.pupui.com.br/9CA0F40E971643D1B7C8DE46BBC18396/assets/cc-icons.e8f4c6b4db3cc0869fa93ad535acbfe7.png" alt="Visa, Master, Diners. Amex" border="0" />
            <a class="iugu-btn" href="http://iugu.com" tabindex="-1"><img src="http://storage.pupui.com.br/9CA0F40E971643D1B7C8DE46BBC18396/assets/payments-by-iugu.1df7caaf6958f1b5774579fa807b5e7f.png" alt="Pagamentos por Iugu" border="0" /></a>
        </div>
    </div>

    <div class="token-area">
        <label for="token">Token do Cartão de Crédito - Enviar para seu Servidor</label>
        <input type="text" name="token" id="token" value="" readonly="true" size="64" style="text-align:center" />
    </div>

    <div>
        <button type="submit">Salvar</button>
    </div>

</form>