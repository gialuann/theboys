<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firstflight Travels</title>
    <link rel="icon" href="{{asset('blog/files/logo.png')}}">
    <link rel="stylesheet" href="{{asset('blog/css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
    
   
</head>
<body>
<!-- Background Video & Header -->
    <!-- Header -->
<div class="content" id="home"> 
        <nav>
            <img src="{{asset('blog/files/logo.png')}}" class="logo" alt="Logo" title="FirstFlight Travels">
            
            <ul class="navbar">
                <li><a href="{{route('client.home')}}">Home</a></li>
                <li><a href="#locations">Countries</a>
                    <ul class="sub-menu">
                        <li><a href="{{route('client.country.vietnam')}}">Vietnam</a></li>
                        <li><a href="{{route('client.country.china')}}">China</a></li>
                        <li><a href="{{route('client.country.japan')}}">Japan</a></li>
                        <li><a href="{{route('client.country.pakistan')}}">Pakistan</a></li>
                        <li><a href="{{route('client.country.india')}}">India</a></li>
                    </ul>
                
                </li>
                <li><a href="#package">Guides</a></li>    
                <li><a href="./about.html">Contact Us</a></li>
                <li><a href="#">learn</a>
                    <ul class="sub-menu">
                        <li><a href="#package">about us</a></li>
                        <li><a href="#package">how to </a></li>
                        <li><a href="#package">how to know</a></li>
                    </ul>
                </li>
                <li><a href="{{route('client.sign-in.login')}}">Sign in</a></li>
                
            </ul>
        </nav>
</div>