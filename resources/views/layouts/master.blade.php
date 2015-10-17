@include('partials.header')

@include('partials.flash_message')

@include('partials.nav')

<div class="water"></div>

<div class="container">

    <div class="body">

@yield('content')

        <div class="black-bar"></div>
        <div class="blue-bar"></div>

    </div>

</div>

@include('partials.footer')