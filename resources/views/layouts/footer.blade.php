<footer class="footer">
    <div class=" container-fluid ">
        <nav>
        <ul>
            <!-- <li>
            <a href="https://www.creative-tim.com">
                Creative Tim
            </a>
            </li>
            <li>
            <a href="http://presentation.creative-tim.com">
                About Us
            </a>
            </li>
            <li>
            <a href="http://blog.creative-tim.com">
                Blog
            </a> -->
            </li>
        </ul>
        </nav>
        <div class="copyright" id="copyright">
        &copy; <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
        </script>, Designed by <a href="#" target="_blank">Demo</a>. Coded by <a href="#" target="_blank">Demo</a>.
        </div>
    </div>
</footer>
<script src="{{ asset('theme/admin/js/core/jquery.min.js') }}"></script>
  <script src="{{ asset('theme/admin/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('theme/admin/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('theme/admin/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{ asset('theme/admin/js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('theme/admin/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('theme/admin/demo/demo.css') }}" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{ asset('theme/admin/demo/demo.js') }}"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>