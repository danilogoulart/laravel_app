@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <panel titulo="Dashboard">
            <div class="row">
                <div class="col-md-4">
                    <box cor="blue" titulo="Conteúdo 1">
                        Teste
                    </box>
                </div>
                <div class="col-md-4">
                    <panel cor="orange" titulo="Conteúdo 2">
                        Teste
                    </panel>
                </div>
                <div class="col-md-4">
                    <panel cor="panel-primary" titulo="Conteúdo 3">
                        Teste
                    </panel>
                </div>
            </div>
        </panel>
    </div>
</div>
</div>
@endsection
