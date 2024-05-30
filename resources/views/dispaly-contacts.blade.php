@extends('master')

@section('testimonial-section')@stop

@section('displayContacts-active', 'active')

@section('hero-title', 'Show All Contacts Message')

@section('hero-content')
Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor
tristique.
@endsection

@section('content')

<!-- Start Contact Form -->
<div class="untree_co-section">
	<div class="container">

		<div class="block">
			<div class="row justify-content-center">


				<div class="col-md-8 col-lg-8 pb-4">

					@if (session('status'))
					<div class="alert alert-success">{{ session('status') }}</div>
					@endif
					{{-- {{ session('status') }} --}}
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">First Name</th>
								<th scope="col">Last Name</th>
								<th scope="col">Email</th>
								<th scope="col">Message</th>
								<th scope="col">categories</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							@foreach ($contactsData as $contactData)
							<tr>
								<th scope="row">{{ $contactsData->firstItem() + $loop->index }}</th>
								<td>{{ $contactData->first_name }}</td>
								<td>{{ $contactData->last_name }}</td>
								<td>{{ $contactData->email }}</td>
								<td>{{ $contactData->message }}</td>
								<td>{{ $contactData->category?->name }}</td>
								<td>
									{{-- <a href="{{ route('contact.delete', $contactData->id) }}"
										class="btn btn-danger rounded-pill online-bootstrap">Delete</a> --}}
									<form action="{{ route('contact.delete', [$contactData->id]) }}" method="post">
										@csrf
										@method('DELETE')
										<input type="submit" class="btn btn-danger rounded-pill online-bootstrap"
											name="delete" value="Delete">
										<a href="{{ route('contact.edit', $contactData->id) }}"
											class="btn btn-warning rounded-pill online-bootstrap">Edit</a>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{{ $contactsData->render('pagination::bootstrap-5') }}

				</div>

			</div>

		</div>

	</div>

</div>
<!-- End Contact Form -->

@endsection