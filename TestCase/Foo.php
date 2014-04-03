<?php

namespace Mezzle\TestCase;

class Foo
{
    protected $a = null;

    protected $dt = null;

    public function setDt(\DateTime $dt)
    {
        $this->dt = $dt;
    }
}
