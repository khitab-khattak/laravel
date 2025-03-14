<x-layout>
    <x-slot:heading>
       Edit Job: {{ $job->title }}
    </x-slot:heading>
    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Edit Job</h2>
                <p class="mt-1 text-sm/6 text-gray-600">We just need helpful details from you.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">

                                <input type="text" name="title" required id="title" value="{{ $job->title }}"
                                    class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                    placeholder="Enter Title">
                            </div>
                            @error('title')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>


                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">

                                <input type="text" required name="salary" id="salary" value="{{ $job->salary }}"
                                    class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                    placeholder="Enter Salary">
                            </div>
                            @error('salary')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                  
                    
                    </div>
                    {{-- <div class="mt-4">
                        @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div> --}}
            </div>
        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <!-- Left: Delete Button -->
            <div>
                <button form="delete-form" class="text-sm font-bold  text-red-500">
                    Delete
                </button>
                
            </div>
        
            <!-- Right: Cancel & Update Buttons -->
            <div class="flex items-center gap-x-6">
                <a href="/jobs/{{ $job->id }}" class="text-sm font-semibold text-gray-900">Cancel</a>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Update
                </button>
            </div>
        </div>
        
    </form>
    <form action="/jobs/{{ $job->id }}" id="delete-form" method="POST" class="hidden">
        @csrf
        @method('DELETE')
    </form>


</x-layout>
