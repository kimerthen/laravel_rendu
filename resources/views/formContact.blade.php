@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Formulaire de contact</h2></div>
                        <div class="panel-body">
                            <div class="form-group">
                                <form method="POST" action="{{route('formContact.store')}}">
                                    {{csrf_field()}}
                                    <h3 style="padding-left: 10px">Objet du mail :</h3>
                                    <input class="form-control" required type="text" name="object">

                                    <h3 style="padding-left: 10px">Contenu du mail :</h3>
                                    <textarea class="form-control" name="content" id="" rows="10"></textarea>

                                    <input class="btn btn-primary" type="submit" value="Envoyer">
                                @include('messages.errors')
                            </div>
                        </div>
                </div>
        </div>
@endsection

