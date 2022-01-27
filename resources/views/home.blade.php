<x-layout title="Math Solver">
    <x-navbar />

    <div class="h-screen flex items-center justify-center">
        <div class="w-full">
            <!-- Heading -->
            <h1 class="text-5xl mb-8 font-bold text-center text-gray-900">Simplify expressions<span class="text-indigo-500">.</span></h1>

            <!-- Intro text -->
            <p class="mb-16 text-lg text-gray-600 text-center">
                <span class="font-semibold text-gray-800">Math Solver</span> is a tool
                designed to help <span class="font-semibold text-gray-800">you</span> with math.
            </p>

            <div class="flex items-center max-w-xl mx-auto">
                <form action="{{ route('simplify') }}" method="get" class="w-full relative" x-data="{ expression: '', showHelp: false }">
                    <!-- Expression input -->
                    <input
                        type="text" name="expression" id="expression"
                        placeholder="Type an expression..."
                        autofocus
                        class="w-full mb-12 px-6 py-4 placeholder-gray-500 bg-white shadow rounded-xl focus:outline-none"
                        autocomplete="off"
                        x-model="expression"
                        :class="{ 'font-mono': expression, 'tracking-wide': !expression }"
                    />

                    <!-- Show help button -->
                    <button type="button" class="absolute right-[calc(144px+0.75rem)] top-[15px] text-gray-500 hover:text-gray-700" @click="showHelp = true" x-show="!showHelp">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- Submit button -->
                    <button
                        type="submit"
                        class="absolute top-0 right-0 px-10 py-4 font-medium text-white transition bg-indigo-500 shadow-xl  focus:outline-none focus:bg-indigo-600 rounded-xl hover:bg-indigo-600 hover:shadow-lg"
                    >
                        Simplify
                    </button>

                    <!-- Help box -->
                    <div
                        x-cloak
                        x-show="showHelp"
                        class="bg-white p-8 mb-12 -mt-4 rounded-lg shadow relative"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 "
                        x-transition:enter-end="opacity-100 "
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 "
                        x-transition:leave-end="opacity-0 "
                    >
                        <!-- Close button -->
                        <button class="absolute right-8 top-8 text-gray-500 hover:text-gray-700" @click="showHelp = false" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>

                        <!-- Explination -->
                        <table>
                            <tr>
                                <td class="pr-3 pb-2">Powers:</td>
                                <td class="pb-2"><span class="font-mono">4^2</span> \( = 4^2 \)
                            </tr>
                            <tr>
                                <td class="pr-3">Roots:</td>
                                <td><span class="font-mono">root(64, 3)</span> \( = \sqrt[3]{64} \)</td>
                            </tr>
                        </table>
                    </div>

                    <!-- Examples -->
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
