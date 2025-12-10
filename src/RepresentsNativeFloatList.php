<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

interface RepresentsNativeFloatList extends RepresentsList
{
	public function equalsValues( RepresentsNativeFloatList $list ): bool;

	/**
	 * @return array<int, float>
	 */
	public function toNativeType(): array;

	public function current(): float;

	public function first(): float;

	public function last(): float;

	public function diff( RepresentsNativeFloatList $list ): RepresentsNativeFloatList;

	public function intersect( RepresentsNativeFloatList $list ): RepresentsNativeFloatList;

	/**
	 * @param int  $count
	 * @param bool $preserveIndices
	 *
	 * @return \Iterator<int, RepresentsNativeFloatList>
	 */
	public function split( int $count, bool $preserveIndices = false ): \Iterator;

	/**
	 * @param int      $index
	 * @param int|null $count
	 * @param bool     $preserveIndices
	 *
	 * @return \Iterator<int, RepresentsNativeFloatList>
	 */
	public function slice( int $index, ?int $count = null, bool $preserveIndices = false ): \Iterator;
}
