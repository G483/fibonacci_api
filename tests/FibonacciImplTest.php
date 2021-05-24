<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use Fib\FibonacciImpl;
use Fib\FibonacciResponse;

final class FibonacciImplTest extends TestCase
{
    private $subject;

    public function setUp(): void
    {
        $this->subject = new FibonacciImpl();
    }

    public function testGetNumberReturnsFirstNumber()
    {
        $n = 0;

        $result = $this->subject->getNumber($n);
        $expected = new FibonacciResponse($n, (string) $n);

        $this->assertInstanceOf(FibonacciResponse::class, $result);
        $this->assertSame($expected->jsonSerialize(), $result->jsonSerialize());
    }
}
