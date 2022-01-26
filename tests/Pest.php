<?php

uses(Tests\TestCase::class)->in('Feature', 'Unit');
uses(Illuminate\Foundation\Testing\RefreshDatabase::class)->in('Feature', 'Unit');
uses(Illuminate\Foundation\Testing\WithFaker::class)->in('Feature', 'Unit');
uses()->beforeEach(fn () => $this->withoutExceptionHandling())->in('Feature', 'Unit');
