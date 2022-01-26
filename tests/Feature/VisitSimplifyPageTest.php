<?php

test('a user can visit the simplify page', function () {
    $this->get(route('simplify', ['expression' => '7x + 5x']))->assertStatus(200)->assertSee('12x');
});

test('the user is redirected if there is no expression', function () {
    $this->get(route('simplify'))->assertRedirect(route('home'));
});
