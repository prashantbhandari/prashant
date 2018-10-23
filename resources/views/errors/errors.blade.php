@if(count($errors) > 0)

@foreach($errors->all() as $error)
	<script>
	toastr.options = {
	    "debug": false,
	    "newestOnTop": false,
	    "positionClass": "toast-top-right",
	    "closeButton": true,
	    "timeOut": "4000",
	    "progressBar": false
	};
	toastr.error("{{ $error }}");
	</script>
@endforeach

@endif

    <!-- message toast -->
@if( session()->has('message') )
	<script>
	toastr.options = {
	    "debug": false,
	    "newestOnTop": false,
	    "positionClass": "toast-top-right",
	    "closeButton": true,
	    "timeOut": "4000",
	    "progressBar": false
	};
	toastr.info("{{ session()->get('message') }}");
	</script>
@endif