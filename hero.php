<style>

.hero-text {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    z-index: 2;
    margin-top: 25%;
    text-transform: uppercase;
}

#video-mask {
  position: fixed;
  overflow: hidden;
  -webkit-mask-position: center;
  mask-position: center;
  -webkit-mask-repeat: no-repeat;
  mask-repeat: no-repeat;
  height: 600px;
  width: 900px;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  margin: auto;
  -webkit-mask-image: url(mask.png);
  mask-image: url(mask.png);
  mask-size: contain;
}

#video-mask video {
  max-height: 100%;
  width: 100%;
  height: 100%;
  object-fit: contain;
}

#hero-content {
  /* top: 50%; */
  bottom: 0;
  align-items: center;
  justify-content: space-between;
  z-index: 5;
  position: fixed;
  z-index: 2;
  max-width: 40%;
}

#hero-content h1 {
  font-size: 4rem;
  line-height: 1.2;
  margin: 0;
}

#hero-content h2 {
  position: fixed;
  right: 10vw;
  font-size: 2.5rem;
  margin: 20px 0;
}

#hero-content p {
  font-size: 1rem;
  font-weight: lighter;
  line-height: 1.5;
}

</style>



<header id="dsn_header" class="v-dark-head dsn-header-animation h-100-v dsn-header-animation dsn_bg">
                <div class="container p-relative h-100-v d-flex  z-index-1">
                    <div class="p-relative d-flex flex-column justify-content-center w-100  h-100  hero-text">

                    <div class="box-content d-flex flex-column" style="z-index: 5;">
                        <h2 class="title-lg text-upper">FUTURE</h2>
                        <div class="w-80 description-inner d-flex align-items-end justify-content-center">
                            <h3 class="title-lg text-upper mt-20">REIMAGINED</h3>
                        </div>
                    </div>

                        <div class="box-content d-flex flex-column z-index-1 align-items-center justify-content-center dsn-container">
                            
                            <div id="box-image text-center">
                                
                                <div id="video-mask">
                                    <video muted autoplay loop>
                                    <source src="video.mp4" type="video/mp4">
                                    </video>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="footer-head w-100 left-0 p-absolute bottom-0 z-index-2 pb-40">
                    <div class="container d-flex justify-content-between">
                        <div class="dsn-btn dsn-btn-shape rotate-icon d-flex">

                            <a class="button background-section" href="#page_wrapper" rel="nofollow"
                                data-dsn-option='{"ease": "power4.inOut" , "duration" : 1.5}'>
                                <span class="title-btn text-upper p-relative  z-index-1 heading-color"
                                    data-animate-text="Scroll Down">
                                    <span>Scroll Down</span>
                                </span>
                            </a>

                            <span class="icon background-section">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                    </path>
                                </svg>
                            </span>

                        </div>

                        <div class="dsn-btn dsn-btn-shape d-flex">

                            <a class="button background-section effect-ajax" href="contact.php"
                                data-dsn-text="Contact Mes">
                                <span class="title-btn text-upper p-relative  z-index-1 heading-color"
                                    data-animate-text="Contact Me">
                                    <span>Contact Me</span>
                                </span>
                            </a>

                            <span class="icon background-section">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                    </path>
                                </svg>
                            </span>

                        </div>
                    </div>
                </div>

            
            </header>