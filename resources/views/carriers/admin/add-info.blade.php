@extends('layouts.admin.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">Add description, расположение и вид деятельности Вашей компании</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('carrier.add-info.submit') }}">
                        {{ csrf_field() }}


                        <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                            <label for="location" class="col-md-4 control-label">Регион или Город</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control" name="location" value="{{  old('location', $carrier->location) }}" required autofocus>

                                @if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Company Description</label>

                            <div class="col-md-6">

                                <textarea id="description" name="description" class="form-control" rows="6">{{  old('description', $carrier->description) }}</textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        
                        <div class="form-group">

                            <label for="takelaj_max_weight" class="col-md-4 control-label">Takelaj Максимальный вес </label>

                            <div class="col-md-6">

                                <select class="form-control" name="takelaj_max_weight">
                                    <option value="10">10 тонн</option>
                                    <option value="30">30 тонн</option>
                                    <option value="50">50 тонн</option>
                                    <option value="70">70 тонн</option>
                                    <option value="100">более 100 тонн</option>
                                </select>
                            </div>    
                        </div>

                         <hr />                     

                        <div class="form-group">
                            <label for="gruzchik-number" class="col-md-4 control-label">Количество gruzchikov</label>

                            <div class="col-md-6">
                                <select class="form-control" name="gruzchik_number">
                                    <option value="5">от 1 до 5</option>
                                    <option value="10">от 5 до 10</option>
                                    <option value="20">от 10 до 20</option>
                                    <option value="50">от 20 до 50</option>
                                    <option value="100">более 50</option>
                                </select>
                            </div>    
                        </div>

                        <div class="col-md-offset-4 col-md-6">
                            <h4>Автокраны</h4>
                        </div>

                        <div class="col-md-offset-2 col-md-8">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label> <input name="autokran_14" type="checkbox" value="1">
                                        Автокран 14 тонн</label>

                                    <label><input name="autokran_16" type="checkbox" value="1">
                                        Автокран 16 тонн</label>

                                    <label><input name="autokran_25" type="checkbox" value="1">
                                        Автокран 25 тонн</label>

                                    <label> <input name="autokran_32" type="checkbox" value="1">
                                        Автокран 32 тонн</label>

                                    <label> <input name="autokran_40" type="checkbox" value="1">
                                        Автокран 40 тонн</label>

                                    <label> <input name="autokran_50" type="checkbox" value="1">
                                        Автокран 50 тонн</label>

                                    <label> <input name="autokran_70" type="checkbox" value="1">
                                        Автокран 70 тонн</label>

                                    <label> <input name="autokran_90" type="checkbox" value="1">
                                        Автокран 90 тонн</label>

                                </div>
                            </div>
                        </div>

    
                        <div class="col-md-offset-4 col-md-6">
                            <h4>Манипуляторы</h4>
                        </div>

                        <div class="col-md-offset-2 col-md-8">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label> <input name="manipulator_3" type="checkbox" value="1">
                                        Манипуляторы 3 тонн</label>

                                    <label><input name="manipulator_5" type="checkbox" value="1">
                                        Манипуляторы 5 тонн</label>

                                    <label><input name="manipulator_7" type="checkbox" value="1">
                                        Манипуляторы 7 тонн</label>

                                    <label> <input name="manipulator_10" type="checkbox" value="1">
                                        Манипуляторы 10 тонн</label>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-offset-4 col-md-6">
                            <h4>Nizcoramniki</h4>
                        </div>

                        <div class="col-md-offset-2 col-md-8">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label> <input name="nizkoramnik_15" type="checkbox" value="1">
                                        Nizkoramnik 15 тонн</label>

                                    <label><input name="nizkoramnik_25" type="checkbox" value="1">
                                        Nizkoramnik 25 тонн</label>

                                    <label><input name="nizkoramnik_35" type="checkbox" value="1">
                                        Nizkoramnik 35 тонн</label>

                                    <label> <input name="nizkoramnik_40" type="checkbox" value="1">
                                        Nizkoramnik 40 тонн</label>

                                </div>
                            </div>
                        </div>


                        <div class="col-md-offset-4 col-md-6">
                            <h4>Фронтальный погрузчики</h4>
                        </div>

                        <div class="col-md-offset-2 col-md-8">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label> <input name="lifter_1" type="checkbox" value="1">
                                        Фронтальный погрузчики 1 тонн</label>

                                    <label><input name="lifter_3" type="checkbox" value="1">
                                        Фронтальный погрузчики 3 тонн</label>

                                    <label><input name="lifter_5" type="checkbox" value="1">
                                        Фронтальный погрузчики 5 тонн</label>
                                </div>
                            </div>
                        </div>
                     

                        <div class="col-md-offset-4 col-md-6">
                            <h4>Бортовые машины</h4>
                        </div>

                        <div class="col-md-offset-2 col-md-8">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label> <input name="open_6" type="checkbox" value="1">
                                        Бортовые машины 6 метров</label>

                                    <label><input name="open_9" type="checkbox" value="1">
                                        Бортовые машины 9 метров</label>

                                    <label><input name="open_12" type="checkbox" value="1">
                                        Бортовые машины 12 метров</label>

                                    <label><input name="open_13" type="checkbox" value="1">
                                        Бортовые машины 13.5 метров и более</label>                                        
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Добавить информацию
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
