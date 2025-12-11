<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

interface RepresentsNativeMixedTypeList extends RepresentsNativeValueList
{
	public function equalsValues( RepresentsNativeMixedTypeList $list ): bool;

	/**
	 * @return array<int, int|float|string|bool|array>
	 */
	public function toNativeType(): array;

	public function current(): int|float|string|bool|array;

	public function first(): int|float|string|bool|array;

	public function last(): int|float|string|bool|array;

	public function diff( RepresentsNativeMixedTypeList $list ): RepresentsNativeMixedTypeList;

	public function intersect( RepresentsNativeMixedTypeList $list ): RepresentsNativeMixedTypeList;

	/**
	 * @param int  $count
	 * @param bool $preserveIndices
	 *
	 * @return \Iterator<int, RepresentsNativeMixedTypeList>
	 */
	public function split( int $count, bool $preserveIndices = false ): \Iterator;

	/**
	 * @param int      $index
	 * @param int|null $count
	 * @param bool     $preserveIndices
	 *
	 * @return \Iterator<int, RepresentsNativeMixedTypeList>
	 */
	public function slice( int $index, ?int $count = null, bool $preserveIndices = false ): \Iterator;
}
