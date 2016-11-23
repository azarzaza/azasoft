@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/customers') }}">Customer</a> :
@endsection
@section("contentheader_description", $customer->$view_col)
@section("section", "Customers")
@section("section_url", url(config('laraadmin.adminRoute') . '/customers'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Customers Edit : ".$customer->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($customer, ['route' => [config('laraadmin.adminRoute') . '.customers.update', $customer->id ], 'method'=>'PUT', 'id' => 'customer-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'name')
					@la_input($module, 'email')
					@la_input($module, 'password')
					@la_input($module, 'customertype')
					@la_input($module, 'status')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <a href="{{ url(config('laraadmin.adminRoute') . '/customers') }}" class="btn btn-default pull-right">Cancel</a>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#customer-edit-form").validate({
		
	});
});
</script>
@endpush
