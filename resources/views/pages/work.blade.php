@extends('layouts.app')

@section('content')
    <section id="work">
        <h1>Work</h1>
        <p>Here are a couple of sites that I've worked on.</p>
        <div class="row">
            <div class="col-lg-6 mt-4">
                <h3>Arizona Federal Credit Union</h3>
                <p class="content">
                    I've worked on this website for quite some time. I've handled everything from ADA Compliance to various event/landing pages.
                </p>
                <div id="azfcu" class="col-sm-12 img-holder">
                    <a class="img-link" href="http://www.arizonafederal.org" target="_blank"></a>
                </div>
            </div>
            <div class="col-lg-6 mt-4">
                <h3>Rio Salado College</h3>
                <p class="content">
                    I used to be employed here and I've done everything from landing pages to the main slideshow on their site.
                </p>
                <div id="rio" class="col-sm-12 img-holder">
                    <a class="img-link" href="http://www.riosalado.edu/Pages/default.aspx" target="_blank"></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mt-4">
                <h3>Lake Havasu Concert Association</h3>
                <p class="content">
                    Here is a site I made for the Lake Havasu City Concert Association. I used a few plug-ins becasue I was on a time crunch and the client really wanted animations. I prefer hand-coding over plug-ins because it better demonstrates my skill, allows for more customization, is more efficient, and works better.
                </p>
                <div id="lhcca" class="col-sm-12 img-holder">
                    <a class="img-link" href="http://lhcca.com/" target="_blank"></a>
                </div>
            </div>
            <div class="col-lg-6 mt-4">
                <h3>SkillsUSA Nationals</h3>
                <p class="content">
                    I made this site at SkillsUSA Nationals with a partner of mine in 2012 and we won the gold medal. It features a JavaScript/CSS 3 transitions navigation bar, a great design, and a great looking form on the member resources page.
                </p>
                <div id="nat" class="col-sm-12 img-holder">
                    <a class="img-link" href="nationals/index.html" target="_blank"></a>
                </div>
            </div>
        </div>
    </section>
@endsection