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
}
