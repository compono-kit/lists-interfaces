<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

interface RepresentsStringValueList extends RepresentsValueList
{
	public function equalsValues( RepresentsStringValueList $list ): bool;

	/**
	 * @return array<int, string>
	 */
	public function toNativeType(): array;

	public function current(): string;

	public function first(): string;

	public function last(): string;

	public function diff( RepresentsStringValueList $list ): RepresentsStringValueList;

	public function intersect( RepresentsStringValueList $list ): RepresentsStringValueList;

	/**
	 * @param int  $count
	 * @param bool $preserveIndices
	 *
	 * @return \Iterator<int, RepresentsStringValueList>
	 */
	public function split( int $count, bool $preserveIndices = false ): \Iterator;

	/**
	 * @param int      $index
	 * @param int|null $count
	 * @param bool     $preserveIndices
	 *
	 * @return \Iterator<int, RepresentsStringValueList>
	 */
	public function slice( int $index, ?int $count = null, bool $preserveIndices = false ): \Iterator;
}
