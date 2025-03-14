<x-layout>
    <x-slot name="heading">
        Jobs Page
    </x-slot>

    <div class="space-y-4" >
        @foreach ($jobs as $job)
            <a href="{{ url('/jobs/' . $job['id']) }}" class="  block px-4 py-6 border border-gray-200">
                <div class="bg-green">
                    {{ $job->employer->name }}
                </div>
                <strong>{{ $job['title'] }} :</strong> Pays {{ $job['salary'] }} per Year
            </a>
        @endforeach
    </div>
    <div >
        {{ $jobs->links() }}
    </div>
</x-layout>
