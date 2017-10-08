<?php

namespace LdaAzzi\Router;

use Illuminate\Support\Collection as CLL;

class RouterCollection
{
    protected $collection = [];

    public function add(string $method, string $path, $callback)
    {
        if (!isset($this->collection[$method])) {
            $this->collection[$method] = new CLL;
        }
        $this->CLL[$method]->put($path, $callback);
    }
}
