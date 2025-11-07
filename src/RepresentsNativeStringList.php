<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsType;

interface RepresentsNativeStringList extends RepresentsType, \Iterator, \Countable
{
	public function equalsValues( RepresentsNativeStringList $list ): bool;

	/**
	 * @return array<int, string>
	 */
	public function toNativeType(): array;

	public function get( int $index ): string;

	public function count(): int;

	public function current(): string;
}
