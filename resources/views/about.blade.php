<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Momento Studio</title>
</head>
<body>
    <div style="position: fixed; top: 0; left: 0; width: 100%; background: white; padding-top:20px; padding-bottom:20px; display: flex; justify-content: space-between; align-items: center;">
        <div style="margin-left: 30px;">
            <a href="/"><img src="{{ asset('images/logo.png') }}" style="height: clamp(10px, 2vw, 25px);"></a>
        </div>
        <div style="margin-right: 30px; display: flex; flex-wrap: wrap;"> 
            <a href="/" style="color: black; margin-left: 30px; font-size:18px; text-decoration: none;" onmouseover="this.style.color='darkgoldenrod';" onmouseout="this.style.color='black';">Home</a>
            <a href="/about" style="color: darkgoldenrod; margin-left: 30px; font-size:18px; text-decoration: none;">About</a>
            <a href="/contact" style="color: black; margin-left: 30px; font-size:18px; text-decoration: none;" onmouseover="this.style.color='darkgoldenrod';" onmouseout="this.style.color='black';">Contact</a>
        </div>
    </div>
</body>
</html>