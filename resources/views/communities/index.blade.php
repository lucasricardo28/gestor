@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="container">
                    <div class="row">
                        <div class="col align-self-start">

                        </div>
                        <div class="col align-self-center">

                        </div>
                        <div class="col align-self-end">
                            <a href="#" data-toggle="modal" data-target="#createmodal" class="btn btn-primary btn-sm rounded-s float-right"><i class="fa fa-plus icon"></i> Cadastrar Representante </a>
                            @include("communities._create")
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card-body">
                        <table id="table-permission" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Contato</th>
                                    <th>Email</th>
                                    <th>Área</th>
                                    <th>Ordem</th>
                                    <th>Ação</th>
                                </tr>
                                </thead>
                                @forelse($communities as $community)
                                <tr>
                                    <td>{!! $community->name !!}</td>
                                    <td>{!! $community->contact !!}</td>
                                    <td>{!! $community->email !!}</td>
                                    <td>{!! $community->occupation_area !!}</td>
                                    <td>{!! $community->regional_id !!}</td>
                                    <td>
                                        <a class="btn btn-info" href="{!! route('communities.show', $community) !!}"><i class="fa fa-eye"></i> Ver Mais</a>
                                        <a class="btn btn-warning" href="{!! route('communities.edit', $community) !!}"><i class="fa fa-edit"></i> Alterar</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4">Nenhum registro foi encontrado!</td>
                                </tr>
                                @endforelse
                                </thead>
                            <tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection