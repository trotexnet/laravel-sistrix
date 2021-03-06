<?php namespace Fschulze\Sistrix\Tests\Integration;

use Sistrix;
use Fschulze\Sistrix\Exceptions\InvalidConfiguration;

class SistrixServiceProviderTest extends TestCase
{

    /** @test */
    public function it_will_throw_an_exception_if_no_key_is_set()
    {
        $this->app['config']->set('laravel-sistrix.key', '');

        $this->setExpectedException(InvalidConfiguration::class);

        Sistrix::vi();
    }
}