<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsType;

interface RepresentsNativeMixedTypeList extends RepresentsType, \Iterator, \Countable
{
	public function equalsValues( RepresentsNativeMixedTypeList $list ): bool;

	/**
	 * @return array<int, int|float|string|bool|array>
	 */
	public function toNativeType(): array;

	public function get( int $index ): int|float|string|bool|array;

	public function count(): int;

	public function current(): int|float|string|bool|array;
}
