@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Infy Om Company
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'infyOmCompanies.store']) !!}

                    @include('infy_om_companies.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
