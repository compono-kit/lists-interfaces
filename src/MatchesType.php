<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsType;

interface MatchesType
{
	public function matches( RepresentsType $type ): bool;
}
