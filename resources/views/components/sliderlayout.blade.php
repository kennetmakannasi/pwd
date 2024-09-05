<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- Demo styles -->
<style>
 html,
 body {
   position: relative;
   height: 100%;
 }

 body {
   background: #eee;
   color: #000;
   margin: 0;
   padding: 0;
 }

 .swiper-wrapper{
  margin-top: 40px;
 }

 .swiper {
   width: 100%;
   padding-top: 50px;
   padding-bottom: 50px;
 }

 .swiper-slide {
   background-position: center;
   background-size: cover;
   width: 200px;
   height: 400px;
   margin-left: 25px;
   margin-right: 25px;
 }

 .swiper-slide img {
   display: block;
   width: 100%;
 }
</style>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 0,
      margin:1,
      stretch: 0,
      depth: 130,
      modifier: 1,
      slideShadows: false,
    },
    pagination: {
      el: ".swiper-pagination",
    },
    loop: true,
    autoplay: {
    delay: 2000,
  },
  });
</script>