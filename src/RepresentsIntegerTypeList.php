<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsInteger;

interface RepresentsIntegerTypeList extends RepresentsTypeList
{
	public function get( int $index ): RepresentsInteger;

	public function equalsValues( RepresentsIntegerTypeList $list ): bool;

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

	public function diff( RepresentsIntegerTypeList $list ): RepresentsIntegerTypeList;

	public function intersect( RepresentsIntegerTypeList $list ): RepresentsIntegerTypeList;

	/**
	 * @param int  $count
	 *
	 * @return \Iterator<int, RepresentsIntegerTypeList>
	 */
	public function split( int $count ): \Iterator;

	/**
	 * @param int      $index
	 * @param int|null $count
	 *
	 * @return \Iterator<int, RepresentsIntegerTypeList>
	 */
	public function slice( int $index, ?int $count = null ): \Iterator;
}
