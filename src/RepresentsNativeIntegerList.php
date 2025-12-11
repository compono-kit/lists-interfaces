<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

interface RepresentsNativeIntegerList extends RepresentsNativeValueList
{
	public function equalsValues( RepresentsNativeIntegerList $list ): bool;

	/**
	 * @return array<int, int>
	 */
	public function toNativeType(): array;

	public function current(): int;

	public function first(): int;

	public function last(): int;

	public function diff( RepresentsNativeIntegerList $list ): RepresentsNativeIntegerList;

	public function intersect( RepresentsNativeIntegerList $list ): RepresentsNativeIntegerList;

	/**
	 * @param int  $count
	 * @param bool $preserveIndices
	 *
	 * @return \Iterator<int, RepresentsNativeIntegerList>
	 */
	public function split( int $count, bool $preserveIndices = false ): \Iterator;

	/**
	 * @param int      $index
	 * @param int|null $count
	 * @param bool     $preserveIndices
	 *
	 * @return \Iterator<int, RepresentsNativeIntegerList>
	 */
	public function slice( int $index, ?int $count = null, bool $preserveIndices = false ): \Iterator;
}
