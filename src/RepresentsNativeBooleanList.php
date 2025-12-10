<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

interface RepresentsNativeBooleanList extends RepresentsList
{
	public function equalsValues( RepresentsNativeBooleanList $list ): bool;

	/**
	 * @return array<int, bool>
	 */
	public function toNativeType(): array;

	public function current(): bool;

	public function first(): bool;

	public function last(): bool;

	public function diff( RepresentsNativeBooleanList $list ): RepresentsNativeBooleanList;

	public function intersect( RepresentsNativeBooleanList $list ): RepresentsNativeBooleanList;

	/**
	 * @param int  $count
	 * @param bool $preserveIndices
	 *
	 * @return \Iterator<int, RepresentsNativeBooleanList>
	 */
	public function split( int $count, bool $preserveIndices = false ): \Iterator;

	/**
	 * @param int      $index
	 * @param int|null $count
	 * @param bool     $preserveIndices
	 *
	 * @return \Iterator<int, RepresentsNativeBooleanList>
	 */
	public function slice( int $index, ?int $count = null, bool $preserveIndices = false ): \Iterator;
}
