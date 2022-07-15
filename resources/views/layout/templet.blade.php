<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewellery | Shop </title>
</head>
<body>
    @section('headerfile')
        {{-- @include('layout.header') --}}

    @show  
    @section('header')
        {{-- @include('layout.header') --}}

    @show   
    @section('menu')
        {{-- @include('layout.menu') --}}
        
    @show
    @section('navbar')
        {{-- @include('layout.navbar') --}}
        
    @show
   
    <div class="continer">
        @yield('content')
    </div>

    @section('footer')
    {{-- @include('layout.footer') --}}
    @show
    
    @section('footerfile')
        
    @show
</body>
</html>