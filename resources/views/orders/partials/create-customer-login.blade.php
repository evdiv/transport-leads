<div class="field is-horizontal">

    <div class="field-label is-normal">
        <label class="label">Your Email</label>
    </div>

    <div class="field-body">
        
        <div class="field">
            <p class="control has-icons-left has-icons-right">
                <input class="input" type="email" placeholder="Email" name="email" value="" v-model=$store.state.newOrder.email>
                <span class="icon is-small is-left">
                    <i class="fa fa-envelope"></i>
                </span>

                <span class="icon is-small is-right">
                    <i class="fa fa-check"></i>
                </span>
            </p>
        </div>
    </div>
</div>


<div class="field is-horizontal">

    <div class="field-label is-normal">
        <label class="label">Password</label>
    </div>

    <div class="field-body">
        

        <div class="field">
            <p class="control has-icons-left">
                <input class="input" type="password" placeholder="Password" name="password" v-model=$store.state.newOrder.pass>
                <span class="icon is-small is-left">
                    <i class="fa fa-lock"></i>
                </span>
            </p>
        </div>

    </div>

</div>



