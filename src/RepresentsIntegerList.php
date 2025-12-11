<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsInteger;

interface RepresentsIntegerList extends RepresentsTypeList
{
	public function equalsValues( RepresentsIntegerList $list ): bool;

	/**
	 * @return array<int, RepresentsInteger>
	 */
	public function toNativeType(): array;

	/**
	 * @return array<int, int>
	 */
	public function toIntegers(): array;

	/**
	 * @return \Iterator<int, int>
	 */
	public function iterateIntegers(): \Iterator;

	public function current(): RepresentsInteger;

	public function first(): RepresentsInteger;

	public function last(): RepresentsInteger;

	public function diff( RepresentsIntegerList $list ): RepresentsIntegerList;

	public function intersect( RepresentsIntegerList $list ): RepresentsIntegerList;

	/**
	 * @param int  $count
	 * @param bool $preserveIndices
	 *
	 * @return \Iterator<int, RepresentsIntegerList>
	 */
	public function split( int $count, bool $preserveIndices = false ): \Iterator;

	/**
	 * @param int      $index
	 * @param int|null $count
	 * @param bool     $preserveIndices
	 *
	 * @return \Iterator<int, RepresentsIntegerList>
	 */
	public function slice( int $index, ?int $count = null, bool $preserveIndices = false ): \Iterator;
}
