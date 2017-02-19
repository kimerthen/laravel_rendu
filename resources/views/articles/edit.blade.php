@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{route('article.update', [$article->id])}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">
                            <input class="col-md-4 form-control" required type="text" value="{{$article->title}}" name="title">
                            <textarea class="col-md-6 form-control" name="content" id="" cols="30" rows="10">
                                {{$article->content}}
                            </textarea>
                                    <button type="submit" class="btn btn-primary">
                                        Modifier !
                                    </button>
                        </form>


                        <form method="POST" action="{{route('article.destroy', [$article->id])}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                            <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        Supprimer !
                            </div>
                        </form>

                        @include('messages.errors')
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
