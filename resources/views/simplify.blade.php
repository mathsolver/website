<x-layout title="Simplify {{ $raw }} - Math Solver">
    <x-navbar :expression="$raw" />

    <div class="w-full max-w-2xl pt-56 pb-16 mx-auto">
        <h1 class="text-3xl font-bold">Simplify \( {{ $expression }} \)<span class="text-indigo-500">.</span></h1>

        <div class="p-8 mt-4 bg-white rounded-md shadow">
            <h3 class="mb-4 font-bold text-indigo-700">Result</h3>
            <p>$$ {{ $simplified }} $$</p>
        </div>

        @if(count($steps) > 0)
            <h2 class="mt-10 text-xl font-bold">Steps ({{ count($steps) }})</h2>
        @endif

        @foreach($steps as $step)
            <div class="p-8 mt-4 bg-white rounded-md shadow">
                <h3 class="mb-4 font-bold text-indigo-700">{{ $step['name'] }}</h3>
                <p>$$ {{ $step['result'] }} $$</p>
            </div>
        @endforeach

        <h2 class="mt-10 text-xl font-bold">Try an example</h2>

        <div
            class="grid grid-cols-3 gap-2 mt-4"
        >
            <a href="{{ route('simplify', ['expression' => '7x^2 + 5x * 4x']) }}" class="block px-6 py-3 text-center bg-gray-200 rounded-md hover:bg-gray-300">\( 7x^2 + 5x * 4x \)</a>
            <a href="{{ route('simplify', ['expression' => 'root[18, 2] + root[32, 2]']) }}" class="block px-6 py-3 text-center bg-gray-200 rounded-md hover:bg-gray-300">\( \sqrt{18} + \sqrt{32} \)</a>
            <a href="{{ route('simplify', ['expression' => '5 * frac[3, 9] + 4']) }}" class="block px-6 py-3 text-center bg-gray-200 rounded-md hover:bg-gray-300">\( 5 * \frac{3}{9} + 4 \)</a>
            <a href="{{ route('simplify', ['expression' => 'log[100, 10]']) }}" class="block px-6 py-3 text-center bg-gray-200 rounded-md hover:bg-gray-300">\( \log_{10}(100) \)</a>
            <a href="{{ route('simplify', ['expression' => 'deriv[x^2 + 3x]']) }}" class="block px-6 py-3 text-center bg-gray-200 rounded-md hover:bg-gray-300">\( \frac{d}{dx}(x^2 + 3x) \)</a>
            <a href="{{ route('simplify', ['expression' => 'x^frac[1,2] * x^frac[3, 2]']) }}" class="block px-6 py-3 text-center bg-gray-200 rounded-md hover:bg-gray-300">\( x^{\frac{1}{2}} * x^{\frac{3}{2}} \)</a>
        </div>
    </div>
</x-layout>
