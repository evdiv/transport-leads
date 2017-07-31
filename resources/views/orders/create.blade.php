@extends('layouts.master')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <div class="row">
            <div class="col-sm-4">
                <button type="button" class="btn btn-primary btn-lg btn-block">Takelaj</button>
            </div>
            <div class="col-sm-4">
                <button type="button" class="btn btn-primary btn-lg btn-block">Gruzchiki</button>
            </div>
            <div class="col-sm-4">
                <button type="button" class="btn btn-primary btn-lg btn-block">Auto</button>
            </div>
        </div>

        <hr />

        <div class="panel panel-default">
            <div class="panel-heading">Takelaj </div>

            <div class="panel-body">
                <!-- Can add multiple goods -->

                <form class="form-inline">

                    <div class="form-group">
                        <label for="unit_weight">Weight</label>

                        <input type="text" class="form-control" name="unit_weight" value="" required>
                    </div>


                    <div class="form-group">
                        <label for="unit_length">Length</label>

                        <input type="text" class="form-control" name="unit_length" value="" required>
                    </div>


                    <div class="form-group">
                        <label for="unit_height">Height</label>

                        <input type="text" class="form-control" name="unit_height" value="" required>
                    </div>


                    <div class="form-group">
                        <label for="unit_width">Width</label>

                        <input type="text" class="form-control" name="unit_width" value="" required>
                    </div>

                    <div class="form-group">
                        <label for="units_number">Units</label>

                        <input type="number" class="form-control" name="units_number" value="" required>
                    </div>


                    <div class="form-group">
                        <label for="unit_type">Type</label>

                        <select class="form-control">
                                <option>Cargo Type 1</option>
                                <option>Cargo Type 2</option>
                                <option>Cargo Type 3</option>
                                <option>Cargo Type 4</option>
                                <option>Cargo Type 5</option>
                        </select>
                    </div>

                    <!-- Image upload field -->
                    
                    <!-- Loading List upload field -->

                
                    <div class="form-group text-right">
                        <button class="btn btn-primary">Add Unit</button>
                    </div>

                </form>

            </div>
        </div>
            

        <div class="panel panel-default">
            <div class="panel-heading">Gruzchiki</div>

                <div class="panel-body">
                    <!-- Can add multiple goods -->

                    <form class="form-horizontal">


                        <div class="form-group">
                            <label for="people_number" class="col-md-4 control-label">Number of people</label>

                            <div class="col-md-6">
                                <input type="number" class="form-control" name="people_number" value="" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="service_type" class="col-md-4 control-label">Type of service</label>

                            <div class="col-md-6">
                                <select name="service_type" class="form-control">
                                    <option>Service Type 1</option>
                                    <option>Service Type 2</option>
                                    <option>Service Type 3</option>
                                    <option>Service Type 4</option>
                                    <option>Service Type 5</option>
                                </select>
                            </div>
                        </div>

                    
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button class="btn btn-primary">Add </button>
                            </div>
                        </div>

                    </form>
                    <!-- Can add multiple goods -->

                    <form class="form-inline">

                        <div class="form-group">
                            <label for="unit_weight">Weight</label>

                            <input type="text" class="form-control" name="unit_weight" value="" required>
                        </div>


                        <div class="form-group">
                            <label for="unit_length">Length</label>

                            <input type="text" class="form-control" name="unit_length" value="" required>
                        </div>


                        <div class="form-group">
                            <label for="unit_height">Height</label>

                            <input type="text" class="form-control" name="unit_height" value="" required>
                        </div>


                        <div class="form-group">
                            <label for="unit_width">Width</label>

                            <input type="text" class="form-control" name="unit_width" value="" required>
                        </div>

                        <div class="form-group">
                            <label for="units_number">Units</label>

                            <input type="number" class="form-control" name="units_number" value="" required>
                        </div>


                        <div class="form-group">
                            <label for="unit_type">Type</label>

                            <select class="form-control">
                                    <option>Cargo Type 1</option>
                                    <option>Cargo Type 2</option>
                                    <option>Cargo Type 3</option>
                                    <option>Cargo Type 4</option>
                                    <option>Cargo Type 5</option>
                            </select>
                        </div>

                        <!-- Image upload field -->
                        
                        <!-- Loading List upload field -->

                    
                        <div class="form-group text-right">
                            <button class="btn btn-primary">Add Unit</button>
                        </div>

                    </form>


                </div>
            </div>



        <div class="panel panel-default">
            <div class="panel-heading">Auto</div>

            <div class="panel-body">

                <form class="form-horizontal">

                    <div class="form-group">
                        <label for="service_type" class="col-md-4 control-label">Type of Auto</label>

                        <div class="col-md-6">
                            <select name="service_type" class="form-control">
                                <option>Auto Type 1</option>
                                <option>Auto Type 2</option>
                                <option>Auto Type 3</option>
                                <option>Auto Type 4</option>
                                <option>Auto Type 5</option>
                            </select>
                        </div>
                    </div>
                </form>


                <!-- Can add multiple goods -->

                <form class="form-inline">

                    <div class="form-group">
                        <label for="unit_weight">Weight</label>

                        <input type="text" class="form-control" name="unit_weight" value="" required>
                    </div>


                    <div class="form-group">
                        <label for="unit_length">Length</label>

                        <input type="text" class="form-control" name="unit_length" value="" required>
                    </div>


                    <div class="form-group">
                        <label for="unit_height">Height</label>

                        <input type="text" class="form-control" name="unit_height" value="" required>
                    </div>


                    <div class="form-group">
                        <label for="unit_width">Width</label>

                        <input type="text" class="form-control" name="unit_width" value="" required>
                    </div>

                    <div class="form-group">
                        <label for="units_number">Units</label>

                        <input type="number" class="form-control" name="units_number" value="" required>
                    </div>


                    <div class="form-group">
                        <label for="unit_type">Type</label>

                        <select class="form-control">
                                <option>Cargo Type 1</option>
                                <option>Cargo Type 2</option>
                                <option>Cargo Type 3</option>
                                <option>Cargo Type 4</option>
                                <option>Cargo Type 5</option>
                        </select>
                    </div>

                    <!-- Image upload field -->
                    
                    <!-- Loading List upload field -->

                
                    <div class="form-group text-right">
                        <button class="btn btn-primary">Add Unit</button>
                    </div>

                </form>

            </div>
        </div>




            <div class="panel panel-default">
                <div class="panel-heading">Loading and Destination points</div>
                <div class="panel-body">
                    <form class="form-horizontal">

                        <div class="form-group">
                            <label for="loading-location" class="col-md-4 control-label">Point of Loading</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="loading-location" value="" required autofocus>

                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                   Add Destination / Transfer Point
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>






            <div class="panel panel-default">
                <div class="panel-heading">Personal Information</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Ваше имя</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Телефон</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Пароль</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Повторить Пароль</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Зарегистрироваться
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>




        </div>
    </div>
</div>
@endsection
