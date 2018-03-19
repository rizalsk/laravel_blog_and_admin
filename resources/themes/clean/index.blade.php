@extends ('theme::layouts.index')

@section('header')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Thoughts on Code</h1>
                        <span class="subheading">Short and Sweet</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop

@section('content')
<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        @foreach($posts as $post)
            @include('theme::partials.post',[ 'post' => $post ])
        @endforeach
        
        <!-- Pager -->

        {{$posts->links("pagination::bootstrap-4")}}
        
    </div>
@stop