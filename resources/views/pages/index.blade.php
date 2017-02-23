@extends('layouts.home')

@section('content')
<body>
<div>
	@include('partial.homenav')
<div class="container-fluid homepagejumbo">
    <div class="container jumbocontainer col-xs-12 col-sm-6 col-lg-8">
	<span class="text-bold"><h1><strong><span class="homecontent"></span>FIND YOUR <br>OPPORTUNITY</strong></h1></span>
	<div>Hired matches outstanding people with the world's most innovative companies</div>
    </div>
</div>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-lg-8 homepagecontainer">
			WE ARE CONFIDENT OF ACHIEVING WHAT WE AIM FOR BECAUSE
“IN YOU WE TRUST”

		</div>
	</div>
</div>
</div>
@stop
@section('script')

<script src="{!!url('/js/script.js')!!}"></script>


@stop
</body>
