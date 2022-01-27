<x-layout title="Math Solver">
    <x-navbar />

    <div class="h-screen flex items-center justify-center">
        <div class="w-full">
            <h1 class="text-5xl mb-8 font-bold text-center text-gray-900">Simplify expressions<span class="text-indigo-500">.</span></h1>

            <p class="mb-16 text-lg text-gray-600 text-center">
                <span class="font-semibold text-gray-800">Math Solver</span> is a tool
                designed to help <span class="font-semibold text-gray-800">you</span> with math.
            </p>

            <div class="flex items-center max-w-xl mx-auto">
                <form action="{{ route('simplify') }}" method="get" class="w-full relative">
                    <input
                        type="text" name="expression" id="expression"
                        placeholder="Type an expression..."
                        autofocus
                        class="w-full mb-12 px-6 py-4 placeholder-gray-500 bg-white shadow rounded-xl focus:outline-none"
                        autocomplete="off"
                        x-data="{ expression: '' }"
                        x-model="expression"
                        :class="{ 'font-mono': expression, 'tracking-wide': !expression }"
                    />

                    <button
                        type="submit"
                        class="absolute top-0 right-0 px-10 py-4 font-medium text-white transition bg-indigo-500 shadow-xl  focus:outline-none focus:bg-indigo-600 rounded-xl hover:bg-indigo-600 hover:shadow-lg"
                    >
                        Simplify
                    </button>

                    <div class="grid grid-cols-3 gap-2">
                        <a href="{{ route('simplify', ['expression' => '7x + 5x']) }}" class="block bg-gray-200 py-3 px-6 rounded-lg hover:bg-gray-300 text-center">\( 7x + 5x \)</a>
                        <a href="{{ route('simplify', ['expression' => '4y * 3y']) }}" class="block bg-gray-200 py-3 px-6 rounded-lg hover:bg-gray-300 text-center">\( 4y * 3y \)</a>
                        <a href="{{ route('simplify', ['expression' => 'root(20, 2)']) }}" class="block bg-gray-200 py-3 px-6 rounded-lg hover:bg-gray-300 text-center">\( \sqrt{20} \)</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
