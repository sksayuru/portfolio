<!DOCTYPE html>
<html lang="en">
<head>
<style>


body, html {
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-image: radial-gradient(circle, rgba(255, 255, 255, 0.129) 1px, transparent 1px);
    background-size: 10px 10px;
    background-color: #000;
    color: #fff;
    overflow-x: hidden;
}

.video-mask {
    position: absolute;
    overflow: hidden;
    -webkit-mask-position: center;
    mask-position: center;
    -webkit-mask-repeat: no-repeat;
    mask-repeat: no-repeat;
    height: 500px;
    width: 700px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    margin: auto;
    -webkit-mask-image: url(mask.png);
    mask-image: url(mask.png);
    mask-size: contain;
}

.video-mask video {
    max-height: 100%;
    width: 100%;
    height: 100%;
    object-fit: contain;

}

.hero-content {
    /* display: flex; */
    top: 30%;
    left: 5vw;
    align-items: center;
    justify-content: space-between;
    z-index: 5;
    position: absolute;
    z-index: 2;
    max-width: 40%;
}

.hero-content h1 {

    font-size: 4rem;
    line-height: 1.2;
    margin: 0;
}

.hero-content h2 {
    position: fixed;
    right:10vw;
    font-size: 2.5rem;
    margin: 20px 0;
}

.hero-content p {

    font-size: 1rem;
    font-weight: lighter;
    line-height: 1.5;
}
</style>
</head>
<body>

    <div class="hero-content">
        <h1><span>CONCIERGE</span> REIMAGINED</h1>
        <h2>FOR THE DIGITAL AGE</h2>
        <p>The most forward-thinking brands harness our technology to provide 
            a customer experience that focuses on loyalty, engagement, and satisfaction.</p>
    </div>

    <div class="video-mask">
        <video muted autoplay loop>
          <source src="video.mp4" type="video/mp4">
        </video>
    </div>

</body>
</html>
