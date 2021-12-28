<?php

namespace App\Services;

use JetBrains\PhpStorm\Pure;

class GreetingService
{
    /**
     * @param string $greeting
     * @param string $whom
     */
    public function __construct(
        private string $greeting = 'Hello',
        private string $whom = 'World',
    ) {
    }

    /**
     * @param string $greeting
     * @return $this
     */
    public function setGreeting(string $greeting): static
    {
        $this->greeting = $greeting;

        return $this;
    }

    /**
     * @param string $whom
     * @return $this
     */
    public function setWhom(string $whom): static
    {
        $this->whom = $whom;

        return $this;
    }

    /**
     * @param string|null $whom
     * @param string|null $greeting
     * @return string
     */
    #[Pure] public function toGreet(?string $whom = null, ?string $greeting = null): string
    {
        return $this->toPrint(
            $greeting ?? $this->greeting,
            $whom ?? $this->whom,
        );
    }

    /**
     * @param string $greeting
     * @param string $whom
     * @return string
     */
    private function toPrint(string $greeting, string $whom): string
    {
        return sprintf('%s, %s!' . PHP_EOL, $greeting, ucfirst($whom));
    }
}
