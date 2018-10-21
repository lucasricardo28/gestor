@extends('layouts.app')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="card">
                    @include('errors._check')
                    <div class="card-body">
                        {!! Form::model($institution,[
                            'route'=>['institutions.update', $institution->id],
                            'method' => 'put',
                            'files' => true
                            ])
                        !!}
                        @include('institutions._form')
                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::submit('Salvar', ['class'=>'btn btn-info pull-right publish']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

@endsection

@section('scriptpage')

    <link href="{{ asset('plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <script src="{{ asset('plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('plugins/select2/i18n/pt-BR.js') }}"></script>


@endsection