<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

interface RepresentsNativeIntegerList extends RepresentsList
{
	public function equalsValues( RepresentsNativeIntegerList $list ): bool;

	/**
	 * @return array<int, int>
	 */
	public function toNativeType(): array;

	public function current(): int;
}
