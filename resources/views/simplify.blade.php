<x-layout title="Simplify {{ $raw }} - Math Solver">
    <x-navbar :expression="$raw" />

    <div class="w-full max-w-xl pt-56 pb-16 mx-auto">
        <h1 class="text-5xl font-bold text-gray-900">Simplify \( {{ $expression }} \)<span class="text-indigo-500">.</span></h1>

        @forelse ($steps as $step)
            <div class="p-8 mx-auto mt-10 bg-white rounded-lg shadow-md">
                <p class="mb-4 font-bold text-indigo-700">{{ $step['name'] }}</p>
                <p>$$ {{ $step['result'] }} $$</p>
            </div>
        @empty
            <div class="p-8 mx-auto mt-10 bg-white rounded-lg shadow-md">
                <p class="mb-4 font-bold text-indigo-700">Simplified</p>
                <p>$$ {{ $simplified }} $$</p>
            </div>
        @endforelse
    </div>
</x-layout>
