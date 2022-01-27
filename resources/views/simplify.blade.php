<x-layout title="Simplify {{ $raw }} - Math Solver">
    <x-navbar :expression="$raw" />

    <div class="h-screen flex items-center justify-center">
        <div class="max-w-xl w-full mx-auto space-y-10">
            <h1 class="text-3xl font-bold text-gray-900">Simplify \( {{ $expression }} \) <span class="text-indigo-500">.</span></h1>

            <div class="bg-white p-8 mx-auto shadow-md rounded-lg">
                <p class="font-semibold mb-4 text-indigo-700">Simplified:</p>
                <p class="text-2xl">\( {{ $simplified }} \)</p>
            </div>
        </div>
    </div>
</x-layout>
