<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsType;

interface RepresentsMixedTypeList extends RepresentsTypeList
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

	public function current(): RepresentsType;

	public function first(): RepresentsType;

	public function last(): RepresentsType;

	public function diff( RepresentsMixedTypeList $list ): RepresentsMixedTypeList;

	public function intersect( RepresentsMixedTypeList $list ): RepresentsMixedTypeList;

	/**
	 * @param int  $count
	 * @param bool $preserveIndices
	 *
	 * @return \Iterator<int, RepresentsMixedTypeList>
	 */
	public function split( int $count, bool $preserveIndices = false ): \Iterator;

	/**
	 * @param int      $index
	 * @param int|null $count
	 * @param bool     $preserveIndices
	 *
	 * @return \Iterator<int, RepresentsMixedTypeList>
	 */
	public function slice( int $index, ?int $count = null, bool $preserveIndices = false ): \Iterator;
}
