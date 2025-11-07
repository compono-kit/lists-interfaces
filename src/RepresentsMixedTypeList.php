<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsType;

interface RepresentsMixedTypeList extends RepresentsType, \Iterator, \Countable
{
	public function equalsValues( RepresentsMixedTypeList $list ): bool;

	/**
	 * @return array<int, RepresentsType>
	 */
	public function toNativeType(): array;

	/**
	 * @return array<int, int|float|string|bool|array>
	 */
	public function toNativeTypes(): array;

	/**
	 * @return \Iterator<int, int|float|string|bool|array>
	 */
	public function iterateNativeTypes(): \Iterator;

	public function get( int $index ): RepresentsType;

	public function count(): int;

	public function current(): RepresentsType;
}
