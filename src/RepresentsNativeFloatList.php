<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

interface RepresentsNativeFloatList extends RepresentsList
{
	public function equalsValues( RepresentsNativeFloatList $list ): bool;

	/**
	 * @return array<int, float>
	 */
	public function toNativeType(): array;

	public function current(): float;
}
