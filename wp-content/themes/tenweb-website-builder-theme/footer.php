<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tenweb-website-builder-theme
 */

?>

	</div><!-- #content -->
</div><!-- #page -->

   <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6356a48dff70251d68facdf8" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://uploads-ssl.webflow.com/6356a48dff70251d68facdf8/js/webflow.a7924e869.js" type="text/javascript"></script>
        <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/CustomEase.min.js"></script>
        <script src="https://webflow-assets.sfo2.cdn.digitaloceanspaces.com/resonant-link/ScrollSmoother.min.js"></script>
        <script src="https://webflow-assets.sfo2.cdn.digitaloceanspaces.com/resonant-link/split-type.js"></script>
        <script src="https://webflow-assets.sfo2.cdn.digitaloceanspaces.com/resonant-link/script.js"></script>
        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P68LPN2" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->
        <script>
            // returns the current year
            document.querySelector("[current-year]").innerHTML = new Date().getFullYear();
        </script>
        </script>
        <script src="https://cdn.plyr.io/3.7.2/plyr.js"></script>
        <script>
                        let video=document.getElementById('video-change')
            let source=document.createElement('source')
            let body=document.querySelector('body')
            function changeVideo(screen){ 

                if(screen>768){
                    source.removeAttribute('src')
                    source.removeAttribute('type')
                    source.setAttribute('src','/media/set-your-mind-free.mp4')
                    source.setAttribute('type','video/mp4')
                    console.log(source)
                } else {
                    source.removeAttribute('src')
                    source.removeAttribute('type')
                    source.setAttribute('src','/media/Advenz-Media-Phone.mp4')
                    source.setAttribute('type','video/mp4')
                    console.log(source)
                }

                video.appendChild(source)
            }
            


            const cambioVideo=()=>{
                if (window.matchMedia("(min-width: 768px)").matches) {
                setTimeout(changeVideo(screen.width),2000)
                
                } else if(window.matchMedia("(max-width: 767px)").matches){
                setTimeout(changeVideo(screen.width),2000)
                }
            }


            new ResizeObserver(() => {
                cambioVideo()
            }).observe(document.body)

        </script>
        <script>
            // Plyr setup
            $(".c-reel-contain").each(function (index) {
              let thisComponent = $(this);
              let player = new Plyr(thisComponent.find(".plyr_video")[0], {
                autoplay: true,
                fullscreen: { enabled: false },
                controls: []
              });
              thisComponent.find("[vimeo=pause]").on("click", function () {
                player.pause();
              });
              thisComponent.find("[vimeo=play]").on("click", function () {
                player.play();
              });
            
              let player2 = new Plyr(thisComponent.find(".plyr_video")[1], {
                autoplay: true,
                fullscreen: { enabled: false },
                controls: []
              });
            
              thisComponent.find("[vimeo=pause]").on("click", function () {
                player2.pause();
              });
              thisComponent.find("[vimeo=play]").on("click", function () {
                player2.play();
              });
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12/lib/typed.min.js"></script>
        <script>
            let typed = new Typed('[typed]', {
                strings: ['<span style="font-size:1.7em">DRIVE YOUR<br>BUSINESS WITH OUR<br>PROFESSIONAL ACCOUNTING  EXPERTISE AND RESOURCES<br>  DO BUSINESS CONFIDENTLY<br></span>'],
                typeSpeed: 11,
                backSpeed: 0,
                loop: false,
                contentType: 'html',
                showCursor: false
            });
            
            if (window.matchMedia("(min-width: 992px)").matches) {
                pageLoad();
                homeHeroPlay();
            }
            
            if (window.matchMedia("(max-width: 991px)").matches) {
                pageLoadMobile();
              mobilePauseContent();
            }
            
            
            
        </script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        <script></script>
        <script>
            // Testimonials slider
            let teSwiper = new Swiper(".swiper.te", {
                slidesPerView: "auto",
              speed: 350,
              effect: "fade",
              fadeEffect: {
                crossFade: true,
              },
              pagination: {
                el: ".swiper-pag",
                type: "custom",
                renderCustom: function (swiper, current, total) {
                  return current + "/" + total;
                },
              },
              navigation: {
                nextEl: ".swiper-te-next",
                prevEl: ".swiper-te-prev",
              },
            });
            
            // Solutions slider
            let soSwiper = new Swiper(".swiper.hm-solutions", {
            speed: 350,
            allowTouchMove: false,
            effect: "fade",
            fadeEffect: {
              crossFade: true,
            },
            pagination: {
              el: ".swiper-pag2",
              type: "custom",
              renderCustom: function (swiper, current, total) {
                return current + "/" + total;
              }
            },
            navigation: {
              nextEl: ".swiper-so-next.solutions",
              prevEl: ".swiper-so-prev.solutions",
            },
            on: {
              init() {
                // Get the first video element
                let firstVideo = document.querySelector(
                  ".swiper-slide:first-child video"
                );
            
                let soFirst = gsap.timeline({
                  scrollTrigger: {
                    trigger: ".c-section.hm-solutions",
                    start: "top center",
                    end: "bottom bottom",
                    once: true,
                    onEnter: () => {
                      firstVideo.play();
                    },
                  },
                });
              },
              slideChange: function () {
                // Get the current slide
                let currentSlide = this.slides[this.activeIndex];
                
                let prevSlide = this.slides[this.previousIndex];
                if (prevSlide) {
                    let prevVideo = prevSlide.querySelector("video");
                  prevVideo.pause();
                }
                // Get the video element in the current slide
                let video = currentSlide.querySelector("video");
            
                // Play the video
                
                video.currentTime = 0;
                video.play();
              },
            },
            });
            
            
        </script>
<?php wp_footer(); ?>

</body>
</html>