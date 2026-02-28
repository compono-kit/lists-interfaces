<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsFloat;

interface RepresentsFloatTypeList extends RepresentsTypeList
{
	public function get( int $index ): RepresentsFloat;

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
	 *
	 * @return \Iterator<int, RepresentsFloatTypeList>
	 */
	public function split( int $count ): \Iterator;
}
