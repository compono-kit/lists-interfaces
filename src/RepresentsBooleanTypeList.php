<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsBoolean;

interface RepresentsBooleanTypeList extends RepresentsTypeList
{
	public function equalsValues( RepresentsBooleanTypeList $list ): bool;

	/**
	 * @return array<int, RepresentsBoolean>
	 */
	public function toNativeType(): array;

	/**
	 * @return array<int, bool>
	 */
	public function toBooleans(): array;

	/**
	 * @return \Iterator<int, bool>
	 */
	public function iterateBooleans(): \Iterator;

	public function current(): RepresentsBoolean;

	public function first(): RepresentsBoolean;

	public function last(): RepresentsBoolean;

	public function diff( RepresentsBooleanTypeList $list ): RepresentsBooleanTypeList;

	public function intersect( RepresentsBooleanTypeList $list ): RepresentsBooleanTypeList;

	/**
	 * @param int  $count
	 * @param bool $preserveIndices
	 *
	 * @return \Iterator<int, RepresentsBooleanTypeList>
	 */
	public function split( int $count, bool $preserveIndices = false ): \Iterator;

	/**
	 * @param int      $index
	 * @param int|null $count
	 * @param bool     $preserveIndices
	 *
	 * @return \Iterator<int, RepresentsBooleanTypeList>
	 */
	public function slice( int $index, ?int $count = null, bool $preserveIndices = false ): \Iterator;
}
