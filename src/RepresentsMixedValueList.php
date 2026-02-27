<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

interface RepresentsMixedValueList extends RepresentsValueList
{
	public function get( int $index ): int|float|string|bool|array;

	public function equalsValues( RepresentsMixedValueList $list ): bool;

	/**
	 * @return array<int, int|float|string|bool|array>
	 */
	public function toNativeType(): array;

	public function current(): int|float|string|bool|array;

	public function first(): int|float|string|bool|array;

	public function last(): int|float|string|bool|array;

	public function diff( RepresentsMixedValueList $list ): RepresentsMixedValueList;

	public function intersect( RepresentsMixedValueList $list ): RepresentsMixedValueList;

	/**
	 * @param int  $count
	 * @param bool $preserveIndices
	 *
	 * @return \Iterator<int, RepresentsMixedValueList>
	 */
	public function split( int $count, bool $preserveIndices = false ): \Iterator;

	/**
	 * @param int      $index
	 * @param int|null $count
	 * @param bool     $preserveIndices
	 *
	 * @return \Iterator<int, RepresentsMixedValueList>
	 */
	public function slice( int $index, ?int $count = null, bool $preserveIndices = false ): \Iterator;
}
