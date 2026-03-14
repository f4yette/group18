@extends('layouts.app')

@section('title', 'Sportswear')

@section('content')

<header id="main-header">
    <div class="logo">
        <a href="{{ url('/') }}">
            <img src="{{ asset('images/Vibora_UK_logo.png') }}" alt="Vibora UK logo">
            <span>VIBORA UK</span>
        </a>
    </div>

    <nav>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/rackets') }}">Rackets</a></li>
            <li><a href="{{ url('/sportswear') }}" class="active">Sportswear</a></li>

            <li class="dropdown">
                <a href="#">More</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ url('/bags') }}">Bags</a></li>
                    <li><a href="{{ url('/shoes') }}">Shoes</a></li>
                    <li><a href="{{ url('/balls') }}">Balls</a></li>
                    <li><a href="{{ url('/services') }}">Services</a></li>
                </ul>
            </li>

            <li><a href="{{ url('/about') }}">About Us</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
    </nav>

    <div class="login">
        <a href="{{ url('/basket') }}" class="basket-link">
            <img src="{{ asset('images/shopping-basket-icon-png-3309830814.png') }}" class="basket-icon" alt="Basket">
        </a>

        <a href="{{ url('/account') }}" class="login-btn">Login</a>
    </div>
</header>


<div class="page-title">
    <h1>Sportswear</h1>
</div>


<div class="searchbar">
    <input type="text" id="searchInput" placeholder="Search Products">
    <button id="searchBtn">OK</button>
</div>


<div class="filter-container">

    <div class="filter">
        <label>Brand:</label>
        <select id="racketbrands">
            <option value="all">All</option>
            <option value="bullpadel">Bullpadel</option>
            <option value="y1">Y1</option>
            <option value="nox">NOX</option>
            <option value="head">Head</option>
        </select>
    </div>

    <div class="filter">
        <label>Price:</label>
        <select id="price">
            <option value="all">All</option>
            <option value="under50">Under £50</option>
            <option value="50to75">£50-75</option>
            <option value="75to100">£75-100</option>
            <option value="100to150">£100-150</option>
            <option value="over150">£150+</option>
        </select>
    </div>

    <div class="filter">
        <label>Gender:</label>
        <select id="level">
            <option value="all">All</option>
            <option value="male">M</option>
            <option value="female">F</option>
        </select>
    </div>

    <div class="filter">
        <label>Material:</label>
        <select id="material">
            <option value="all">All</option>
            <option value="a">A</option>
            <option value="b">B</option>
            <option value="c">C</option>
            <option value="d">D</option>
        </select>
    </div>

</div>


<div class="products-container" id="productsContainer"></div>


<footer>
    <h5>@ ViboraUK Ltd</h5>

    <div class="credentials">
        <h6><a href="{{ url('/terms') }}">Terms and Conditions</a></h6>
        <h6><a href="{{ url('/privacy-policy') }}">Privacy Policy</a></h6>
        <h6><a href="{{ url('/cookies') }}">Cookies</a></h6>
        <h6><a href="{{ url('/delivery-information') }}">Delivery Information</a></h6>
        <h6><a href="{{ url('/returns') }}">Returns</a></h6>
        <h6><a href="{{ url('/contact') }}">Contact</a></h6>
    </div>
</footer>

@endsection


@section('scripts')

<script src="{{ asset('js/script1.js') }}"></script>
<script src="{{ asset('js/sportswear.js') }}"></script>

@endsection