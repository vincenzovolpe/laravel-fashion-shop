@extends('layouts.main')

@section('content')
    <main class="flex-shrink-0" role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Fashion Shop</h1>
          <p class="lead text-muted">– Che ne dici, un diamante?<br>– Dammi solo un armadio gigantesco!<br>
(Mr. Big e Carrie Bradshaw in Sex and The City)</p>
        </div>
      </section>

      <div class="container">
      <h3 class="h3">Nuovi Arrivi</h3>
      <div class="row">
          @foreach ($clothes as $cloth)
          <div class="col-md-3 col-sm-6">
              <div class="product-grid3">
                  <div class="product-image3">
                      <a href="#">
                          <img class="pic-1" src="{{ asset("images/$cloth->image_front")}}">
                          <img class="pic-2" src="{{ asset("images/$cloth->image_lateral")}}">
                      </a>
                      <ul class="social">
                          <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                          <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                      </ul>
                      <span class="product-new-label">{{$cloth->state}}</span>
                  </div>
                  <div class="product-content">
                      <h3 class="title"><a href="#">{{$cloth->name}}</a></h3>
                      <div class="price">
                          € {{$cloth->price_discount}}
                          <span>€ {{$cloth->price_regular}}</span>
                      </div>
                      <ul class="rating">
                          <li class="fa fa-star"></li>
                          <li class="fa fa-star"></li>
                          <li class="fa fa-star"></li>
                          <li class="fa fa-star disable"></li>
                          <li class="fa fa-star disable"></li>
                      </ul>
                  </div>
              </div>
          </div>
           @endforeach
      </div>
  </div>
</main>
@endsection
