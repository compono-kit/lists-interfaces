<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsBoolean;
use ComponoKit\Types\Interfaces\RepresentsType;

interface RepresentsBooleanList extends RepresentsType, \Iterator, \Countable
{
	public function equalsValues( RepresentsBooleanList $list ): bool;

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

	public function count(): int;
}
