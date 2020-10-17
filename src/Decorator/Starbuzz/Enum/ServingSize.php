<?php declare(strict_types=1);

namespace App\Decorator\Starbuzz\Enum;

use App\Decorator\Starbuzz\Mocha;
use InvalidArgumentException;

use function in_array;

class ServingSize
{
    private const VALUES = ['small', 'medium', 'large'];

    private string $value;

    public function __construct(string $size)
    {
        if (!in_array($size, self::VALUES, true)) {
            throw new InvalidArgumentException('invalid SIZE');
        }
        $this->value = $size;
    }

    public function value(): string
    {
        return $this->value;
    }

    public static function small(): self
    {
        return new self('small');
    }

    public static function medium(): self
    {
        return new self('medium');
    }

    public static function large(): self
    {
        return new self('large');
    }

    public function getAll(): array
    {
        return self::VALUES;
    }

}
