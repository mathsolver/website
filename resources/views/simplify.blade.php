<x-layout title="Simplify {{ $raw }} - Math Solver">
    <x-navbar :expression="$raw" />

    <div class="h-screen flex items-center justify-center">
        <div class="max-w-xl w-full mx-auto space-y-10">
            <h1 class="text-3xl font-bold text-gray-900">Simplify \( {{ $expression }} \) <span class="text-indigo-500">.</span></h1>

            <div class="bg-white p-8 mx-auto shadow-md rounded-lg">
                @if($simplified === 'error')
                    <p class="font-bold mb-4 text-red-600">Error:</p>
                    <p class="font-medium text-2xl text-gray-800">An error has occured.</p>
                @else
                    <p class="font-bold mb-4 text-indigo-700">Simplified:</p>
                    <p class="text-2xl">\( {{ $simplified }} \)</p>
                @endif
            </div>
        </div>
    </div>
</x-layout>
