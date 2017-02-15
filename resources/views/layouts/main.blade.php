@include('partial.head')

@include('partial.navtop')

<div class="container-fluid homecontainer row">

<div class="sidebar-container-left col-lg-2 col-md-2">
	hello
</div>

<div class="sidebar-container-right col-lg-3 col-md-3 maincontainer pull-right">
	hello1
</div>

<div class="container col-lg-6 col-md-6 maincontainer">

@yield('content')

</div>

</div>


