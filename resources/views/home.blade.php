<x-layout title="Math Solver">
    <div class="p-8">
        <h1 class="text-4xl font-bold mb-4">Home</h1>

        <form action="{{ route('simplify') }}" method="get">
            <label for="expression">Simplify an expression:</label><br>
            <input type="text" name="expression" id="expression" class="border border-gray-300" /><br>
            <button type="submit">Simplify</button>
        </form>
    </div>
</x-layout>
