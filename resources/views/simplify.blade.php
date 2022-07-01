<x-layout title="Simplify {{ $raw }} - Math Solver">
    <x-navbar :expression="$raw" />

    <div class="w-full max-w-2xl mx-auto my-16">
        <h1 class="text-3xl font-bold">Simplify \( {{ $expression }} \)<span class="text-indigo-500">.</span></h1>

        <div class="p-8 mt-4 bg-white rounded-md shadow">
            <h3 class="mb-4 font-bold text-indigo-700">Result</h3>
            <p>$$ {{ $simplified }} $$</p>
        </div>

        @if(count($steps) > 0)
            <h2 class="mt-10 text-xl font-bold">Steps ({{ count($steps) }})</h2>
        @endif

        @foreach($steps as $step)
            @if($step['docs'])
                <button x-data="{ showDocs: true }" @click="showDocs = !showDocs" class="block w-full p-8 mt-4 text-left bg-white rounded-md shadow">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="font-bold text-indigo-700 ">{{ $step['name'] }}</h3>

                        <div class="flex items-center justify-center text-gray-500 transition duration-300 border border-gray-400 rounded-full hover:text-gray-700 hover:border-gray-500 w-7 h-7" :class="{ 'rotate-180': showDocs}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                        </div>
                    </div>

                    <p>$$ {{ $step['result'] }} $$</p>

                    <div class="mt-4 border-t typography" x-show="showDocs">
                        {!! str($step['docs'])->markdown() !!}
                    </div>
                </button>
            @else
                <div class="p-8 mt-4 bg-white rounded-md shadow" x-data="{ showDocs: true }">
                    <h3 class="mb-4 font-bold text-indigo-700">{{ $step['name'] }}</h3>
                    <p>$$ {{ $step['result'] }} $$</p>
                </div>
            @endif
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
