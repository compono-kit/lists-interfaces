<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsInteger;
use ComponoKit\Types\Interfaces\RepresentsType;

interface RepresentsIntegerList extends RepresentsType, \Iterator, \Countable
{
	public function equalsValues( RepresentsIntegerList $list ): bool;

	/**
	 * @return array<int, RepresentsInteger>
	 */
	public function toNativeType(): array;

	/**
	 * @return array<int, int>
	 */
	public function toIntegers(): array;

	/**
	 * @return \Iterator<int, int>
	 */
	public function iterateIntegers(): \Iterator;

	public function current(): RepresentsInteger;

	public function count(): int;
}
