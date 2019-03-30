@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Vous êtes  authentifié!</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h1>Que voulez vouz faire?</h1>

                        <a href="/listall"><h3>Afficher liste d'étudiants</h3></a>

                        <a href="/register"><h3>Enscrir un nouveau utilisateur</h3></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
