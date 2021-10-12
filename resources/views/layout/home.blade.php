@extends('layout.template')

@section('content')
<div class="content">
    <div class="pull-center">
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" href="#" class="btn btn-default btn-flat">Log out</button>
        </form>
    </div>
  </div>

@endsection
