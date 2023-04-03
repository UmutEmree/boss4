@include('inc.header')

	@yield('content')

@if(!Route::is('home') )
@include('inc.footer')
@endif
