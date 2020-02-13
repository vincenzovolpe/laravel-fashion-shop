@extends('layouts.main')

@section('content')
    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Fashion Shop</h1>
          <p class="lead text-muted">– Che ne dici, un diamante?<br>– Dammi solo un armadio gigantesco!<br>
(Mr. Big e Carrie Bradshaw in Sex and The City)</p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row row-cols-1 row-cols-md-3">
              @foreach ($clothes as $cloth)
                  <div class="col mb-4">
                    <div class="card h-100">
                          <img src="{{ asset("images/$cloth->images_name")}}" class="card-img-top" alt="{{$cloth->name}}">
                      <div class="card-body">
                        <h5 class="card-title">{{$cloth->name}}</h5>
                        <p class="card-text">{{$cloth->description}}</p>
                      </div>
                    </div>
                  </div>
              @endforeach
          </div>
        </div>
      </div>

    </main>
@endsection
