<nav class="absolute flex items-center justify-between w-full px-20 py-14">
    <a href="{{ route('home') }}" class="w-64 py-2 text-lg font-semibold text-gray-900">
        Math Solver<span class="text-indigo-500">.</span>
    </a>

    @if(isset($expression))
        <form action="{{ route('simplify') }}" method="get" class="flex items-center">
            <input
                type="text"
                name="expression"
                class="px-4 py-2 bg-white rounded-l-lg shadow w-96 focus:outline-none"
                placeholder="Type an expression..."
                x-data="{ expression: '{{ $expression }}' }"
                x-model="expression"
                :class="{ 'font-mono': expression, 'tracking-wide': !expression }"
                value="{{ $expression }}"
            />

            <button class="px-4 py-2 font-medium text-white transition bg-indigo-500 rounded-r-lg shadow focus:outline-none focus:bg-indigo-600 hover:bg-indigo-600 hover:shadow-md">Simplify</button>
        </form>
    @endif

    <ul class="w-64 text-right">
        <li><a class="text-gray-800" href="{{ route('home') }}">Home</a></li>
    </ul>
</nav>
