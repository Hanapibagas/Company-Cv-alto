<a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;" data-hs-go-to-options='{
    "offsetTop": 700,
    "position": {
      "init": {
        "right": "2rem"
      },
      "show": {
        "bottom": "2rem"
      },
      "hide": {
        "bottom": "-2rem"
      }
    }
  }'>
    <i class="bi-chevron-up"></i>
</a>

<script src="{{ asset('pages/frontend/js/vendor.min.js') }}"></script>
<script src="{{ asset('pages/frontend/vendor/aos/dist/aos.js') }}"></script>

<script src="{{ asset('pages/frontend/js/theme.min.js') }}"></script>

<script>
    (function() {
   new HSHeader('#header').init()

   new HSMegaMenu('.js-mega-menu', {
       desktop: {
         position: 'left'
       }
     })

   new HSShowAnimation('.js-animation-link')

   HSBsValidation.init('.js-validate', {
     onSubmit: data => {
       data.event.preventDefault()
       alert('Submited')
     }
   })

   new HSGoTo('.js-go-to')

   AOS.init({
     duration: 650,
     once: true
   });

   HSCore.components.HSTyped.init('.js-typedjs')

   document.querySelectorAll('.js-video-bg').forEach(item=> {
     new HSVideoBg(item).init()
   })

   var swiper = new Swiper('.js-swiper-single-testimonials', {
     pagination: {
       el: '.js-swiper-single-testimonials-pagination',
       clickable: true,
     },
   });
 })()
</script>