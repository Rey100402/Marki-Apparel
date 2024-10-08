
                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © Marki Apparel 2024
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="end-bar">

            <div class="rightbar-title">
                <a href="javascript:void(0);" class="end-bar-toggle float-end">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>

            <div class="rightbar-content h-100" data-simplebar>

                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                    </div>

                    <!-- Settings -->
                    <h5 class="mt-3">Color Scheme</h5>
                    <hr class="mt-1" />

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="light" id="light-mode-check" checked>
                        <label class="form-check-label" for="light-mode-check">Light Mode</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="dark" id="dark-mode-check">
                        <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                    </div>
       

                    <!-- Width -->
                    <h5 class="mt-4">Width</h5>
                    <hr class="mt-1" />
                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="width" value="fluid" id="fluid-check" checked>
                        <label class="form-check-label" for="fluid-check">Fluid</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="width" value="boxed" id="boxed-check">
                        <label class="form-check-label" for="boxed-check">Boxed</label>
                    </div>
        

                    <!-- Left Sidebar-->
                    <h5 class="mt-4">Left Sidebar</h5>
                    <hr class="mt-1" />
                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="theme" value="default" id="default-check">
                        <label class="form-check-label" for="default-check">Default</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="theme" value="light" id="light-check" checked>
                        <label class="form-check-label" for="light-check">Light</label>
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" name="theme" value="dark" id="dark-check">
                        <label class="form-check-label" for="dark-check">Dark</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="fixed" id="fixed-check" checked>
                        <label class="form-check-label" for="fixed-check">Fixed</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="condensed" id="condensed-check">
                        <label class="form-check-label" for="condensed-check">Condensed</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="scrollable" id="scrollable-check">
                        <label class="form-check-label" for="scrollable-check">Scrollable</label>
                    </div>

                    <div class="d-grid mt-4">
                        <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
            
                        <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/"
                            class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
                    </div>
                </div> <!-- end padding-->

            </div>
        </div>

        <div class="rightbar-overlay"></div>
        <!-- /End-bar -->
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<!-- jQuery UI 1.11.4 -->
{{-- <script src="{{asset('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script> --}}
        <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js" integrity="sha256-u0L8aA6Ev3bY2HI4y0CAyr9H8FRWgX4hZ9+K7C2nzdc=" crossorigin="anonymous"></script>
        <!-- bundle -->
        <script src="{{asset('admin/assets/js/vendor.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/app.min.js')}}"></script>

        <!-- Data Tables js -->
        <script src="{{asset('admin/assets/js/vendor/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/dataTables.bootstrap5.j')}}s"></script>
        <script src="{{asset('admin/assets/js/vendor/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/responsive.bootstrap5.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/buttons.bootstrap5.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/buttons.html5.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/buttons.flash.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/buttons.print.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/dataTables.keyTable.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/dataTables.select.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/fixedColumns.bootstrap5.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/fixedHeader.bootstrap5.min.js')}}"></script>
        <!-- third party js ends -->
        <script src="{{asset('admin/assets/js/pages/demo.datatable-init.js')}}"></script>
        <!-- third party js --> 
        <script src="{{asset('admin/assets/js/vendor/apexcharts.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/jquery-jvectormap-world-mill-en.js')}}"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="{{asset('admin/assets/js/pages/demo.dashboard.js')}}"></script>
        <!-- end demo js-->

        
        <!-- third party:js -->
        <script src="{{asset('admin/assets/js/vendor/d3.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/britecharts.min.js')}}"></script>
        <!-- third party end -->
                <!-- demo:js -->
                <script src="{{asset('admin/assets/js/pages/demo.britechart.js')}}"></script>
                <!-- demo end -->
        <!-- demo app -->
        <script src="{{asset('admin/assets/js/pages/demo.chartjs.js')}}"></script>
        <!-- end demo js-->

                <!-- third party js -->
    <script src="{{asset('admin/assets/js/vendor/chart.min.js')}}"></script>
    <!-- third party js ends -->
    <script src="{{asset('admin/assets/js/vendor/jquery.sparkline.min.js')}}"></script>

    <script src="{{asset('admin/assets/js/vendor/handlebars.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/vendor/typeahead.bundle.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/pages/demo.timepicker.js')}}"></script>
    
    <script src="{{asset('admin/assets/js/vendor/quill.min.js')}}"></script>

    <script src="{{asset('admin/assets/js/pages/demo.quilljs.js')}}"></script>

    <script src="{{asset('admin/assets/js/vendor/simplemde.min.js')}}"></script>

    <script src="{{asset('admin/assets/js/pages/demo.simplemde.js')}}"></script>

    <script src="{{asset('admin/assets/js/vendor/dropzone.min.js')}}"></script>

    <script src="{{asset('admin/assets/js/ui/component.fileupload.js')}}"></script>

    <script src="{{asset('admin/assets/js/vendor.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/app.min.js')}}"></script>

        <script src="{{asset('admin/assets/js/pages/demo.form-wizard.js')}}"></script>

        <script src="{{asset('admin/assets/js/vendor/dataTables.checkboxes.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/responsive.bootstrap5.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/dataTables.bootstrap5.js')}}"></script>
        <script src="{{asset('admin/assets/js/pages/demo.products.js')}}"></script>

@include('admin.ajax')
</body>

<!-- Mirrored from coderthemes.com/hyper/saas/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jul 2022 10:20:07 GMT -->
</html>