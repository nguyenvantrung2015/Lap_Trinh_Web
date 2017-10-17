@extends('layouts.master_menu')
@section('style') 
@endsection
	{{ HTML::style('css/sites/bootstrap-responsive.min.css') }}
@section('content')
	<div class="nav-icon">      
		<a href="#" class="navicon"></a>
		<div class="toggle">
			<ul class="toggle-menu">
				@if (Auth::guest())
					<li><a class="active" href="{{route('home')}}">Home</a></li>
					<li><a href="{{route('menu')}}">Menu</a></li>
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
					<li><a href="#">Profile</a></li>
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
    @include('sections.header_menu')
    @include('sections.content_menu')
	@include('sections.footer_menu')
@endsection
	
@section('script')
	{{ HTML::script('js/sites/homepage.js') }} 
@endsection

