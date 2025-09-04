<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Momento Studio</title>
</head>
<body>
    <video autoplay muted loop style="position:absolute; z-index: -1; width: 100%; height: 100%; left:0; top:0; object-fit: cover;">
        <source src="{{ asset('videos/background.mp4') }}">
    </video>
    <div style="position: fixed; top: 0; left: 0; width: 100%; background: white; padding-top:20px; padding-bottom:20px; display: flex; justify-content: space-between; align-items: center;">
        <div style="margin-left: 40px;">
            <a href="/"><img src="{{ asset('images/logo.png') }}" style="height: 30px;"></a>
        </div>
        <div style="margin-right: 40px; display: flex; flex-wrap: wrap;"> 
            <a href="/" style="color: darkgoldenrod; margin-left: 40px; font-size:18px; text-decoration: none;">Home</a>
            <a href="/about" style="color: black; margin-left: 40px; font-size:18px; text-decoration: none;" onmouseover="this.style.color='darkgoldenrod';" onmouseout="this.style.color='black';">About</a>
            <a href="/contact" style="color: black; margin-left: 40px; font-size:18px; text-decoration: none;" onmouseover="this.style.color='darkgoldenrod';" onmouseout="this.style.color='black';">Contact</a>
            <a href="/portofolio" style="color: black; margin-left: 40px; font-size:18px; text-decoration: none;" onmouseover="this.style.color='darkgoldenrod';" onmouseout="this.style.color='black';">Portofolio</a>
        </div>
    </div>
    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh;">
        <h1 style="color: white; font-size: clamp(22px, 6vw, 41px);">CAPTURE YOUR MOMENT</h1>
        <h2 style="color: white; font-size: clamp(22px, 4vw, 35px);">PHOTO & VIDEO</h2>
        <a href="/contact" style="margin-top: 30px; padding: 12px 24px; background-color: darkgoldenrod; color: white; font-weight: bold; text-decoration: none;" onmouseover="this.style.backgroundColor='goldenrod'"onmouseout="this.style.backgroundColor='darkgoldenrod'"> CONTACT US</a>
    </div>
    <h2>test2</h2>
    <p>test3</p>
</body>
</html>

