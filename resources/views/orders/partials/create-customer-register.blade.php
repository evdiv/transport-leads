<div class="field is-horizontal">

    <div class="field-label is-normal">
        <label class="label">Your Name</label>
    </div>

    <div class="field-body">

        <div class="field">
            <p class="control has-icons-left">

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif

                <input class="input" type="text" placeholder="Your Name" name="name" value="{{ old('name') }}">
                <span class="icon is-small is-left">
                    <i class="fa fa-user"></i>
                </span>
            </p>
        </div>

    </div>
</div>


<div class="field is-horizontal">

    <div class="field-label is-normal">
        <label class="label">Your Email</label>
    </div>

    <div class="field-body">

        <div class="field">
            <p class="control has-icons-left">

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif

                <input class="input" type="email" placeholder="Email" name="email" value="" value="{{ old('email') }}">
                <span class="icon is-small is-left">
                    <i class="fa fa-envelope"></i>
                </span>
            </p>
        </div>

    </div>
</div>


<div class="field is-horizontal">

    <div class="field-label is-normal">
        <label class="label">Your Phone</label>
    </div>

    <div class="field-body">

        <div class="field">
            <p class="control has-icons-left">

                @if ($errors->has('phone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif

                <input class="input" type="text" placeholder="Contact Phone" name="name" value="{{ old('phone') }}" >
                <span class="icon is-small is-left">
                    <i class="fa fa-phone"></i>
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

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

                <input class="input" type="password" placeholder="Password" name="password">
                <span class="icon is-small is-left">
                    <i class="fa fa-lock"></i>
                </span>
            </p>
        </div>
    </div>
</div>



<div class="field is-horizontal">

    <div class="field-label is-normal">
        <label class="label">Repeat Password</label>
    </div>

    <div class="field-body">

        <div class="field">
            <p class="control has-icons-left">

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

                <input class="input" type="password" placeholder="Repeat Password" name="password">
                <span class="icon is-small is-left">
                    <i class="fa fa-lock"></i>
                </span>
            </p>
        </div>
    </div>
</div>