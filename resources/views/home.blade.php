<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width">
    <title>Momento Studio</title>
</head>
<body style="margin:0">
    <div style="position: fixed; width: 100%; background: white; padding-top:20px; padding-bottom:20px; display: flex; justify-content: space-between">
        <div style="padding-left: 30px">
            <a href="/"><img src="{{ asset('images/logo.png') }}" style="height: clamp(10px, 2vw, 25px);"></a>
        </div>
        <div style="padding-right: 30px"> 
            <a href="/" style="color: darkgoldenrod; font-size:18px; text-decoration: none">Home</a>
            <a href="/about" style="color: black; padding-left: 30px; font-size:18px; text-decoration: none" onmouseover="this.style.color='darkgoldenrod';" onmouseout="this.style.color='black';">About</a>
            <a href="/contact" style="color: black; padding-left: 30px; font-size:18px; text-decoration: none" onmouseover="this.style.color='darkgoldenrod';" onmouseout="this.style.color='black';">Contact</a>
        </div>
    </div>
    <video autoplay muted loop style="position:absolute; z-index: -1; width: 100%; height: 100%; object-fit: cover">
        <source src="{{ asset('videos/background.mp4') }}">
    </video>
    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100svh">
        <h1 style="color: white; font-size: clamp(24px, 5vw, 40px)">CAPTURE YOUR MOMENT</h1>
        <h1 style="color: white; font-size: clamp(22px, 4vw, 35px)">PHOTO & VIDEO</h1>
        <a href="/contact" style="margin-top: 30px; padding: 12px 24px; background-color: darkgoldenrod; color: white; font-weight: bold; text-decoration: none" onmouseover="this.style.backgroundColor='goldenrod'"onmouseout="this.style.backgroundColor='darkgoldenrod'">CONTACT US</a>
    </div>
    <div style="display: flex; flex-direction: column; align-items: center; text-align:center">
        <h1 style="font-size: clamp(20px, 6vw, 35px)">Meet Momento Studio</h1>
        <p style="font-size: clamp(15px, 4vw, 30px); max-width:85vw">Momento Studio hadir karena kami percaya setiap momen punya cerita istimewa yang layak untuk dikenang. Kami tidak hanya memotret atau merekam video, tetapi juga menangkap emosi, detail, dan suasana yang membuat setiap momen terasa hidup.</p>
        <a href="/about" style="margin-top: 30px; margin-bottom: 30px; padding: 12px 24px; background-color: darkgoldenrod; color: white; font-weight: bold; text-decoration: none" onmouseover="this.style.backgroundColor='goldenrod'"onmouseout="this.style.backgroundColor='darkgoldenrod'">READ MORE</a>
    </div>
    <div style="display: flex; flex-direction: column; align-items: center; background-color: black; width:100%">
        <h1 style="color:white; font-size: clamp(20px, 6vw, 35px)">Our Services</h1>
        <h1 style="color:white;">TEST2</h1>
    </div>

</body>
</html>

