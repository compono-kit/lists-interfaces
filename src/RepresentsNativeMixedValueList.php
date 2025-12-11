<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

interface RepresentsNativeMixedValueList extends RepresentsNativeValueList
{
	public function equalsValues( RepresentsNativeMixedValueList $list ): bool;

	/**
	 * @return array<int, int|float|string|bool|array>
	 */
	public function toNativeType(): array;

	public function current(): int|float|string|bool|array;

	public function first(): int|float|string|bool|array;

	public function last(): int|float|string|bool|array;

	public function diff( RepresentsNativeMixedValueList $list ): RepresentsNativeMixedValueList;

	public function intersect( RepresentsNativeMixedValueList $list ): RepresentsNativeMixedValueList;

	/**
	 * @param int  $count
	 * @param bool $preserveIndices
	 *
	 * @return \Iterator<int, RepresentsNativeMixedValueList>
	 */
	public function split( int $count, bool $preserveIndices = false ): \Iterator;

	/**
	 * @param int      $index
	 * @param int|null $count
	 * @param bool     $preserveIndices
	 *
	 * @return \Iterator<int, RepresentsNativeMixedValueList>
	 */
	public function slice( int $index, ?int $count = null, bool $preserveIndices = false ): \Iterator;
}
