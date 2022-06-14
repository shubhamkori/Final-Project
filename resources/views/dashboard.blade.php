<x-app-layout>
    <script src="https://cdn.tailwindcss.com"></script>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 bg-white border-b border-gray-200">

                    @foreach ($teets as $teet)
                      <x-tweet-card :teet="$teet" />
                    @endforeach

                    <div> {{$teets->links()}} </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
