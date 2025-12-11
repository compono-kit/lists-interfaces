<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsString;

interface RepresentsStringList extends RepresentsTypeList
{
	public function equalsValues( RepresentsStringList $list ): bool;

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

	public function diff( RepresentsStringList $list ): RepresentsStringList;

	public function intersect( RepresentsStringList $list ): RepresentsStringList;

	/**
	 * @param int  $count
	 * @param bool $preserveIndices
	 *
	 * @return \Iterator<int, RepresentsStringList>
	 */
	public function split( int $count, bool $preserveIndices = false ): \Iterator;

	/**
	 * @param int      $index
	 * @param int|null $count
	 * @param bool     $preserveIndices
	 *
	 * @return \Iterator<int, RepresentsStringList>
	 */
	public function slice( int $index, ?int $count = null, bool $preserveIndices = false ): \Iterator;
}
