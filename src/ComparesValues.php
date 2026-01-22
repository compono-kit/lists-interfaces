<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

interface ComparesValues
{
	public function compare( int|float|string|bool|array $firstValue, int|float|string|bool|array $secondValue ): int;
}
