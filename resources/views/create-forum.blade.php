<x-app-layout>
	{{-- <x-slot name="header">
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
	{{ __('Dashboard') }}
</h2>
</x-slot> --}}
	@include('layouts.navigation')

	<main class="flex flex-1 justify-center py-8 px-4 sm:px-6 lg:px-8">
			<div class="w-full max-w-2xl space-y-8">
					<div>
							<h2 class="text-3xl font-bold tracking-tight text-center sm:text-left">Create New Forum</h2>
							<p class="mt-2 text-sm text-[var(--text-secondary)] text-center sm:text-left">Fill in the details below
									to create your forum.</p>
					</div>
					<form class="space-y-6 bg-white p-6 sm:p-8 rounded-xl shadow-lg" method="POST"
							action="{{ route('forum.store') }}">
							@csrf
							<div>
									<label class="block text-sm font-medium text-[var(--text-primary)] pb-1.5" for="event-title">Forum
											Title</label>
									<input
											class="form-input block w-full rounded-lg border h-11 px-4 text-sm shadow-sm focus:outline-none"
											id="event-title" name="title" placeholder="e.g., Annual Tech Conference" type="text" />
							</div>
							<div>
									<label class="block text-sm font-medium text-[var(--text-primary)] pb-1.5"
											for="event-description">Konten Forum</label>
									<textarea class="form-input block w-full rounded-lg border p-4 text-sm shadow-sm focus:outline-none"
											id="event-description" name="content" placeholder="Provide a detailed description of your event..."
											rows="4"></textarea>
							</div>
							<div>
									<label class="block text-sm font-medium text-[var(--text-primary)] pb-1.5"
											for="event-organization">Organization</label>
									<select
											class="form-input block w-full rounded-lg border h-11 px-4 text-sm shadow-sm focus:outline-none appearance-none bg-no-repeat bg-right pr-8"
											id="event-organization" name="organization"
											style="background-image: url('data:image/svg+xml,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 fill=%27none%27 viewBox=%270 0 20 20%27%3e%3cpath stroke=%27%236b7280%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27 stroke-width=%271.5%27 d=%27M6 8l4 4 4-4%27/%3e%3c/svg%3e'); background-position: right 0.5rem center; background-size: 1.5em 1.5em;">
											<option hidden value="">Select organization</option>
											@foreach ($organizations as $organization)
													<option value="{{ $organization->id }}">{{ $organization->name }}</option>
											@endforeach
									</select>
							</div>
							<div class="pt-4 flex justify-end">
									<button
											class="btn-primary flex items-center justify-center rounded-lg h-11 px-6 text-sm font-semibold shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[var(--primary-color)] transition-colors"
											type="submit" formaction="{{ route('forum.store') }}" formmethod="POST">
											Create Forum
									</button>
							</div>
					</form>
			</div>
	</main>

</x-app-layout>
