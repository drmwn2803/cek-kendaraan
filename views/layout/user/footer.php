<!-- ======= Footer ======= -->
<footer id="footer">


  <div class="container py-3">
    <div class="copyright pt-1">
      &copy; Copyright <strong><span>Mitsubishi</span></strong>. All Rights Reserved
    </div>
    <div class="credits  pt-1">
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="plugins/jquery/jquery.min.js"></script>
<script src="asset_user/vendor/aos/aos.js"></script>
<script src="asset_user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="asset_user/vendor/glightbox/js/glightbox.min.js"></script>
<script src="asset_user/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="asset_user/vendor/php-email-form/validate.js"></script>
<script src="asset_user/vendor/swiper/swiper-bundle.min.js"></script>
<script src="asset_user/vendor/slick/slick.min.js"></script>

<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- Template Main JS File -->
<script src="asset_user/js/main.js"></script>

<script>
  $("#example1").DataTable({
    "responsive": true,
    "autoWidth": false,
  });

  $("input[name=pencarian]:radio").click(function () {
    if ($('input[name=pencarian]:checked').val() == "rekomendasi") {
      $('.pencek').attr("Disabled", true);
    } else if ($('input[name=pencarian]:checked').val() == "penerima") {
      $('.pencek').attr("Disabled", false);
    }
  });
</script>

</body>

</html>