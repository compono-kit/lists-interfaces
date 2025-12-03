<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsFloat;
use ComponoKit\Types\Interfaces\RepresentsType;

interface RepresentsFloatList extends RepresentsType, \Iterator, \Countable
{
	public function equalsValues( RepresentsFloatList $list ): bool;

	/**
	 * @return array<int, RepresentsFloat>
	 */
	public function toNativeType(): array;

	/**
	 * @return array<int, float>
	 */
	public function toFloats(): array;

	/**
	 * @return \Iterator<int, float>
	 */
	public function iterateFloats(): \Iterator;

	public function current(): RepresentsFloat;

	public function count(): int;
}
