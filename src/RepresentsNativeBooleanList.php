<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsType;

interface RepresentsNativeBooleanList extends RepresentsType, \Iterator, \Countable
{
	public function equalsValues( RepresentsNativeBooleanList $list ): bool;

	/**
	 * @return array<int, bool>
	 */
	public function toNativeType(): array;

	public function get( int $index ): bool;

	public function count(): int;

	public function current(): bool;
}
