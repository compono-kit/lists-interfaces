<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

interface RepresentsBooleanValueList extends RepresentsValueList
{
	public function get( int $index ): bool;

	public function equalsValues( RepresentsBooleanValueList $list ): bool;

	/**
	 * @return array<int, bool>
	 */
	public function toNativeType(): array;

	public function current(): bool;

	public function first(): bool;

	public function last(): bool;

	public function diff( RepresentsBooleanValueList $list ): RepresentsBooleanValueList;

	public function intersect( RepresentsBooleanValueList $list ): RepresentsBooleanValueList;

	/**
	 * @param int  $count
	 *
	 * @return \Iterator<int, RepresentsBooleanValueList>
	 */
	public function split( int $count ): \Iterator;
}
