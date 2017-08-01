@extends('layouts.admin.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Введите расположение и вид деятельности Вашей компании</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('carrier.add-info.submit') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="city" class="col-md-4 control-label">Регион или Город</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}" required autofocus>

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-offset-4 col-md-6">
                            <div class="form-group">
                                <div class="checkbox">
                                  <label>
                                    <input name="takelaj" type="checkbox" value="">
                                    Такелажные работы
                                  </label>
                                </div>
                            </div>
                        </div>  

                        <div class="form-group">
                            <label for="takelaj-ves" class="col-md-4 control-label">Максимальный вес</label>

                            <div class="col-md-6">
                                <select class="form-control" name="takelaj-ves">
                                    <option>10 тонн</option>
                                    <option>30 тонн</option>
                                    <option>50 тонн</option>
                                    <option>100 тонн</option>
                                    <option>более 100 тонн</option>
                                </select>
                            </div>    
                        </div>

                         <hr />                     

                        <div class="col-md-offset-4 col-md-6">
                            <div class="form-group">
                                <div class="checkbox">
                                  <label>
                                    <input name="gruzchik" type="checkbox" value="">
                                    Услуги грузчиков
                                  </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gruzchik-number" class="col-md-4 control-label">Количество человек</label>

                            <div class="col-md-6">
                                <select class="form-control" name="gruzchik-number">
                                    <option>от 1 до 5</option>
                                    <option>от 5 до 10</option>
                                    <option>от 10 до 20</option>
                                    <option>от 20 до 50</option>
                                    <option>более 50</option>
                                </select>
                            </div>    
                        </div>

                        <hr />    

                        <div class="col-md-offset-4 col-md-6">
                            <div class="form-group">
                                <div class="checkbox">
                                  <label>
                                    <input name="auto" type="checkbox" value="">
                                    Спецтехника
                                  </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="auto_avtokran" class="col-md-4 control-label">Автокраны</label>

                            <div class="col-md-6">
                                <select class="form-control" name="auto_avtokran" multiple>
                                    <option>Автокран 14 тонн</option>
                                    <option>Автокран 16 тонн</option>
                                    <option>Автокран 25 тонн</option>
                                    <option>Автокран 32 тонн</option>
                                    <option>Автокран 40 тонн</option>
                                    <option>Автокран 50 тонн</option>
                                    <option>Автокран 70 тонн</option>
                                    <option>Автокран 90 тонн и более</option>
                                </select>
                            </div>    
                        </div>

                        <div class="form-group">
                            <label for="auto_manipulator" class="col-md-4 control-label">Манипуляторы</label>

                            <div class="col-md-6">
                                <select class="form-control" name="auto_manipulator" multiple>
                                    <option>Манипуляторы 3 тонны</option>
                                    <option>Манипуляторы 5 тонн</option>
                                    <option>Манипуляторы 7 тонн</option>
                                    <option>Манипуляторы 10 тонн и более </option>
                                </select>
                            </div>    
                        </div>                        

                        <div class="form-group">
                            <label for="auto_pogruzchik" class="col-md-4 control-label">Погрузчики</label>

                            <div class="col-md-6">
                                <select class="form-control" name="auto_pogruzchik" multiple>
                                    <option>Фронтальный погрузчики 1 тонна</option>
                                    <option>Фронтальный погрузчики 3 тонн</option>
                                    <option>Фронтальный погрузчики 5 тонн и более</option>
                                </select>
                            </div>    
                        </div>


                        <div class="form-group">
                            <label for="auto_bort" class="col-md-4 control-label">Бортовые машины</label>

                            <div class="col-md-6">
                                <select class="form-control" name="auto_bort" multiple>
                                    <option>Бортовые машины 6 метров</option>
                                    <option>Бортовые машины 9 метров</option>
                                    <option>Бортовые машины 12 метров</option>
                                    <option>Бортовые машины 13 метров и более</option>
                                </select>
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
