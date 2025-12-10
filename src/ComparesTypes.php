<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsType;

interface ComparesTypes
{
	public function compare( RepresentsType $firstType, RepresentsType $secondType ): int;
}
