@extends('layouts.scaffold')
@section('content')
<div id="main-slide" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#main-slide" data-slide-to="0" class="active"></li>
<li data-target="#main-slide" data-slide-to="1"></li>
<li data-target="#main-slide" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img class="d-block w-100" src="{{asset('assets/img/slider/slide1.jpg')}}" alt="First slide">
<div class="carousel-caption d-md-block">
<h4 class="fadeInDown wow" data-wow-delay=".9s">Explore Amazing Houses</h4>
<h1 class="wow fadeInDown heading" data-wow-delay=".4s">Get Started with BrittVille</h1>
<p class="fadeInUp wow" data-wow-delay=".6s">Bootstrap HTML5 Real Estate Website Template</p>
<a href="#" class="fadeInLeft wow btn btn-common" data-wow-delay=".6s">Download Now</a>
<a href="#" class="fadeInRight wow btn btn-border" data-wow-delay=".6s">Learn More</a>
</div>
</div>
<div class="carousel-item">
<img class="d-block w-100" src="{{asset('assets/img/slider/slide2.jpg')}}" alt="Second slide">
<div class="carousel-caption d-md-block">
<h4 class="fadeInDown wow" data-wow-delay=".9s">Search, Select and Go!</h4>
<h1 class="wow bounceIn heading" data-wow-delay=".7s">Best Apartments for Sale</h1>
<p class="fadeInUp wow" data-wow-delay=".6s">Clean and Refreshing Design for Your Next Project</p>
<a href="#" class="fadeInUp wow btn btn-border" data-wow-delay=".8s">Learn More</a>
</div>
</div>
<div class="carousel-item">
<img class="d-block w-100" src="{{asset('assets/img/slider/slide3.jpg')}}" alt="Third slide">
<div class="carousel-caption d-md-block">
<h4 class="fadeInDown wow" data-wow-delay=".9s">Find Your Dream Home!</h4>
<h1 class="wow fadeInUp heading" data-wow-delay=".6s">Best Apartments to Rent</h1>
<p class="fadeInUp wow" data-wow-delay=".6s">Comes With All Essential Pages and Features</p>
<a href="#" class="fadeInUp wow btn btn-common" data-wow-delay=".8s">View Details</a>
</div>
</div>
</div>
<a class="carousel-control-prev" href="#main-slide" role="button" data-slide="prev">
<span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#main-slide" role="button" data-slide="next">
<span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
<span class="sr-only">Next</span>
</a>
</div>


<div class="search-container">
<div class="container">
<div class="content bg-search">
<form>
<div class="row">
<div class="col-lg-12 col-md-12 col-xs-12">
<div class="form-group">
<input class="form-control" type="text" placeholder="Enter Property Name, Keywords or Adress">
</div>
</div>
<div class="col-lg-3 col-md-6 col-xs-12">
<div class="search-category-container">
<label class="styled-select">
<select class="classic">
<option>All Actions</option>
<option>Rentals (12)</option>
<option>Sales (17)</option>
</select>
</label>
</div>
</div>
<div class="col-lg-3 col-md-6 col-xs-12">
<div class="search-category-container">
<label class="styled-select">
<select class="classic">
<option>All Types</option>
<option>Apartments (3)</option>
<option>Houses (2)</option>
<option>Condos (1)</option>
<option>Industrial (2)</option>
<option>Land (3)</option>
<option>Offices (1)</option>
<option>Retail (2)</option>
<option>Villas (1)</option>
</select>
</label>
</div>
</div>
<div class="col-lg-3 col-md-6 col-xs-12">
<div class="search-category-container">
<label class="styled-select">
<select class="classic">
<option>All Cities</option>
<option>New York</option>
<option>California</option>
<option>Washington</option>
<option>Chicago</option>
<option>Phoenix</option>
<option>Birmingham</option>
</select>
</label>
</div>
</div>
<div class="col-lg-3 col-md-6 col-xs-12">
<div class="search-category-container">
<label class="styled-select">
<select class="classic">
<option>Bedrooms</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
</select>
</label>
</div>
</div>
</div>
</form>
<div class="row range-slider">
<div class="col-lg-3 col-md-12 col-xs-12">
<div class="search-category-container">
<label class="styled-select">
<select class="classic">
<option>All Area</option>
<option>San Jose</option>
<option>Salt Lake City</option>
<option>Las Vegas</option>
<option>Boston</option>
<option>Tampa</option>
<option>Orlando</option>
</select>
</label>
</div>
</div>
<div class="col-lg-6 col-md-12 col-xs-12">

<input type="text" id="range" value="" name="range">
</div>
<div class="col-lg-3 col-md-12 col-xs-12">
<div class="text-right btn-section">
<button type="button" class="btn btn-common"><i class="lni-search"></i> Search</button>
</div>
</div>
</div>
</div>
</div>
</div>


<section class="property section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-title-header text-center">
<p>View All</p>
<h2 class="section-title">Popular Listings</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-6 col-xs-12">
<div class="property-main">
<div class="property-wrap">
<div class="property-item">
<div class="item-thumb">
<a class="hover-effect" href="property.html">
<img class="img-fluid" src="{{asset('assets/img/property/house-1.jpg')}}" alt="">
</a>
<div class="label-inner">
<span class="label-status label bg-red">For Sale</span>
</div>
</div>
<div class="item-body">
<h3 class="property-title"><a href="property.html">Amazing oceanfront apartment</a></h3>
<div class="adderess"><i class="lni-map-marker"></i> Drive Street, Los Angeles, US</div>
<div class="pricin-list">
<div class="property-price">
<span>$1,500</span>
</div>
<p><span>4 bds</span> . <span>4 ba</span> . <span>2500 Sqft</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12">
<div class="property-main">
<div class="property-wrap">
<div class="property-item">
<div class="item-thumb">
<a class="hover-effect" href="property.html">
<img class="img-fluid" src="{{asset('assets/img/property/house-2.jpg')}}" alt="">
</a>
<div class="label-inner">
<span class="label-status label">For Rent</span>
</div>
</div>
<div class="item-body">
<h3 class="property-title"><a href="property.html">Family Condo</a></h3>
<div class="adderess"><i class="lni-map-marker"></i> Louis, Missouri, US</div>
<div class="pricin-list">
<div class="property-price">
<span>$27,00</span>
</div>
<p><span>6 bds</span> . <span>8 ba</span> . <span>2600 Sqft</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12">
<div class="property-main">
<div class="property-wrap">
<div class="property-item">
<div class="item-thumb">
<a class="hover-effect" href="property.html">
<img class="img-fluid" src="{{asset('assets/img/property/house-3.jpg')}}" alt="">
</a>
<div class="label-inner">
<span class="label-status label bg-yellow">New</span>
</div>
</div>
<div class="item-body">
<h3 class="property-title"><a href="property.html">Guaranteed modern home</a></h3>
<div class="adderess"><i class="lni-map-marker"></i> Avenue C, New York, US</div>
<div class="pricin-list">
<div class="property-price">
<span>$1,750</span>
</div>
<p><span>8 bds</span> . <span>8 ba</span> . <span>3000 Sqft</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12">
<div class="property-main">
<div class="property-wrap">
<div class="property-item">
<div class="item-thumb">
<a class="hover-effect" href="property.html">
<img class="img-fluid" src="{{asset('assets/img/property/house-4.jpg')}}" alt="">
</a>
<div class="label-inner">
<span class="label-status label">For Rent</span>
</div>
</div>
<div class="item-body">
<h3 class="property-title"><a href="property.html">Family home for sale</a></h3>
<div class="adderess"><i class="lni-map-marker"></i> Sacramento, Chicago, US</div>
<div class="pricin-list">
<div class="property-price">
<span>$1,400</span>
</div>
<p><span>2 bds</span> . <span>2 ba</span> . <span>2200 Sqft</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12">
<div class="property-main">
<div class="property-wrap">
<div class="property-item">
<div class="item-thumb">
<a class="hover-effect" href="property.html">
<img class="img-fluid" src="{{asset('assets/img/property/house-5.jpg')}}" alt="">
</a>
<div class="label-inner">
<span class="label-status label bg-yellow">New</span>
</div>
</div>
<div class="item-body">
<h3 class="property-title"><a href="property.html">Amazing oceanfront apartment</a></h3>
<div class="adderess"><i class="lni-map-marker"></i> 53 W 88th St, Dallas, US</div>
<div class="pricin-list">
<div class="property-price">
<span>$1,750</span>
</div>
<p><span>6 bds</span> . <span>6 ba</span> . <span>2700 Sqft</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12">
<div class="property-main">
<div class="property-wrap">
<div class="property-item">
<div class="item-thumb">
<a class="hover-effect" href="property.html">
<img class="img-fluid" src="{{asset('assets/img/property/house-6.jpg')}}" alt="">
</a>
<div class="label-inner">
<span class="label-status label bg-red">For Sale</span>
</div>
</div>
<div class="item-body">
<h3 class="property-title"><a href="property.html">Luxury home for sale</a></h3>
<div class="adderess"><i class="lni-map-marker"></i> 365 Webber Street, Washington</div>
<div class="pricin-list">
<div class="property-price">
<span>$1,800</span>
</div>
<p><span>5 bds</span> . <span>7 ba</span> . <span>2800 Sqft</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-12">
<div class="text-center">
<a href="listing.html" class="btn btn-common">Browse All</a>
</div>
</div>
</div>
</div>
</section>


<section id="team" class="section-padding text-center">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-title-header text-center">
<p>Meet</p>
<h2 class="section-title">Our Agents</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6 col-md-6 col-lg-3">

<div class="team-item text-center">
<div class="team-img">
<img class="img-fluid" src="{{asset('assets/img/team/team-01.jpg')}}" alt="">
<div class="team-overlay">
<div class="overlay-social-icon text-center">
<ul class="social-icon-team">
<li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="info-text">
<h3><a href="#">David Givens</a></h3>
<p>Real Estate Agent</p>
</div>
</div>

</div>
<div class="col-sm-6 col-md-6 col-lg-3">

<div class="team-item text-center">
<div class="team-img">
<img class="img-fluid" src="{{asset('assets/img/team/team-02.jpg')}}" alt="">
<div class="team-overlay">
<div class="overlay-social-icon text-center">
<ul class="social-icon-team">
<li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="info-text">
<h3><a href="#">John Doe</a></h3>
<p>Real Estate Agent</p>
</div>
</div>

</div>
<div class="col-sm-6 col-md-6 col-lg-3">

<div class="team-item text-center">
<div class="team-img">
<img class="img-fluid" src="{{asset('assets/img/team/team-03.jpg')}}" alt="">
<div class="team-overlay">
<div class="overlay-social-icon text-center">
<ul class="social-icon-team">
<li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="info-text">
<h3><a href="#">Darrell S.Allen</a></h3>
<p>Real Estate Agent</p>
</div>
</div>

</div>
<div class="col-sm-6 col-md-6 col-lg-3">

<div class="team-item text-center">
<div class="team-img">
<img class="img-fluid" src="{{asset('assets/img/team/team-04.jpg')}}" alt="">
<div class="team-overlay">
<div class="overlay-social-icon text-center">
<ul class="social-icon-team">
<li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="info-text">
<h3><a href="#">Justyna Michallek</a></h3>
<p>Real Estate Agent</p>
</div>
</div>

</div>
</div>
</div>
</section>


<section class="services section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-title-header text-center">
<p>Discover</p>
<h2 class="section-title">Common Features</h2>
</div>
</div>
</div>
<div class="row">

<div class="col-md-6 col-lg-4 col-xs-12">
<div class="services-item wow fadeInRight" data-wow-delay="0.2s">
<div class="icon">
<i class="lni-apartment"></i>
</div>
<div class="services-content">
<h3><a href="#">Full Furnished</a></h3>
<p>Lorem must explain to you how all this mistaolt dete denouncing pleasure and pralsing plan wasnad</p>
</div>
</div>
</div>

<div class="col-md-6 col-lg-4 col-xs-12">
<div class="services-item wow fadeInRight" data-wow-delay="0.4s">
<div class="icon">
<i class="lni-crown"></i>
</div>
<div class="services-content">
<h3><a href="#">Royal Touch Paint</a></h3>
<p>Lorem must explain to you how all this mistaolt dete denouncing pleasure and pralsing plan wasnad</p>
</div>
</div>
</div>

<div class="col-md-6 col-lg-4 col-xs-12">
<div class="services-item wow fadeInRight" data-wow-delay="0.6s">
<div class="icon">
<i class="lni-layers"></i>
</div>
<div class="services-content">
<h3><a href="#">Letest Interior Design</a></h3>
<p>Lorem must explain to you how all this mistaolt dete denouncing pleasure and pralsing plan wasnad</p>
</div>
</div>
</div>

<div class="col-md-6 col-lg-4 col-xs-12">
<div class="services-item wow fadeInRight" data-wow-delay="0.8s">
<div class="icon">
<i class="lni-bolt-alt"></i>
</div>
<div class="services-content">
<h3><a href="#">Non Stop Security</a></h3>
<p>Lorem must explain to you how all this mistaolt dete denouncing pleasure and pralsing plan wasnad</p>
</div>
</div>
</div>

<div class="col-md-6 col-lg-4 col-xs-12">
<div class="services-item wow fadeInRight" data-wow-delay="1s">
<div class="icon">
<i class="lni-leaf"></i>
</div>
<div class="services-content">
<h3><a href="#">Living Inside a Nature</a></h3>
<p>Lorem must explain to you how all this mistaolt dete denouncing pleasure and pralsing plan wasnad</p>
</div>
</div>
</div>

<div class="col-md-6 col-lg-4 col-xs-12">
<div class="services-item wow fadeInRight" data-wow-delay="1.2s">
<div class="icon">
<i class="lni-medall"></i>
</div>
<div class="services-content">
<h3><a href="#">Luxurious Fittings</a></h3>
<p>Lorem must explain to you how all this mistaolt dete denouncing pleasure and pralsing plan wasnad</p>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="latest-property section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-title-header text-center">
<p>Explore</p>
<h2 class="section-title">Latest Listings</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12 wow fadeIn" data-wow-delay="0.8s">
<div id="latest-property" class="owl-carousel">
<div class="item">
<div class="property-main">
<div class="property-wrap">
<div class="property-item">
<div class="item-thumb">
<a class="hover-effect" href="property.html">
<img class="img-fluid" src="{{asset('assets/img/property/house-1.jpg')}}" alt="">
</a>
<div class="label-inner">
<span class="label-status label bg-red">For Sale</span>
</div>
</div>
<div class="item-body">
<h3 class="property-title"><a href="property.html">Amazing oceanfront apartment</a></h3>
<div class="adderess"><i class="lni-map-marker"></i> 96 Bay 10th St, Brooklyn, NY 11228</div>
<div class="pricin-list">
<div class="property-price">
<span>$1,600</span>
</div>
<p><span>4 bds</span> . <span>4 ba</span> . <span>2500 Sqft</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="property-main">
<div class="property-wrap">
<div class="property-item">
<div class="item-thumb">
<a class="hover-effect" href="property.html">
<img class="img-fluid" src="{{asset('assets/img/property/house-2.jpg')}}" alt="">
</a>
<div class="label-inner">
<span class="label-status label">For Rent</span>
</div>
</div>
<div class="item-body">
<h3 class="property-title"><a href="property.html">Family Condo</a></h3>
<div class="adderess"><i class="lni-map-marker"></i> Louis, Missouri, US</div>
<div class="pricin-list">
<div class="property-price">
<span>$1,700</span>
</div>
<p><span>8 bds</span> . <span>8 ba</span> . <span>2900 Sqft</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="property-main">
<div class="property-wrap">
<div class="property-item">
<div class="item-thumb">
<a class="hover-effect" href="property.html">
<img class="img-fluid" src="{{asset('assets/img/property/house-3.jpg')}}" alt="">
</a>
 <div class="label-inner">
<span class="label-status label bg-yellow">New</span>
</div>
</div>
<div class="item-body">
<h3 class="property-title"><a href="property.html">Guaranteed modern home</a></h3>
<div class="adderess"><i class="lni-map-marker"></i> Avenue C, New York, US</div>
<div class="pricin-list">
<div class="property-price">
<span>$1,750</span>
</div>
<p><span>5 bds</span> . <span>6 ba</span> . <span>2700 Sqft</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="property-main">
<div class="property-wrap">
<div class="property-item">
<div class="item-thumb">
<a class="hover-effect" href="property.html">
<img class="img-fluid" src="{{asset('assets/img/property/house-4.jpg')}}" alt="">
</a>
<div class="label-inner">
<span class="label-status label">For Rent</span>
</div>
</div>
<div class="item-body">
<h3 class="property-title"><a href="property.html">Family home for sale</a></h3>
<div class="adderess"><i class="lni-map-marker"></i> Sacramento, Chicago, US</div>
<div class="pricin-list">
<div class="property-price">
<span>$1,400</span>
</div>
<p><span>2 bds</span> . <span>2 ba</span> . <span>2200 Sqft</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="property-main">
<div class="property-wrap">
<div class="property-item">
<div class="item-thumb">
<a class="hover-effect" href="property.html">
<img class="img-fluid" src="{{asset('assets/img/property/house-5.jpg')}}" alt="">
</a>
<div class="label-inner">
<span class="label-status label bg-yellow">New</span>
</div>
</div>
<div class="item-body">
<h3 class="property-title"><a href="property.html">Amazing oceanfront apartment</a></h3>
<div class="adderess"><i class="lni-map-marker"></i> 53 W 88th St, Dallas, US</div>
<div class="pricin-list">
<div class="property-price">
<span>$1,750</span>
</div>
<p><span>6 bds</span> . <span>6 ba</span> . <span>2700 Sqft</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="property-main">
<div class="property-wrap">
<div class="property-item">
<div class="item-thumb">
<a class="hover-effect" href="property.html">
<img class="img-fluid" src="{{asset('assets/img/property/house-6.jpg')}}" alt="">
</a>
<div class="label-inner">
<span class="label-status label bg-red">For Sale</span>
</div>
</div>
<div class="item-body">
<h3 class="property-title"><a href="property.html">Luxury home for sale</a></h3>
<div class="adderess"><i class="lni-map-marker"></i> 365 Webber Street, Washington</div>
<div class="pricin-list">
<div class="property-price">
<span>$1,800</span>
</div>
<p><span>5 bds</span> . <span>7 ba</span> . <span>2800 Sqft</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="featured-bg section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-title-header text-center">
<p>Learn More</p>
<h2 class="section-title">About Us</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12 col-lg-6 col-xs-12">
<img class="img-fluid" src="{{asset('assets/img/about/img-2.jpg')}}" alt="">
</div>
<div class="col-md-12 col-lg-6 col-xs-12">
<h2 class="intro-title">Who We Are</h2>
<h3 class="title-sub">Best and Award Winning <br>Real Estate Business in USA 2019</h3>
<p class="intro-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit nostrum, doloremque quaerat sit tempora eius est reiciendis accusamus magnam quae. Explicabo dolore officia, iure a ullam aliquam nemo excepturi, repellat. uod ut delectus ad tempora.
</p>
<div class="row">
<div class="col-lg-6 col-md-12 col-xs-12">
<div class="featured-item">
<div class="icon">
<i class="lni-medall"></i>
</div>
<h3><a href="#">Cretified Company</a></h3>
<div class="featured-content">
<p>We'll generate a sitemap for your site, submit it to search engine is and track crawler access.</p>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12 col-xs-12">
<div class="featured-item">
<div class="icon">
<i class="lni-thumbs-up"></i>
</div>
<h3><a href="#">Highly experienced</a></h3>
<div class="featured-content">
<p>We'll generate a sitemap for your site, submit it to search engine is and track crawler access.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="counter-section section-padding" data-stellar-background-ratio="0.5">
<div class="container">
<div class="row">

<div class="col-lg-3 col-md-6 col-xs-12 work-counter-widget text-center">
<div class="counter">
<div class="icon"><i class="lni-users"></i></div>
<div class="counterUp">6252</div>
<p>Happy Customers</p>
</div>
</div>

<div class="col-lg-3 col-md-6 col-xs-12 work-counter-widget text-center">
<div class="counter">
<div class="icon"><i class="lni-apartment"></i></div>
<div class="counterUp">3091</div>
<p>Completed Projects</p>
</div>
</div>

<div class="col-lg-3 col-md-6 col-xs-12 work-counter-widget text-center">
<div class="counter">
<div class="icon"><i class="lni-key"></i></div>
<div class="counterUp">1200</div>
<p>Property Sold</p>
</div>
</div>

<div class="col-lg-3 col-md-6 col-xs-12 work-counter-widget text-center">
<div class="counter">
<div class="icon"><i class="lni-cup"></i></div>
<div class="counterUp">79</div>
<p>Awards Win</p>
</div>
</div>
</div>
</div>
</section>


<section id="portfolio-section" class="section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-title-header text-center">
<p>Discover</p>
<h2 class="section-title">Our Gallery</h2>
</div>
</div>
<div class="col-12">

<div class="controls text-center">
<a class="filter active btn btn-common" data-filter="all">
All
</a>
<a class="filter btn btn-common" data-filter=".design">
Living Room
</a>
<a class="filter btn btn-common" data-filter=".development">
Bedroom
</a>
<a class="filter btn btn-common" data-filter=".print">
Kitchen
</a>
</div>

</div>
</div>
<div id="portfolio" class="row wow fadeInDown">
<div class="col-md-6 col-sm-6 col-lg-4 mix development print">
<div class="portfolio-box">
<div class="img-thumb">
<img class="img-fluid" src="{{asset('assets/img/gallery/img-1.jpg')}}" alt="">
</div>
<div class="overlay-box text-center">
<a class="lightbox" href="{{asset('assets/img/gallery/img-1.jpg')}}">
<i class="lni-zoom-in"></i>
</a>
<h3>Project Title</h3>
</div>
</div>
</div>
<div class="ccol-md-6 col-sm-6 col-lg-4 mix design print">
<div class="portfolio-box">
<div class="img-thumb">
<img class="img-fluid" src="{{asset('assets/img/gallery/img-2.jpg')}}" alt="">
</div>
<div class="overlay-box text-center">
<a class="lightbox" href="{{asset('assets/img/gallery/img-2.jpg')}}">
<i class="lni-zoom-in"></i>
</a>
<h3>Project Title</h3>
</div>
</div>
</div>
<div class="ccol-md-6 col-sm-6 col-lg-4 mix development">
<div class="portfolio-box">
<div class="img-thumb">
<img class="img-fluid" src="{{asset('assets/img/gallery/img-3.jpg')}}" alt="">
</div>
<div class="overlay-box text-center">
<a class="lightbox" href="{{asset('assets/img/gallery/img-3.jpg')}}">
<i class="lni-zoom-in"></i>
</a>
<h3>Project Title</h3>
</div>
</div>
</div>
<div class="ccol-md-6 col-sm-6 col-lg-4 mix development design">
<div class="portfolio-box">
<div class="img-thumb">
<img class="img-fluid" src="{{asset('assets/img/gallery/img-4.jpg')}}" alt="">
</div>
<div class="overlay-box text-center">
<a class="lightbox" href="{{asset('assets/img/gallery/img-4.jpg')}}">
<i class="lni-zoom-in"></i>
</a>
<h3>Project Title</h3>
</div>
</div>
</div>
<div class="ccol-md-6 col-sm-6 col-lg-4 mix development">
<div class="portfolio-box">
<div class="img-thumb">
<img class="img-fluid" src="{{asset('assets/img/gallery/img-5.jpg')}}" alt="">
</div>
<div class="overlay-box text-center">
<a class="lightbox" href="{{asset('assets/img/gallery/img-5.jpg')}}">
<i class="lni-zoom-in"></i>
</a>
<h3>Project Title</h3>
</div>
</div>
</div>
<div class="ccol-md-6 col-sm-6 col-lg-4 mix print design">
<div class="portfolio-box">
<div class="img-thumb">
<img class="img-fluid" src="{{asset('assets/img/gallery/img-6.jpg')}}" alt="">
</div>
<div class="overlay-box text-center">
<a class="lightbox" href="{{asset('assets/img/gallery/img-6.jpg')}}">
<i class="lni-zoom-in"></i>
</a>
<h3>Project Title</h3>
</div>
</div>
</div>
</div>
</div>
</section>


<section id="clients-logo" class="section-padding">
<div class="container">
<div class="row">
<div class="col-lg-2 col-md-4 col-xs-12">
<div class="client-logo">
<a href="#"><img class="img-fluid" src="{{asset('assets/img/clients/img1.png')}}" alt=""></a>
</div>
</div>
<div class="col-lg-2 col-md-4 col-xs-12">
<div class="client-logo">
<a href="#"><img class="img-fluid" src="{{asset('assets/img/clients/img2.png')}}" alt=""></a>
</div>
</div>
<div class="col-lg-2 col-md-4 col-xs-12">
<div class="client-logo">
<a href="#"><img class="img-fluid" src="{{asset('assets/img/clients/img3.png')}}" alt=""></a>
</div>
</div>
<div class="col-lg-2 col-md-4 col-xs-12">
<div class="client-logo">
<a href="#"><img class="img-fluid" src="{{asset('assets/img/clients/img4.png')}}" alt=""></a>
</div>
</div>
<div class="col-lg-2 col-md-4 col-xs-12">
<div class="client-logo">
<a href="#"><img class="img-fluid" src="{{asset('assets/img/clients/img5.png')}}" alt=""></a>
</div>
</div>
<div class="col-lg-2 col-md-4 col-xs-12">
<div class="client-logo">
<a href="#"><img class="img-fluid" src="{{asset('assets/img/clients/img6.png')}}" alt=""></a>
</div>
</div>
</div>
</div>
</section>


<section class="pricing section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-title-header text-center">
<p>Our</p>
<h2 class="section-title">Pricing Plans</h2>
</div>
</div>
</div>
<div class="row">

<div class="col-lg-4 col-md-6 col-xs-12">
<div class="pricing-table text-center">
<div class="table-header">
<h3>
Personal
</h3>
</div>
<div class="plan">
<h3 class="price">
$99
</h3>
<p class="period">
NO DISCOUNT ON RENEWAL
</p>
</div>
<div class="plan-info">
<p>
<strong><i class="lni-check-box"></i> Ad Visibility: 3 Months</strong>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.
</p>
<p>
<strong><i class="lni-check-box"></i> Number of Ads: 15</strong>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.
</p>
<p>
<strong><i class="lni-check-box"></i> Featured Ads: 5</strong>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.
</p>
<div class="button-area">
 <a href="#" class="btn btn-common btn-lg">
Get Started Now
</a>
</div>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6 col-xs-12">
<div class="pricing-table pricing-active text-center">
<div class="table-header">
<h3>
Business
</h3>
</div>
<div class="plan">
<h3 class="price">
$199
</h3>
<p class="period">
10% Discount on renewal
</p>
</div>
<div class="plan-info">
<p>
<strong><i class="lni-check-box"></i> Ad Visibility: 5 Months</strong>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.
</p>
<p>
<strong><i class="lni-check-box"></i> Number of Ads: 50</strong>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.
</p>
<p>
<strong><i class="lni-check-box"></i> Featured Ads: 10</strong>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.
</p>
<div class="button-area">
<a href="#" class="btn btn-common btn-lg">
Get Started Now
</a>
</div>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6 col-xs-12">
<div class="pricing-table text-center">
<div class="table-header">
<h3>
Ultimate
</h3>
</div>
<div class="plan">
<h3 class="price">
$999
</h3>
<p class="period">
20% Discount on renewal
</p>
</div>
<div class="plan-info">
<p>
<strong><i class="lni-check-box"></i> Ad Visibility: 12 Months</strong>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.
</p>
<p>
<strong><i class="lni-check-box"></i> Number of Ads: 100</strong>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.
</p>
<p>
<strong><i class="lni-check-box"></i> Featured Ads: 30</strong>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.
</p>
<div class="button-area">
<a href="#" class="btn btn-common btn-lg">
Get Started Now
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="testimonial section-padding">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div id="testimonials" class="owl-carousel">
<div class="item">
<div class="testimonial-item">
<div class="content">
<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
</div>
</div>
<div class="client-info">
<div class="img-thumb">
<img src="{{asset('assets/img/testimonial/img1.png')}}" alt="">
</div>
<div class="info-text">
<h2><a href="#">Michael Papirov</a></h2>
<h4><a href="#">Customer</a></h4>
</div>
</div>
</div>
<div class="item">
<div class="testimonial-item">
<div class="content">
<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
</div>
</div>
<div class="client-info">
<div class="img-thumb">
<img src="{{asset('assets/img/testimonial/img2.png')}}" alt="">
</div>
<div class="info-text">
<h2><a href="#">Josh Rossi</a></h2>
<h4><a href="#">Manager</a></h4>
</div>
</div>
</div>
<div class="item">
<div class="testimonial-item">
<div class="content">
<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
</div>
</div>
<div class="client-info">
<div class="img-thumb">
<img src="{{asset('assets/img/testimonial/img3.png')}}" alt="">
</div>
<div class="info-text">
<h2><a href="#">Daniel Greem</a></h2>
<h4><a href="#">Customer</a></h4>
</div>
</div>
</div>
<div class="item">
<div class="testimonial-item">
<div class="content">
<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
</div>
</div>
<div class="client-info">
<div class="img-thumb">
<img src="{{asset('assets/img/testimonial/img4.png')}}" alt="">
</div>
<div class="info-text">
<h2><a href="#">John Doe</a></h2>
<h4><a href="#">Manager</a></h4>
</div>
</div>
</div>
<div class="item">
<div class="testimonial-item">
<div class="content">
<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
</div>
</div>
<div class="client-info">
<div class="img-thumb">
<img src="{{asset('assets/img/testimonial/img5.png')}}" alt="">
</div>
<div class="info-text">
<h2><a href="#">Michael Papirov</a></h2>
<h4><a href="#">Customer</a></h4>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section id="blog" class="section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-title-header text-center">
<p>From</p>
<h2 class="section-title">The Blog</h2>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12">
<div class="blog-item text-center">
<div class="blog-image">
<a href="#">
<img class="img-fluid" src="{{asset('assets/img/blog/img1.jpg')}}" alt="">
</a>
</div>
<div class="date">12 April, 2018</div>
<div class="descr">
<h3 class="title">
<a href="single-blog.html">
Visual Design Concept
</a>
</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias laudantium fugiat, eius sint.</p>
</div>
<div class="blog-footer hide-on-list">
<div class="float-left">
<p class="prop-user"><a href="#"><i class="lni-user"></i> Admin</a></p>
</div>
<div class="float-right">
<span><i class="lni-heart"></i> 350</span>
<span><i class="lni-comments"></i> 30</span>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12">
<div class="blog-item text-center">
<div class="blog-image">
<a href="#">
<img class="img-fluid" src="{{asset('assets/img/blog/img2.jpg')}}" alt="">
</a>
</div>
<div class="date">12 April, 2018</div>
<div class="descr">
<h3 class="title">
<a href="single-blog.html">
Real Estate Feswtival - 2018
</a>
</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias laudantium fugiat, eius sint.</p>
</div>
<div class="blog-footer hide-on-list">
<div class="float-left">
<p class="prop-user"><a href="#"><i class="lni-user"></i> Admin</a></p>
</div>
<div class="float-right">
<span><i class="lni-heart"></i> 350</span>
<span><i class="lni-comments"></i> 30</span>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12">
<div class="blog-item text-center">
<div class="blog-image">
<a href="#">
<img class="img-fluid" src="{{asset('assets/img/blog/img3.jpg')}}" alt="">
</a>
</div>
<div class="date">12 April, 2018</div>
<div class="descr">
<h3 class="title">
<a href="single-blog.html">
Latest Architectural Design
</a>
</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias laudantium fugiat, eius sint.</p>
</div>
<div class="blog-footer hide-on-list">
<div class="float-left">
<p class="prop-user"><a href="#"><i class="lni-user"></i> Admin</a></p>
</div>
<div class="float-right">
<span><i class="lni-heart"></i> 350</span>
<span><i class="lni-comments"></i> 30</span>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
@endsection