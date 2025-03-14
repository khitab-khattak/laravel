<x-layout>
    <x-slot name="heading">
        Job Details
    </x-slot>

    <h2>{{ $job['title'] }}</h2>
    <p>Salary: {{ $job['salary'] }}</p>
</x-layout>
