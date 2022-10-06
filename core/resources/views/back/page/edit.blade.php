@extends('master.back')

@section('content')

<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title"><b>{{ __('Update Page') }}</b></h3>
                <a class="btn btn-primary  btn-sm" href="{{route('back.page.index')}}"><i class="fas fa-chevron-left"></i> {{ __('Back') }}</a>
                </div>
        </div>
    </div>

	<!-- Form -->
	<div class="row">

		<div class="col-xl-12 col-lg-12 col-md-12">

			<div class="card o-hidden border-0 shadow-lg">
				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<div class="p-5">
								<form class="admin-form" action="{{ route('back.page.update',$page->id) }}"
									method="POST" enctype="multipart/form-data">

                                    @csrf

                                    @method('PUT')

									@include('alerts.alerts')

									<div class="form-group">
										<label for="title">{{ __('Title') }} *</label>
										<input type="text" name="title" class="form-control" id="title"
											placeholder="{{ __('Enter Title') }}" value="{{ $page->title }}" required>
									</div>


									<div class="form-group">
										<label for="slug">{{ __('Slug') }} *</label>
										<input type="text" name="slug" class="form-control" id="slug"
											placeholder="{{ __('Enter Slug') }}" value="{{ $page->slug }}" required>
									</div>

									<div class="form-group">
										<label for="name">Current Banner *</label>
										<br>
											<img class="admin-img" src="{{ asset($page->banner) }}" alt="No Image Found">
										<br>
										<span class="mt-1">Image Size Should Be (Minimum 1200) x 350.</span>
									</div>

									<div class="form-group">
										<label for=""></label>
										<label class="file">
											<input type="file" accept="image/*" class="upload-photo" name="banner" id="file" aria-label="File browser example">
											<span class="file-custom text-left">Upload Image...</span>
										</label>
                                    </div>

									<div class="form-group">
										<label for="details">{{ __('Details') }} *</label>
										<textarea name="details" id="details" class="form-control text-editor" rows="5"
											placeholder="{{ __('Enter Details') }}"
											required>{{ $page->details }}</textarea>
									</div>

									<div class="form-group">
										<label for="html">{{ __('HTML') }} *</label>
										<textarea name="html" id="html" class="form-control" rows="10"
											placeholder="{{ __('Enter HTML') }}"
											required>{{ $page->html }}</textarea>
									</div>

									<div class="form-group">
										<label for="meta_keywords">{{ __('Meta Keywords') }}
											</label>
										<input type="text" name="meta_keywords" class="form-control tags"
											id="meta_keywords"
											placeholder="{{ __('Enter Meta Keywords') }}"
											value="{{$page->meta_keywords}}">
									</div>

									<div class="form-group">
										<label
											for="meta_description">{{ __('Meta Description') }}
											</label>
										<textarea name="meta_descriptions" id="meta_descriptions"
											class="form-control" rows="5"
											placeholder="{{ __('Enter Meta Description') }}"
										>{{$page->meta_descriptions}}</textarea>
									</div>


									<div class="form-group text-center">
										<button type="submit" class="btn btn-secondary">{{ __('Submit') }}</button>
									</div>


									<div>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>

@endsection
