<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

interface RepresentsFloatValueList extends RepresentsValueList
{
	public function equalsValues( RepresentsFloatValueList $list ): bool;

	/**
	 * @return array<int, float>
	 */
	public function toNativeType(): array;

	public function current(): float;

	public function first(): float;

	public function last(): float;

	public function diff( RepresentsFloatValueList $list ): RepresentsFloatValueList;

	public function intersect( RepresentsFloatValueList $list ): RepresentsFloatValueList;

	/**
	 * @param int  $count
	 * @param bool $preserveIndices
	 *
	 * @return \Iterator<int, RepresentsFloatValueList>
	 */
	public function split( int $count, bool $preserveIndices = false ): \Iterator;

	/**
	 * @param int      $index
	 * @param int|null $count
	 * @param bool     $preserveIndices
	 *
	 * @return \Iterator<int, RepresentsFloatValueList>
	 */
	public function slice( int $index, ?int $count = null, bool $preserveIndices = false ): \Iterator;
}
