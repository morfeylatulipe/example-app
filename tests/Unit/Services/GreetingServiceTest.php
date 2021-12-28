<?php

namespace Tests\Unit\Services;

use App\Services\GreetingService;
use PHPUnit\Framework\TestCase;

class GreetingServiceTest extends TestCase
{
    private GreetingService $greetingService;

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->greetingService = resolve(GreetingService::class);
    }

    public function test__construct()
    {
        $this->__construct();
        $this->assertInstanceOf(GreetingService::class, $this->greetingService);
    }

    public function testSetGreeting()
    {
        $this->__construct();
        $this->greetingService->setGreeting('Hi');

        $this->assertEquals('Hi, World!' . PHP_EOL, $this->greetingService->toGreet());
    }

    public function testSetWhom()
    {
        $this->__construct();
        $this->greetingService->setWhom('Me');

        $this->assertEquals('Hello, Me!' . PHP_EOL, $this->greetingService->toGreet());
    }

    public function testToGreet()
    {
        $this->__construct();

        $this->assertEquals('Hello, World!' . PHP_EOL, $this->greetingService->toGreet());
    }
}
