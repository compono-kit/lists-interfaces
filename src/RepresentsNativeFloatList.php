<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsType;

interface RepresentsNativeFloatList extends RepresentsType, \Iterator, \Countable
{
	public function equalsValues( RepresentsNativeFloatList $list ): bool;

	/**
	 * @return array<int, float>
	 */
	public function toNativeType(): array;

	public function current(): float;

	public function count(): int;
}
