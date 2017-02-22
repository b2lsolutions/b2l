@extends('layouts.home')

@section('content')
<body>
	@include('partial.homenav')
<div class="container-fluid homepagejumbo">
    <div class="container jumbocontainer col-xs-12 col-sm-6 col-lg-8">
	<h1><strong>FIND YOUR <br>OPPORTUNITY</strong></h1>
    </div>
</div>

@stop
@section('script')

<script src="{!!url('/js/script.js')!!}"></script>


@stop
</body>
