@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif

                        <h1>{{$article->title}}</h1>
                        <p>{{$article->content}}</p>
                        <p>
                            @if($article->user)
                                Créer par : {{$article->user->name}}
                            @else
                                Pas d'utilisateur
                            @endif
                            <br />
                            @if ($article->isLiked)
                                <a style="text-decoration: underline" href="{{ route('article.like', $article->id) }}">J'aime <img height="20px" width="20px" src="http://localhost:8000/img/pouce_bleu.png"></a>
                            @else
                                <a href="{{ route('article.like', $article->id) }}">J'aime <img height="20px" width="20px" src="http://localhost:8000/img/pouce-blanc.png"></a>
                            @endif

                            @foreach ($article->likes as $user)
                                {{ $user->name }},
                            @endforeach
                            aime cet articles !

                        </p>
                        <a href="{{route('article.index')}}">Retour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
