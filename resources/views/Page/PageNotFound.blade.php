@extends('Layout.Layouts')

@section('title', 'Page not found')@show

@section('content')
    <main>
        <section class="pagenotfound">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-md-6">
                        <h1 class="title">Page Not Found</h1>
                        <p class="found-desc">Sorry, the page you are looking for does not exist. Please check the URL or return to the homepage.</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <img src="/assets/img/Oops! 404 Error with a broken robot-rafiki.svg" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
    @parent
@show
