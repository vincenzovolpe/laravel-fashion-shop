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

      <div class="container">
      <h3 class="h3">Nuovi Arrivi</h3>
      <div class="row">
          <div class="col-md-3 col-sm-6">
              <div class="product-grid3">
                  <div class="product-image3">
                      <a href="#">
                          <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-1.jpg">
                          <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-2.jpg">
                      </a>
                      <ul class="social">
                          <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                          <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                      </ul>
                      <span class="product-new-label">New</span>
                  </div>
                  <div class="product-content">
                      <h3 class="title"><a href="#">Men's Blazer</a></h3>
                      <div class="price">
                          $63.50
                          <span>$75.00</span>
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
          <div class="col-md-3 col-sm-6">
              <div class="product-grid3">
                  <div class="product-image3">
                      <a href="#">
                          <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-3.jpg">
                          <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-4.jpg">
                      </a>
                      <ul class="social">
                          <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                          <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                      </ul>
                  </div>
                  <div class="product-content">
                      <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                      <div class="price">
                          $43.50
                      </div>
                      <ul class="rating">
                          <li class="fa fa-star"></li>
                          <li class="fa fa-star"></li>
                          <li class="fa fa-star"></li>
                          <li class="fa fa-star"></li>
                          <li class="fa fa-star"></li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-md-3 col-sm-6">
              <div class="product-grid3">
                  <div class="product-image3">
                      <a href="#">
                          <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-5.jpg">
                          <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-6.jpg">
                      </a>
                      <ul class="social">
                          <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                          <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                      </ul>
                      <span class="product-new-label">New</span>
                  </div>
                  <div class="product-content">
                      <h3 class="title"><a href="#">Men's Blazer</a></h3>
                      <div class="price">
                          $63.50
                          <span>$75.00</span>
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
          <div class="col-md-3 col-sm-6">
              <div class="product-grid3">
                  <div class="product-image3">
                      <a href="#">
                          <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-7.jpg">
                          <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-8.jpg">
                      </a>
                      <ul class="social">
                          <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                          <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                      </ul>
                      <span class="product-new-label">New</span>
                  </div>
                  <div class="product-content">
                      <h3 class="title"><a href="#">Men's Blazer</a></h3>
                      <div class="price">
                          $63.50
                          <span>$75.00</span>
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
      </div>
  </div>

      <div class="album py-5 bg-light">
        <div class="container">
            <h3 class="h3">Collezione</h3>
          <div class="row row-cols-1 row-cols-md-3">
              @foreach ($clothes as $cloth)
                  <div class="col mb-4">
                    <div class="card h-100">
                          <img src="{{ asset("images/$cloth->images_name")}}" class="card-img-top" alt="{{$cloth->name}}">
                      <div class="card-body">
                        <h5 class="card-title">{{$cloth->name}}</h5>
                        <p class="card-text text-justify">{{$cloth->description}}</p>
                        <p class="card-text">€ {{$cloth->price}}</p>
                      </div>
                    </div>
                  </div>
              @endforeach
          </div>
        </div>

  </div>
      </div>
    </main>
@endsection
