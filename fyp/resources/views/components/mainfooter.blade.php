<section class="py-0 bg-secondary">
    <div class="bg-holder opacity-25" style="background-image:url(asset/img/gallery/dot-bg.png);background-position:top left;margin-top:-3.125rem;background-size:auto;">
    </div>
    <!--/.bg-holder-->

    <div class="container">
      <div class="row py-8">
        <div class="col-12 col-sm-12 col-lg-4 mb-4 order-0 order-sm-0"><a class="text-decoration-none" href="{{ URL::to('/') }}"><h1 style="font-size: 45px;"><u>Let's Vaxxed</u></h1></a>
          <p class="text-light my-4" style="font-size: 25px;">Save Us ,<br />Support Vaccination.</p>
        </div>
        <div class="col-6 col-sm-4 col-lg-3 mb-3 order-3 order-sm-2">
          <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif" style="font-size: 30px;"> Customer Care</h5>
          <ul class="list-unstyled mb-md-4 mb-lg-0">
            <li class="lh-lg"><a class="footer-link" href="{{ URL::to('/') }}" style="font-size: 25px;">Home</a></li>
            <li class="lh-lg"><a class="footer-link" href="{{ URL::to('/login') }}" style="font-size: 25px;">Login</a></li>
          </ul>
        </div>
        <div class="col-6 col-sm-4 col-lg-4 mb-3 order-3 order-sm-2">
          <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif" style="font-size: 30px;"> Contact Information</h5>
          <ul class="list-unstyled mb-md-4 mb-lg-0">
            <li class="lh-lg"><h4>Email : </h4><p class="text-light my-1" style="font-size: 25px;"><u>Letsvaxxed@gmail.com</u></p></li>
            <br>
            <li class="lh-lg"><h4>Phone Number : </h4><p class="text-light my-1" style="font-size: 25px;"><u>03117647852</u></p></li>
          </ul>
        </div>
      </div>
    </div>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    {{-- <section class="py-0 bg-primary">

      <div class="container">
        <div class="row justify-content-md-between justify-content-evenly py-4">
          <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
            <p class="fs--1 my-2 fw-bold text-200">All rights Reserved &copy; Your Company, 2021</p>
          </div>
          <div class="col-12 col-sm-8 col-md-6">
            <p class="fs--1 my-2 text-center text-md-end text-200"> Made with&nbsp;
              <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#F95C19" viewBox="0 0 16 16">
                <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
              </svg>&nbsp;by&nbsp;<a class="fw-bold text-info" href="https://themewagon.com/" target="_blank">ThemeWagon </a>
            </p>
          </div>
        </div>
      </div>
      <!-- end of .container-->

    </section> --}}
    <!-- <section> close ============================-->
    <!-- ============================================-->


  </section>
</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->




<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<script src="{{ URL::asset('vendors/@popperjs/popper.min.js') }}"></script>
<script src="{{ URL::asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('vendors/is/is.min.js') }}"></script>
<script src="{{ URL::asset('https://scripts.sirv.com/sirvjs/v3/sirv.js') }}"></script>
<script src="{{ URL::asset('https://polyfill.io/v3/polyfill.min.js?features=window.scroll') }}"></script>
<script src="{{ URL::asset('vendors/fontawesome/all.min.js') }}"></script>
<script src="{{ URL::asset('asset/js/theme.js') }}"></script>

<link rel="preconnect" href="{{ URL::asset('https://fonts.googleapis.com') }}">
<link rel="preconnect" href="{{ URL::asset('https://fonts.gstatic.com') }}" crossorigin>
<link href="{{ URL::asset('https://fonts.googleapis.com/css2?family=Fjalla+One&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100&amp;display=swap') }}" rel="stylesheet">
<script>
    function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
    function myFunction1() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable1");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
    function myFunction2() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable2");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
    function myFunction3() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput3");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable3");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
</body>

</html>
