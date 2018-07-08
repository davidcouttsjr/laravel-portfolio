@extends('layouts.app')

@section('content')
    <section>
        <h1>Work</h1>
        <p>Here are a couple of sites that I've worked on.</p>
        <div class="row">
            <div class="col-sm-6">
                <h3>Arizona Federal Credit Union</h3>
                <p class="content">
                    I've worked on this website for quite some time. I've handled everything from ADA Compliance to various event/landing pages.
                </p>
                <a href="http://lhcca.com/" target="_blank"> 
                    <img src="img/arizonafederal.jpg" alt="Lake Havasu Concert Association Web Site" class="col-sm-10 col-sm-offset-1 col-xs-12">
                </a>
            </div>
            <div class="col-sm-6">
                <h3>Rio Salado College</h3>
                <p class="content">
                    I used to be employed here and I've done everything from landing pages to the main slideshow on their site.
                </p>
                <a href="http://www.riosalado.edu/Pages/default.aspx" target="_blank"> 
                    <img src="img/riosalado.jpg" alt="Skills USA Nationals 1st place Web Site" class="col-sm-10 col-sm-offset-1 col-xs-12" img-responsive>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h3>Lake Havasu Concert Association</h3>
                <p class="content">
                    Here is a site I made for the Lake Havasu City Concert Association. I used a few plug-ins becasue I was on a time crunch and the client really wanted animations. I prefer hand-coding over plug-ins because it better demonstrates my skill, allows for more customization, is more efficient, and works better.
                </p>
                <a href="http://lhcca.com/" target="_blank"> 
                    <img src="img/lhcca.png" alt="Lake Havasu Concert Association Web Site" class="col-sm-10 col-sm-offset-1 col-xs-12">
                </a>
            </div>
            <div class="col-sm-6">
                <h3>SkillsUSA Nationals</h3>
                <p class="content">
                    I made this site at SkillsUSA Nationals with a partner of mine in 2012 and we won the gold medal. It features a JavaScript/CSS 3 transitions navigation bar, a great design, and a great looking form on the member resources page.
                </p>
                <a href="nationals/index.html" target="_blank"> 
                    <img src="img/nationals.png" alt="Skills USA Nationals 1st place Web Site" class="col-sm-10 col-sm-offset-1 col-xs-12" img-responsive>
                </a>
            </div>
        </div>
    </section>
@endsection