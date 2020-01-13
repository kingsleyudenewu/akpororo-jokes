<?php


namespace KingsleyUdenewu\AkpororoJokes;


class JokeFactory
{
    private $jokes = [
        'Ahpororo is real',
        'A Godly fellow',
        'A lover of Christ',
        'Great guy and has a lovely family'
    ];
    public function __construct($jokes = [])
    {
        if (!empty($jokes)){
            $this->jokes = $jokes;
        }
    }

//    public function hello()
//    {
//        echo "Akpororo is saying hello from php package development";
//    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}