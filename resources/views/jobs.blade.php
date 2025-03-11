<x-layout>
    <x-slot name="heading">
        Jobs Page
    </x-slot>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="{{ url('/job/' . $job['id']) }}">
                    <strong>{{ $job['title'] }} :</strong> Pays {{ $job['salary'] }} per Year
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>

