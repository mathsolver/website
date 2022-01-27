<nav class="py-14 px-20 w-full absolute flex items-center justify-between">
    <a href="{{ route('home') }}" class="py-2 text-lg font-semibold text-gray-900 w-64">
        Math Solver<span class="text-indigo-500">.</span>
    </a>

    @if(isset($expression))
        <form action="{{ route('simplify') }}" method="get" class="flex items-center relative">
            <input
                type="text"
                name="expression"
                class="w-96 focus:outline-none bg-white py-2 px-4 shadow rounded-l-md"
                placeholder="Type an expression..."
                x-data="{ expression: '{{ $expression }}' }"
                x-model="expression"
                :class="{ 'font-mono': expression, 'tracking-wide': !expression }"
                value="{{ $expression }}"
            />

            <button class="py-2 px-4 absolute right-0 text-white font-medium bg-indigo-500 hover:bg-indigo-600 rounded-md shadow shadow-indigo-100 transition focus:outline-none focus:bg-indigo-600">Simplify</button>
        </form>
    @endif

    <ul class="w-64 text-right">
        <li><a class="text-gray-800" href="{{ route('home') }}">Home</a></li>
    </ul>
</nav>
