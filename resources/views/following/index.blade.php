<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            @foreach ($followings as $followed)
                <div class="p-6 flex space-x-2">
                    <svg xmlns="http://www.w3.org/2000.svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill=none view>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01m16 12.01m21 12c0"></path>
                    </svg>
                    <div class="flex-1">
                        <p class="mt-4 text-lg text-gray-900">{{ $followed->name }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>