<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsString;
use ComponoKit\Types\Interfaces\RepresentsType;

interface RepresentsStringList extends RepresentsType, \Iterator, \Countable
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

	public function get( int $index ): RepresentsString;

	public function count(): int;

	public function current(): RepresentsString;
}
