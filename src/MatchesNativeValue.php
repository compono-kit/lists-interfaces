<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

interface MatchesNativeValue
{
	public function matches( int|float|string|bool|array $value ): bool;
}
