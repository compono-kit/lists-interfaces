<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

interface RepresentsStringValueList extends RepresentsValueList
{
	public function get( int $index ): string;

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
	 *
	 * @return \Iterator<int, RepresentsStringValueList>
	 */
	public function split( int $count ): \Iterator;
}
