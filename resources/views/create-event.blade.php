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
                <h2 class="text-3xl font-bold tracking-tight text-center sm:text-left">Create New Event</h2>
                <p class="mt-2 text-sm text-[var(--text-secondary)] text-center sm:text-left">Fill in the details below
                    to schedule your event.</p>
            </div>
            <form class="space-y-6 bg-white p-6 sm:p-8 rounded-xl shadow-lg" method="POST"
                action="{{ route('event.store') }}">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-[var(--text-primary)] pb-1.5" for="event-title">Event
                        Title</label>
                    <input
                        class="form-input block w-full rounded-lg border h-11 px-4 text-sm shadow-sm focus:outline-none"
                        id="event-title" name="title" placeholder="e.g., Annual Tech Conference" type="text" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-[var(--text-primary)] pb-1.5"
                        for="event-description">Description</label>
                    <textarea class="form-input block w-full rounded-lg border p-4 text-sm shadow-sm focus:outline-none"
                        id="event-description" name="description" placeholder="Provide a detailed description of your event..."
                        rows="4"></textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium text-[var(--text-primary)] pb-1.5"
                        for="event-location">Location</label>
                    <input
                        class="form-input block w-full rounded-lg border h-11 px-4 text-sm shadow-sm focus:outline-none"
                        id="event-location" name="location" placeholder="e.g., Main Auditorium, Online" type="text" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-[var(--text-primary)] pb-1.5"
                        for="event-organization">Organization (Optional)</label>
                    <select
                        class="form-input block w-full rounded-lg border h-11 px-4 text-sm shadow-sm focus:outline-none appearance-none bg-no-repeat bg-right pr-8"
                        id="event-organization" name="organization"
                        style="background-image: url('data:image/svg+xml,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 fill=%27none%27 viewBox=%270 0 20 20%27%3e%3cpath stroke=%27%236b7280%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27 stroke-width=%271.5%27 d=%27M6 8l4 4 4-4%27/%3e%3c/svg%3e'); background-position: right 0.5rem center; background-size: 1.5em 1.5em;">
                        <option hidden value="">Select organization</option>
                        @foreach($organizations as $organization)
                            <option value="{{ $organization->id }}">{{ $organization->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-[var(--text-primary)] pb-1.5" for="event-date">Date
                        &amp; Time</label>
                    <input
                        class="form-input block w-full rounded-lg border h-11 px-4 text-sm shadow-sm focus:outline-none"
                        id="event-date" name="event_date" type="datetime-local" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-[var(--text-primary)] pb-1.5">Event Poster</label>
                    <div
                        class="mt-1 flex justify-center rounded-lg border-2 border-dashed border-[var(--border-color)] px-6 pt-5 pb-6 hover:border-[var(--primary-color)] transition-colors">
                        <div class="space-y-1 text-center">
                            <svg aria-hidden="true" class="mx-auto h-12 w-12 text-slate-400" fill="none"
                                stroke="currentColor" viewBox="0 0 48 48">
                                <path
                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                            <div class="flex text-sm text-slate-600">
                                <label
                                    class="relative cursor-pointer rounded-md bg-white font-medium text-[var(--primary-color)] hover:text-blue-700 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-[var(--primary-color)]"
                                    for="file-upload">
                                    <span>Upload a file</span>
                                    <input class="sr-only" id="file-upload" name="poster" type="file" />
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-slate-500">PNG, JPG, GIF up to 10MB</p>
                        </div>
                    </div>
                </div>
                <div class="pt-4 flex justify-end">
                    <button
                        class="btn-primary flex items-center justify-center rounded-lg h-11 px-6 text-sm font-semibold shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[var(--primary-color)] transition-colors"
                        type="submit"
                        formaction="{{ route('event.store') }}"
                        formmethod="POST">
                        Create Event
                    </button>
                </div>
            </form>
        </div>
    </main>

</x-app-layout>
