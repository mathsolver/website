<nav class="py-16 px-20 w-full absolute flex items-center justify-between">
    <a href="{{ route('home') }}" class="text-lg font-semibold text-gray-900 w-64">
        Math Solver<span class="text-indigo-500">.</span>
    </a>

    <form action="{{ route('simplify') }}" method="get" class="flex items-center">
        <input
            type="text"
            name="expression"
            class="w-96 focus:outline-none bg-white py-2 px-4 shadow rounded-l-md"
            placeholder="Type an expression..."
            x-data="{ expression: '{{ $expression }}' }"
            x-model="expression"
            :class="{ 'font-mono': expression, 'tracking-wide': !expression }"
        />

        <button class="py-2 px-4 text-white font-medium bg-indigo-500 hover:bg-indigo-600 rounded-r-md shadow  shadow-indigo-300 transition focus:outline-none focus:bg-indigo-600">Simplify</button>
    </form>

    <ul class="w-64 text-right">
        <li><a class="text-gray-800" href="{{ route('home') }}">Home</a></li>
    </ul>
</nav>
