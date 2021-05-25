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

    public function testGetNumberReturnsFloat()
    {
        $n = 93; // Numbers above 92 should start returning floats

        $result = $this->subject->getNumber($n);
        $expected = new FibonacciResponse($n, "1.2200160415122E+19");

        $this->assertInstanceOf(FibonacciResponse::class, $result);
        $this->assertSame($expected->jsonSerialize(), $result->jsonSerialize());
    }

    public function testGetNumberReturnsInfinityForExtraLargeInputs()
    {
        $n = 9001;

        $result = $this->subject->getNumber($n);
        $expected = new FibonacciResponse($n, "INF");

        $this->assertInstanceOf(FibonacciResponse::class, $result);
        $this->assertSame($expected->jsonSerialize(), $result->jsonSerialize());
    }
}
