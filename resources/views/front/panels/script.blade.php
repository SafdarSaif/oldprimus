<script src="//cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
<!-- <script src="/web-assets/js/jquery.js"></script> -->
<!-- <script src="/web-assets/libs/bootstrap/js/bootstrap.bundle.min.js" defer></script> -->
<!-- <script src="/web-assets/libs/@popperjs/core/umd/popper.min.js" defer></script> -->
<!-- <script src="/web-assets/js/defaultmenu.js?=1.0" defer></script> -->
<!-- <script src="/web-assets/libs/swiper/swiper-bundle.min.js" onload="loadInitializer();" defer></script> -->
<!-- <script src="/web-assets/js/sticky.js" defer></script> -->
<!-- <script src="/web-assets/js/custom.js" defer></script> -->
<script src="/web-assets/js/scripts.min.js"></script>
<script src="/web-assets/js/swiper.js?=2.0"></script>
<script>
   window.dataLayer = window.dataLayer || [];

   function gtag() {
      dataLayer.push(arguments);
   }
   gtag('js', new Date());
   gtag('config', 'G-K5FFRY6LL1');
</script>

<script>
   function isNumberKey(evt) {
      var charCode = (evt.which) ? evt.which : evt.keyCode
      return !(charCode > 31 && (charCode < 48 || charCode > 57));
   }

   function isNotNumberKey(evt) {
      var charCode = (evt.which) ? evt.which : evt.keyCode
      return (charCode > 31 && (charCode < 48 || charCode > 57));
   }
</script>
<script>
   $(document).ready(function() {
      $('input.disablecopypaste').bind('copy paste', function(e) {
         e.preventDefault();
      });
   });
</script>


<script>
   function convertFormToJSON(form) {
      const array = $(form).serializeArray();
      const json = {};
      $.each(array, function() {
         json[this.name] = this.value || "";
      });
      return json;
   }
</script>
<script>
   $(function() {
      $("#form_course").on("submit", function(e) {
         e.preventDefault();
         const form = $(e.target);
         const json = convertFormToJSON(form);
         $.ajax({
            "url": "https://centraldb.gyaneager.com/api.php",
            "method": "POST",
            "timeout": 0,
            "data": JSON.stringify(json),
            "dataType": 'json',
            "success": function(response) {
               if (response.status == 200) {
                  $('#form_course')[0].reset();
                  Swal.fire(
                     'Thank You!',
                     'Your details are Submitted!',
                     'success'
                  )
               }
            }
         })
      });
   });
</script>
<script>
   $(function() {
      $("#pop").on("submit", function(e) {
         e.preventDefault();
         const form = $(e.target);
         const json = convertFormToJSON(form);
         $.ajax({
            "url": "https://centraldb.gyaneager.com/api.php",
            "method": "POST",
            "timeout": 0,
            "data": JSON.stringify(json),
            "dataType": 'json',
            "success": function(response) {
               if (response.status == 200) {
                  $('#pop')[0].reset();
                  Swal.fire(
                     'Thank You!',
                     'Your details are Submitted!',
                     'success'
                  )
               } else {
                  Swal.fire(
                     'Please try after some time!',
                     'Servers are busy!',
                     'info'
                  )
               }
            }
         })
      });
   });
</script>
<script>
   $(function() {
      $("#con").on("submit", function(e) {
         e.preventDefault();
         const form = $(e.target);
         const json = convertFormToJSON(form);
         $.ajax({
            "url": "https://centraldb.gyaneager.com/api.php",
            "method": "POST",
            "timeout": 0,
            "data": JSON.stringify(json),
            "dataType": 'json',
            "success": function(response) {
               if (response.status == 200) {
                  $('#con')[0].reset();
                  Swal.fire(
                     'Thank You!',
                     'Your details are Submitted!',
                     'success'
                  )
               } else {
                  Swal.fire(
                     'Please try after some time!',
                     'Servers are busy!',
                     'info'
                  )
               }
            }
         })
      });
   });
</script>