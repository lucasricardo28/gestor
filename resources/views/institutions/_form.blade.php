<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Nome</label>
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Digite o Nome da Instituição']) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Contato</label>
                {!! Form::text('contact', null, ['class' => 'form-control', 'placeholder'=>'Digite o contato ']) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Email</label>
                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder'=>'Digite o Email ']) !!}
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <label>Endereço</label>
                {!! Form::text('address', null, ['class' => 'form-control', 'placeholder'=>'Digite o Endereço ']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Número</label>
                {!! Form::number('number', null, ['class' => 'form-control', 'placeholder'=>'Digite o Número ']) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Complemento</label>
                {!! Form::text('complement', null, ['class' => 'form-control', 'placeholder'=>'Digite o Complemento ']) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Bairro</label>
                {!! Form::text('neighborhood', null, ['class' => 'form-control', 'placeholder'=>'Digite o Bairro ']) !!}
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Ordem</label>
                {!! Form::select('public_target_id', $publicTargets , null ,['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Ações</label>
                {!! Form::text('developed_projects', null, ['class' => 'form-control', 'placeholder'=>'Digite uma Ação ']) !!}
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Número de membros</label>
                {!! Form::number('number_of_members', null, ['class' => 'form-control', 'placeholder'=>'Digite o Número de membros ']) !!}
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Nescessidades</label>
                {!! Form::text('need', null, ['class' => 'form-control', 'placeholder'=>'Digite a Nescessidade ']) !!}
            </div>
        </div>


    </div>
</div>

