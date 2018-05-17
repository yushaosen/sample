@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">屌丝</p>
    <p>屌杠</p>
    <p>
      <a class="btn btn-lg btn-success" href="#" role="button">现在注册</a>
    </p>
    <p>
        <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role='button'>现在注册</a>
    </p>
  </div>
@stop
</html>