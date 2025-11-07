<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsType;

interface RepresentsNativeIntegerList extends RepresentsType, \Iterator, \Countable
{
	public function equalsValues( RepresentsNativeIntegerList $list ): bool;

	/**
	 * @return array<int, int>
	 */
	public function toNativeType(): array;

	public function get( int $index ): int;

	public function count(): int;

	public function current(): int;
}
