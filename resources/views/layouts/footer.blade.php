<footer class="footer pt-3  ">
    <div class="container-fluid">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6 mb-lg-0 mb-4">
          <div class="copyright text-center text-xs text-muted text-lg-start">
            Copyright
            © <script>
              document.write(new Date().getFullYear())
            </script>
            Corporate UI by
            <a href="https://www.creative-tim.com" class="text-secondary" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
</main>

<!--   Core JS Files   -->
<script src="{{ asset('/assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('/assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
<script src="{{ asset('/assets/js/plugins/chartjs.min.js') }}"></script>
<script src="{{ asset('/assets/js/plugins/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('/assets/ckeditor/ckeditor.js') }}"></script>


<script>
  $(document).ready(function() {
      $('.select2-multiple').select2({
          placeholder: "Select",
          allowClear: true
      });
  });
</script>

<script>
if (document.getElementsByClassName('mySwiper')) {
  var swiper = new Swiper(".mySwiper", {
    effect: "cards",
    grabCursor: true,
    initialSlide: 1,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
};
</script>

<script>
var win = navigator.platform.indexOf('Win') > -1;
if (win && document.querySelector('#sidenav-scrollbar')) {
  var options = {
    damping: '0.5'
  }
  Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
}
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Corporate UI Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{  asset('assets/js/corporate-ui-dashboard.min.js?v=1.0.0') }}"></script>
</body>

</html>