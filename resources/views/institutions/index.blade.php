@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="container">
                    <div class="row">
                        <div class="col align-self-start">
                            <a href="{{route('principal')}}" class="btn btn-success btn-sm rounded-s"><i class="fa fa-plus icon"></i> INICIO </a>
                        </div>
                        <div class="col align-self-center">

                        </div>
                        <div class="col align-self-end">
                            <a href="#" data-toggle="modal" data-target="#createmodal" class="btn btn-primary btn-sm rounded-s float-right"><i class="fa fa-plus icon"></i> Cadastrar Instituição </a>
                            @include("institutions._create")
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Instituição</th>
                                    <th>Telefone</th>
                                    <th>Publico</th>
                                    <th>Projetos</th>
                                    <th>Qtd. Membros</th>
                                    <th>Nescessidades</th>
                                    <th>Ação</th>
                                </tr>
                                </thead>
                            @forelse($institutions as $institution)
                                <tr>
                                    <td>{!! $institution->name !!}</td>
                                    <td>{!! $institution->contact !!}</td>
                                    <td>{!! $institution->publicTarget->name !!}</td>
                                    <td>{!! $institution->developed_projects !!}</td>
                                    <td>{!! $institution->number_of_members !!}</td>
                                    <td>{!! $institution->need!!}</td>
                                    <td>
                                        {{--<a class="btn btn-info" href="{!! route('communities.show', $community) !!}"><i class="fa fa-eye"></i> Ver Mais</a>--}}
                                        <a class="btn btn-warning" href="{!! route('institutions.edit', $institution) !!}"><i class="fa fa-edit"></i> Alterar</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">Nenhum registro foi encontrado!</td>
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