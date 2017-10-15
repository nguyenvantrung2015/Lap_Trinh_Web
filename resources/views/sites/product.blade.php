@extends('layouts.master_menu')
@section('style')
@endsection

@section('content')
    <div class="nav-icon">
        <a href="#" class="navicon"></a>
        <div class="toggle">
            <ul class="toggle-menu">
                <li><a  href="index.html">Home</a></li>
                <li><a  class="active" href="menu.html">Menu</a></li>
                <li><a  href="blog.html">Blog</a></li>
                <li><a  href="events.html">Events</a></li>
                <li><a  href="contact.html">Contact</a></li>
                <li><a  href="typo.html">Login</a></li>
                <li><a  href="typo.html">Sign in</a></li>
            </ul>
        </div>
    </div>
    @include('sections.header_menu')
    @include('sections.product')
@endsection

@section('script')
    {{ HTML::script('js/sites/homepage.js') }}
@endsection

