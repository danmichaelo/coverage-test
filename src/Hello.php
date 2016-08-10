<?php

class Hello
{
    public function world()
    {
        return 'Hello world';
    }

    public function you()
    {
        return 'Hello you';
    }

    public function __get($key)
    {
        return 'Hello ' . $key;
    }
}
