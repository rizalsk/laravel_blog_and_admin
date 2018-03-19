
@extends ('theme::layouts.index')

@section('title', ' - '.$page->title)

@section('header')
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('storage/{{$page->image}}')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>{{ $page->title }}</h1>
            <span class="subheading">{{$page->sub_heading}}</span>
          </div>
        </div>
      </div>
    </div>
  </header>
@stop
    
@section('content')
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        {!!  $page->body !!}
    </div>
  </div>
@stop

    

    
