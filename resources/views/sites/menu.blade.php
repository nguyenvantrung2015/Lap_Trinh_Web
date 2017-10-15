@extends('layouts.master_menu')
@section('style') 
@endsection
	{{ HTML::style('css/sites/bootstrap-responsive.min.css') }}
@section('content')
	<div class="nav-icon">      
		<a href="#" class="navicon"></a>
		<div class="toggle">
			<ul class="toggle-menu">
				<li><a  href="http://localhost:8000/">Home</a></li>
				<li><a  class="active" href="http://localhost:8000/menu">Menu</a></li>
				<li><a  href="blog.html">Blog</a></li>
				<li><a  href="events.html">Events</a></li>
				<li><a  href="contact.html">Contact</a></li>
				<li><a  href="typo.html">Login</a></li>
				<li><a  href="typo.html">Sign in</a></li>
				<li><a  href="typo.html">Log out</a></li>
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

