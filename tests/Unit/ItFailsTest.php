<?php

namespace Tests\Unit;

use App\RelatedModel;
use App\TestModel;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ItFailsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function testThatItWillFail()
    {
        $testModelA = factory(TestModel::class)->create(['identifier_1' => 1, 'identifier_2' => 1]);
        factory(RelatedModel::class)->create(['identifier_1' => 1, 'identifier_2' => 2, 'description' => 'BAD']);
        factory(RelatedModel::class)->create(['identifier_1' => 1, 'identifier_2' => 1, 'description' => 'GOOD']);

        $testModelA->load('relate');

        $this->assertEquals('GOOD', $testModelA->relate->description);

    }
}
