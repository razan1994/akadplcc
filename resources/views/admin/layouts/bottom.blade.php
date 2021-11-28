<script src="{{ asset('dashboard_files/assets/plugins/jquery/jquery.js') }}"></script>
<script src="{{ asset('dashboard_files/assets/plugins/slimscrollbar/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('dashboard_files/assets/plugins/jekyll-search.min.js') }}"></script>


{{-- <script src="{{ asset('resources/dashboard_files/assets/plugins/ladda/spin.min.js') }}"></script>
<script src="{{ asset('resources/dashboard_files/assets/plugins/ladda/ladda.min.js') }}"></script> --}}

<script src="{{ asset('dashboard_files/assets/plugins/ckeditor/ckeditor.js') }}"></script>

<script src="{{ asset('dashboard_files/assets/plugins/charts/Chart.min.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
{{-- <script src="{{ asset('resources/dashboard_files/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script> --}}
{{-- <script src="{{ asset('resources/dashboard_files/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script> --}}



{{-- <script src="{{ asset('resources/dashboard_files/assets/plugins/daterangepicker/moment.min.js') }}"></script> --}}
{{-- <script src="{{ asset('resources/dashboard_files/assets/plugins/daterangepicker/daterangepicker.js') }}"></script> --}}
{{-- <script>
    jQuery(document).ready(function() {
        jQuery('input[name="dateRange"]').daterangepicker({
            autoUpdateInput: false,
            singleDatePicker: true,
            locale: {
                cancelLabel: 'Clear'
            }
        });
        jQuery('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
            jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
        });
        jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
            jQuery(this).val('');
        });
    });

</script> --}}



{{-- <script src="{{ asset('resources/dashboard_files/assets/plugins/toastr/toastr.min.js') }}"></script> --}}

{{-- Extra JS : --}}
@yield('admin_javascript')
<script src="{{ asset('js/custom.js') }}"></script>

<script src="{{ asset('dashboard_files/assets/js/sleek.bundle.js') }}"></script>

</body>

</html>
