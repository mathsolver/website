<?php

test('a user can visit the home page', function () {
    $this->get(route('home'))->assertStatus(200);
});
