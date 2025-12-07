<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsString;

interface RepresentsStringList extends RepresentsList
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
}
