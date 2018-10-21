@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6 text-center">
                    <a href="{{ route('communities.index') }}" >
                        <div class="btn btn-primary">
                            Representante comunitário
                        </div>
                    </a>
                </div>

                <div class="col-md-6 text-center">
                    <a href="{{ route('institutions.index') }}" >
                        <div class="btn btn-primary align-content-center">
                            Intituições
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
