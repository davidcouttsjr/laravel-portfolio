@extends('layouts.app')

@section('content')
    <h1 id="home">
        Web Designer, Developer, and Enthusiast based in Phoenix, Arizona.<br>
        Highly experienced in designing and developing custom Laravel and Drupal websites.
    </h1>
    <div class="card card-body bg-light">
        <div class="row">
            <div class="col-lg-8">
                <img class="img-fluid" src="img/mobile-friendly.png">
            </div>
            <div class="col-lg-4">
                <h2 class="mt-5">
                    Fully responsive,<br class="d-none d-lg">
                    custom designed,<br class="d-none d-lg">
                    fantastically simple<br class="d-none d-lg">
                    websites
                </h2>
                <a class="mt-4 btn btn-primary col-sm-7 offset-sm-1" href="/services">Learn More</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 mt-4">
            <div class="card card-body bg-light">
                <h3>Design and Development</h3>
                <p>If you want a website or a completely new website, this is service for you.</p>
                <ul class="normalList">
                    <li>Brand new website</li>
                    <li>Great SEO</li>
                    <li>Security-minded</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 mt-4">
            <div class="card card-body bg-light">
                <h3>Search Engine Optimization</h3>
                <p>This is a great package for anyone struggling with getting people on their website.</p>
                <ul class="normalList">
                    <li>Content Optimization</li>
                    <li>Google Analytics</li>
                    <li>Crazy Egg heat maps</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 mt-4">
            <div class="card card-body bg-light">
                <h3>
                    Website Refresh
                </h3>
                <p>If you already have a website but you need some updates to graphics or content.</p>
                <ul class="normalList">
                    <li>Logo design</li>
                    <li>Content refresh</li>
                    <li>Added functionality</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
