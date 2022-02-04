<div>
    <x-navbar />

    <div class="w-full max-w-xl pt-56 pb-56 mx-auto">
        <!-- Heading -->
        <h1 class="mb-8 text-5xl font-bold text-center text-gray-900">
            Configure options<span class="text-indigo-500">.</span>
        </h1>

        <!-- Intro text -->
        <p class="mb-16 text-lg text-center text-gray-600">
            Here you can configure all options available to you.
        </p>

        <!-- Form -->
        <form action="{{ route('simplify') }}" method="get">
            <!-- Expression -->
            <div class="p-8 mx-auto mt-10 bg-white rounded-lg shadow-md">
                <label for="expression" class="block mb-4 font-bold text-indigo-700">
                    Your expression:
                </label>

                <input
                    type="text"
                    id="expression"
                    name="expression"
                    wire:model="expression"
                    class="w-full px-4 py-2 font-mono border border-gray-200 rounded-md shadow-sm focus:outline-none focus:border-gray-300"
                />
            </div>

            <!-- Substitutions -->
            <input type="hidden" name="substitutions" value="{{ json_encode($substitutions) }}" />
            <div class="p-8 mx-auto mt-10 bg-white rounded-lg shadow-md">
                <p class="block mb-4 font-bold text-indigo-700">
                    Substitute values:
                </p>

                <table class="w-full">
                    <tr>
                        <th class="pb-2 pr-3 text-sm font-medium text-left">Search</th>
                        <th class="pb-2 text-sm font-medium text-left">Replace</th>
                        <th class="pb-2 text-sm font-medium text-left">&nbsp;</th>
                    </tr>

                    @foreach ($substitutions as $key => $substitution)
                        <tr>
                            <td class="w-1/2 pb-2 pr-3">
                                <input
                                    type="text"
                                    wire:model="substitutions.{{ $key }}.search"
                                    class="w-full px-4 py-2 font-mono border border-gray-200 rounded-md shadow-sm focus:outline-none focus:border-gray-300"
                                />
                            </td>

                            <td class="w-1/2 pb-2 pr-3">
                                <input
                                    type="text"
                                    wire:model="substitutions.{{ $key }}.replace"
                                    class="w-full px-4 py-2 font-mono border border-gray-200 rounded-md shadow-sm focus:outline-none focus:border-gray-300"
                                />
                            </td>

                            <td>
                                <button type="button" wire:click="removeSubstitution({{ $key }})" class="text-gray-600 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </table>

                <button type="button" wire:click="newSubstitution" class="block w-full px-4 py-2 mt-2 bg-gray-200 rounded-lg hover:bg-gray-300">
                    New row
                </button>
            </div>

            <!-- Solve -->
            <div class="p-8 mx-auto mt-10 bg-white rounded-lg shadow-md">
                <label for="solve" class="block mb-4 font-bold text-indigo-700">
                    Solve for a letter (in equations only):
                </label>

                <input
                    type="text"
                    id="solve"
                    name="solve"
                    wire:model="solve"
                    class="w-full px-4 py-2 font-mono border border-gray-200 rounded-md shadow-sm focus:outline-none focus:border-gray-300"
                />
            </div>

            <!-- Submit button -->
            <button
                type="submit"
                class="block float-right px-10 py-3 mt-6 font-medium text-white transition bg-indigo-500 rounded-lg shadow-md focus:outline-none focus:bg-indigo-600 hover:bg-indigo-600 hover:shadow-lg"
            >
                Go!
            </button>
        </form>
    </div>
</div>
