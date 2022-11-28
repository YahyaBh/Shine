<x-app-layout>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @foreach ($pets as $pet)
                    <div>
                        {{$pet->name}}
                    </div>
    <h1>Admin Dashboard</h1>

                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
