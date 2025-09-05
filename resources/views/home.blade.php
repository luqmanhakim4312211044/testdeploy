<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Momento Studio</title>
</head>
<body>
    <video autoplay muted loop style="position:absolute; z-index: -1; width: 100%; height: 100%; left:0; top:0; object-fit: cover;">
        <source src="{{ asset('videos/background.mp4') }}">
    </video>
    <div style="position: fixed; top: 0; left: 0; width: 100%; background: white; padding-top:20px; padding-bottom:20px; display: flex; justify-content: space-between; align-items: center;">
        <div style="margin-left: 30px;">
            <a href="/"><img src="{{ asset('images/logo.png') }}" style="height: clamp(10px, 2vw, 25px);"></a>
        </div>
        <div style="margin-right: 30px; display: flex; flex-wrap: wrap;"> 
            <a href="/" style="color: darkgoldenrod; margin-left: 30px; font-size:18px; text-decoration: none;">Home</a>
            <a href="/about" style="color: black; margin-left: 30px; font-size:18px; text-decoration: none;" onmouseover="this.style.color='darkgoldenrod';" onmouseout="this.style.color='black';">About</a>
            <a href="/contact" style="color: black; margin-left: 30px; font-size:18px; text-decoration: none;" onmouseover="this.style.color='darkgoldenrod';" onmouseout="this.style.color='black';">Contact</a>
        </div>
    </div>
    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100svh;">
        <h1 style="color: white; font-size: clamp(22px, 6vw, 41px);">CAPTURE YOUR MOMENT</h1>
        <h2 style="color: white; font-size: clamp(22px, 4vw, 35px);">PHOTO & VIDEO</h2>
        <a href="/contact" style="margin-top: 30px; padding: 12px 24px; background-color: darkgoldenrod; color: white; font-weight: bold; text-decoration: none;" onmouseover="this.style.backgroundColor='goldenrod'"onmouseout="this.style.backgroundColor='darkgoldenrod'"> CONTACT US</a>
    </div>
    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <h2 style="font-size: clamp(20px, 6vw, 35px);">OUR SERVICES</h2>
        <p>test3</p>
    </div>
</body>
</html>

