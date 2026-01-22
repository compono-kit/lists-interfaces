<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsFloat;

interface RepresentsFloatTypeList extends RepresentsTypeList
{
	public function equalsValues( RepresentsFloatTypeList $list ): bool;

	/**
	 * @return array<int, RepresentsFloat>
	 */
	public function toNativeType(): array;

	/**
	 * @return array<int, float>
	 */
	public function toFloats(): array;

	/**
	 * @return \Iterator<int, float>
	 */
	public function iterateFloats(): \Iterator;

	public function current(): RepresentsFloat;

	public function first(): RepresentsFloat;

	public function last(): RepresentsFloat;

	public function diff( RepresentsFloatTypeList $list ): RepresentsFloatTypeList;

	public function intersect( RepresentsFloatTypeList $list ): RepresentsFloatTypeList;

	/**
	 * @param int  $count
	 * @param bool $preserveIndices
	 *
	 * @return \Iterator<int, RepresentsFloatTypeList>
	 */
	public function split( int $count, bool $preserveIndices = false ): \Iterator;

	/**
	 * @param int      $index
	 * @param int|null $count
	 * @param bool     $preserveIndices
	 *
	 * @return \Iterator<int, RepresentsFloatTypeList>
	 */
	public function slice( int $index, ?int $count = null, bool $preserveIndices = false ): \Iterator;
}
