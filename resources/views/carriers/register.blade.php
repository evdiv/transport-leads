@extends('layouts.master')


@section ('content')
    
    @include('layouts.hero')

    <section class="section">
        <div class="container">
            <div class="content">
                <register-company-form-wizard></register-company-form-wizard>
            </div>
        </div>
    </section>

@endsection