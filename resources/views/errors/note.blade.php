@if (Session::has('errors'))
<p class="alert alert-danger">
	{{-- @if (Session::has('error')) --}}
	{{-- expr --}}
	{{-- <p class="alert alert-danger">{{Session::get('error')}}</p>
@endif --}}

@foreach ($errors->all() as $error)
{{-- expr --}}
{{ $error }} <br>
@endforeach
</p>
@endif

{{-- count($errors) > 0 --}}
@if (Session::has('error'))
{{-- expr --}}
<p class="alert alert-danger text-center">{{Session::get('error')}}</p>
@endif

@if (Session::has('success'))
{{-- expr --}}
<p class="alert alert-success text-center">{{Session::get('success')}}</p>
@endif
