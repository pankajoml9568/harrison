@extends('master.back')

@section('content')

<!-- Start of Main Content -->
<div class="container-fluid">
<!-- Page Heading -->
<div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title"><b>{{ __('View Lead') }}</b> </h3>
                <!-- <a class="btn btn-danger btn-sm " data-toggle="modal"
                data-target="#confirm-delete" href="javascript:;"
                data-href="{{ route('lead.destroy', ['type' => $type, 'id' => $lead->id]) }}">
                    <i class="fas fa-trash-alt"></i>
                </a> -->
                <a class="btn btn-primary btn-sm" href="{{ route('leads.list', ['type' => $type]) }}"><i class="fas fa-chevron-left"></i> {{ __('Back') }}</a>
            </div>
        </div>
    </div>

	<!-- Form -->
	<div class="row">

		<div class="col-xl-12 col-lg-12 col-md-12">

			<div class="card ">
				<div class="card-body">
					<!-- Nested Row within Card Body -->
					<div class="row justify-content-center">
						<div class="col-lg-12">
                            @foreach($lead->toArray() as $key => $value)
                                <h4>
                                    {{ ucwords(str_replace('_'," ", $key)) }} :
                                    <strong>
                                        @if(in_array($key, ['created_at', 'updated_at'])) 
                                            {{ date('d M, Y', strtotime($value)) }}
                                        @elseif(str_contains($value, "assets"))
                                           <a href="{{ asset($value) }}" class="btn btn-sm btn-primary" target="_blank">View</a>
                                        @else
                                            {{ $value }}
                                        @endif
                                    </strong>
                                </h4>
                            @endforeach
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>
<!-- End of Main Content -->

@endsection