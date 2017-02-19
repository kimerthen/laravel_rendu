@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading"><h2>Créer un article</h2></div>
            <div class="panel-body">
                <form method="POST" action="{{route('article.store')}}">
                    {{csrf_field()}}
                    <h3 style="padding-left: 10px">Titre :</h3>
                    <input class="form-control" required type="text" name="title">

                    <h3 style="padding-left: 10px">Contenu :</h3>
                    <textarea class="form-control" name="content" id="" cols="30" rows="10"></textarea>
                    <input class="btn btn-primary" type="submit" value="Envoyer">
                </form>

                @include('messages.errors')



                <div class="form-control">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        <img src="/images/{{ Session::get('path') }}">
                    @endif

                    <form action="{{ url('image-upload') }}" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-12">
                                <input type="file" name="image" />
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
