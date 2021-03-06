<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Nome</label>
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Digite o Nome ']) !!}
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
                {!! Form::select('regional_id', $regionals , null ,['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Área de atuação</label>
                {!! Form::text('occupation_area', null, ['class' => 'form-control', 'placeholder'=>'Digite o Área de Atuação ']) !!}
            </div>
        </div>
    </div>
</div>

