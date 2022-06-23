<nav class="absolute flex items-center justify-between w-full px-20 py-6 border-b">
    <a href="{{ route('home') }}" class="w-32 text-lg font-semibold text-gray-900">
        Math Solver<span class="text-indigo-500">.</span>
    </a>

    @isset($expression)
    <form method="get" action="{{ route('simplify') }}" x-data="{ expression: @js($expression) }" class="w-full max-w-md">
        <input
            type="text"
            name="expression"
            x-model="expression"
            placeholder="Type an expression..."
            autocomplete="off"
            :class="{ 'font-mono': expression, 'tracking-wide': !expression }"
            class="w-full px-4 py-2 placeholder-gray-500 bg-white shadow rounded-xl focus:outline-none"
        />
    </form>
    @endif

    <ul class="w-32 text-right">
        <li><a class="text-gray-800" href="{{ route('home') }}">Home</a></li>
    </ul>
</nav>
