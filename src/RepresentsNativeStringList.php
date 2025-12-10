<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

interface RepresentsNativeStringList extends RepresentsList
{
	public function equalsValues( RepresentsNativeStringList $list ): bool;

	/**
	 * @return array<int, string>
	 */
	public function toNativeType(): array;

	public function current(): string;

	public function first(): string;

	public function last(): string;

	public function diff( RepresentsNativeStringList $list ): RepresentsNativeStringList;

	public function intersect( RepresentsNativeStringList $list ): RepresentsNativeStringList;

	/**
	 * @param int  $count
	 * @param bool $preserveIndices
	 *
	 * @return \Iterator<int, RepresentsNativeStringList>
	 */
	public function split( int $count, bool $preserveIndices = false ): \Iterator;

	/**
	 * @param int      $index
	 * @param int|null $count
	 * @param bool     $preserveIndices
	 *
	 * @return \Iterator<int, RepresentsNativeStringList>
	 */
	public function slice( int $index, ?int $count = null, bool $preserveIndices = false ): \Iterator;
}
