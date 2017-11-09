@extends('layouts.menu')
@section('style')
    {{ HTML::style('/css/sites/product_detail.css') }}
@endsection

@section('content')
    <div class="nastv-icon">
        <a href="#" class="navicon"></a>
        <div class="toggle">
            <ul class="toggle-menu">
                @if (Auth::guest())
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a class="active" href="{{route('menu')}}">Menu</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <h3>Hello {{Auth::user()->name}}</h3>
                    @if(Auth::user()->level == 1)
                        <li><a class="active" href="#">ADMIN</a></li>
                    @endif
                    <li><a class="active" href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('menu')}}">Menu</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="{{route('user.profile',Auth::user()->id)}}">Profile</a></li>
                    <li>
                        <a href="javascript:void(0)" id="logout-1">
                            Logout
                        </a>
                        {!! Form::open(['role'=>'form', 'route'=> 'logout', 'method'=>'POST', 'id'=>'logout-form']) !!}
                        {{ csrf_field() }}
                        {!! Form::close() !!}
                    </li>
                @endif
            </ul>
        </div>
    </div>
    @include('sections.menu.header')

    <div class="container">
        <div class="row">
            <div class="card">
                <div class="container-fliud">
                    <div class="wrapper">
                        <div class="preview col-md-7">
                            <div id='ninja-slider'>
                                <div>
                                    <div class="slider-inner">
                                        <ul>
                                            @foreach($prd_img as $pi)
                                                <li><a class="ns-img" href="{!! $pi->image !!}"></a></li>
                                            @endforeach
                                        </ul>
                                        <div class="fs-icon" title="Expand/Close"></div>
                                    </div>
                                    <div id="thumbnail-slider">
                                        <div class="inner">
                                            <ul>
                                                @foreach($prd_img as $pi)
                                                    <li>
                                                        <a class="thumb" href="{!! $pi->image !!}"></a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="details col-md-5">
                            <div class="row">
                                <h3 class="product-title">{!! $prd_detail->name !!}</h3>
                            </div>
                            <div class="row">
                                <div class="rating">
                                    <div class="stars">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <span class="review-no">41 reviews</span>
                                </div>
                            </div>
                            <div class="row">
                                <p class="product-description">{!! $prd_detail->description !!}</p>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <h4 class="price">current price: <span>{!! $prd_detail->price !!}</span><i class="fa fa-dollar"></i></h4>
                                </div>
                                <div class="col-md-5">
                                    <span>Avability :</span>
                                    <span style="color: red">In stock</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2" 
                                style="padding-left: -10px">
                                    <p>Quantity</p> 
                                </div>
                                <div class="col-md-1">
                                    <input type="number" class="quantity" name="number_product" min = "1" value="1">
                                </div>
                            </div>
                            <div class="row">
                                <p class="vote col-md-12"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
                            </div>
                            <div class="row">
                                <div class="action">
                                    <button class="add-to-cart btn btn-default" type="button">add to cart</button>
                                    <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product-other">
                <div class="row">
                    <hr>
                    <div class="product-other-title">
                        <h2>sản phẩm tương tự</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="product-other-content">
                        @foreach($prd_similar as $ps)
                            <div class="col-md-3 col-xs-2">
                                <a href="{{ route('product.detail', [ 'id' => $ps->id ]) }}">
                                    <img src="{!! $ps->avatar !!}">
                                    <h3>{!! $ps->name !!}</h3>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('sections.menu.footer')
@endsection

@section('script')
    {{ HTML::script('/js/sites/homepage.js') }}
    {{ HTML::script('/js/sites/product_detail.js') }}
@endsection

