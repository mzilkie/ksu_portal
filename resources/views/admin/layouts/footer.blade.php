            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="{{route('home')}}">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="{{route('/campaigns')}}">
                                    Campaigns
                                </a>
                            </li>
                            <li>
                                <a href="{{route('/interactions')}}">
                                    Interactions
                                </a>
                            </li>
                            <li>
                                <a href="{{route('/tasks')}}">
                                    Tasks
                                </a>
                            </li>
                            <li>
                                <a href="{{route('/manage')}}">
                                    Manage Users
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="http://polytechnic.k-state.edu">Kansas State University - Polytechnic</a>
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/js/material.min.js" type="text/javascript"></script>
<script src="/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="/js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="/js/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="/js/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="/js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="/js/bootstrap-notify.js"></script>
<!-- DateTimePicker Plugin -->
<script src="/js/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="/js/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="/js/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<!-- Select Plugin -->
<script src="/js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="/js/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="/js/sweetalert2.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="/js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="/js/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="/js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="/js/material-dashboard.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initVectorMap();
    });
</script>

</html>