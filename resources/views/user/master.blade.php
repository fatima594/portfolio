@section('header')
    @include('user.header')
@show


<!-- about -->
@section('about')
    @include('user.about')
@show
<!-- ./about -->

<!-- experience  -->
@section('experience')
    @include('user.skills')
@show
<!-- ./experience -->

<!-- projects -->
@section('projects')
    @include('user.projects')
@show
<!-- ./projects -->

<!-- contact -->
@section('contact')
    @include('user.contact')
@show
+
<!-- ./contact -->

<!--DEMO01-->
@section('modal')
    @include('user.modal')
@show
{{--footer--}}
@section('footer')
    @include('user.footer')
@show
