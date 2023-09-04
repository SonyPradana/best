<?php

declare(strict_types=1);

use Pest\PendingCalls\TestCall;

if (! function_exists('should')) {
    /**
     * Adds the given closure as a test. The first argument
     * is the test description; the second argument is
     * a closure that contains the test expectations.
     *
     * @return Expectable|TestCall|TestCase|mixed
     */
    function should(string $description, Closure $closure = null)
    {
        $description = sprintf('should %s', $description);

        /** @var TestCall $test */
        $test = test($description, $closure);

        return $test;
    }
}

if (! function_exists('verify')) {
    /**
     * Adds the given closure as a test. The first argument
     * is the test description; the second argument is
     * a closure that contains the test expectations.
     *
     * @return Expectable|TestCall|TestCase|mixed
     */
    function verify(string $description, Closure $closure = null)
    {
        $description = sprintf('verify %s', $description);

        /** @var TestCall $test */
        $test = test($description, $closure);

        return $test;
    }
}

if (! function_exists('check')) {
    /**
     * Adds the given closure as a test. The first argument
     * is the test description; the second argument is
     * a closure that contains the test expectations.
     *
     * @return Expectable|TestCall|TestCase|mixed
     */
    function check(string $description, Closure $closure = null)
    {
        $description = sprintf('check %s', $description);

        /** @var TestCall $test */
        $test = test($description, $closure);

        return $test;
    }
}
