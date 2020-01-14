<?php

namespace KingsleyUdenewu\AkpororoJokes\Tests;

use KingsleyUdenewu\AkpororoJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a joke from Akpororo',
        ]);

        $joke = $jokes->getRandomJoke();
        $this->assertSame('This is a joke from Akpororo', $joke);
    }
}
