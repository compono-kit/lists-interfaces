<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsString;

interface RepresentsStringTypeList extends RepresentsTypeList
{
	public function get( int $index ): RepresentsString;

	public function equalsValues( RepresentsStringTypeList $list ): bool;

	/**
	 * @return array<int, RepresentsString>
	 */
	public function toNativeType(): array;

	/**
	 * @return array<int, string>
	 */
	public function toStrings(): array;

	/**
	 * @return \Iterator<int, string>
	 */
	public function iterateStrings(): \Iterator;

	public function current(): RepresentsString;

	public function first(): RepresentsString;

	public function last(): RepresentsString;

	public function diff( RepresentsStringTypeList $list ): RepresentsStringTypeList;

	public function intersect( RepresentsStringTypeList $list ): RepresentsStringTypeList;

	/**
	 * @param int  $count
	 * @param bool $preserveIndices
	 *
	 * @return \Iterator<int, RepresentsStringTypeList>
	 */
	public function split( int $count, bool $preserveIndices = false ): \Iterator;

	/**
	 * @param int      $index
	 * @param int|null $count
	 * @param bool     $preserveIndices
	 *
	 * @return \Iterator<int, RepresentsStringTypeList>
	 */
	public function slice( int $index, ?int $count = null, bool $preserveIndices = false ): \Iterator;
}
