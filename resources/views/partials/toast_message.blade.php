<script>
            @if(session()->has('message'))
    var type = "{{ session()->get('alert-type', 'info') }}";
    switch (type) {
        case 'info':
            toastr.info("{{ session()->get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ session()->get('message') }}");
            break;

        case 'success':
            toastr.success("{{ session()->get('message') }}");
            break;

        case 'error':
            toastr.error("{{ session()->get('message') }}");
            break;
    }
    @endif
</script>