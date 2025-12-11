<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsType;

interface RepresentsList extends RepresentsType, \Iterator, \Countable
{
	public function count(): int;

	public function toJson( bool $pretty = false ): string;
}
