@if (session()->has('success'))
    <script>swal('Great Job !!!', @json(session('success')), 'success', { button: 'OK' });</script>
@endif
@if (session()->has('danger'))
    <script>swal('Oops !!!', @json(session('danger')), 'error', { button: 'Close' });</script>
@endif
