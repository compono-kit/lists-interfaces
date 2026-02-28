<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

interface RepresentsIntegerValueList extends RepresentsValueList
{
	public function get( int $index ): int;

	public function equalsValues( RepresentsIntegerValueList $list ): bool;

	/**
	 * @return array<int, int>
	 */
	public function toNativeType(): array;

	public function current(): int;

	public function first(): int;

	public function last(): int;

	public function diff( RepresentsIntegerValueList $list ): RepresentsIntegerValueList;

	public function intersect( RepresentsIntegerValueList $list ): RepresentsIntegerValueList;

	/**
	 * @param int  $count
	 *
	 * @return \Iterator<int, RepresentsIntegerValueList>
	 */
	public function split( int $count ): \Iterator;
}
