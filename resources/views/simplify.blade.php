<x-layout title="Simplify {{ $expression }} - Math Solver">
    <div class="p-8">
        <h2 class="text-2xl font-bold mb-2">Expression: {{ $expression }}</h2>
        <h1 class="text-4xl font-bold mb-4">Simplified: {{ $simplified }}</h1>

        <form action="{{ route('simplify') }}" method="get">
            <label for="expression">Simplify an expression:</label><br>
            <input type="text" name="expression" id="expression" class="border border-gray-300" value="{{ request('expression') }}" /><br>
            <button type="submit">Simplify</button>
        </form>
    </div>
</x-layout>
