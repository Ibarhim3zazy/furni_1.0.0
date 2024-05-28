@extends('master')

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


					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">First Name</th>
								<th scope="col">Last Name</th>
								<th scope="col">Email</th>
								<th scope="col">Message</th>
								<th scope="col">categories</th>
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