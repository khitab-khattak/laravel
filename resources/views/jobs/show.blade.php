<x-layout>
    <x-slot name="heading">
        Job Details
    </x-slot>

    <h1 class="font-bold text-lg">{{ $job->title }}</h1>
    <p>This Job pays{{ $job->salary }} per year.</p>


    <x-button href="/jobs/edit/{{ $job->id }}" class="ml-0">Edit Job</x-button>

</x-layout>
