<x-app-layout>


    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">
                   <form action="{{route('clientepref.store')}}" method="POST">
                    @include('clientepref._form')
                   </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>