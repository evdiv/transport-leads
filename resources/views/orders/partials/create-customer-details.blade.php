    <div class="panel panel-default">
        <div class="panel-heading">Персональная информация</div>

        <form-add-customer-details>

            <div slot="register">
                @include('orders.partials.create-customer-register')
            </div>   
             
            <div slot="login">
                @include('orders.partials.create-customer-login')
            </div>    

        </form-add-customer-details>
    </div>
