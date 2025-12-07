<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

interface RepresentsNativeMixedTypeList extends RepresentsList
{
	public function equalsValues( RepresentsNativeMixedTypeList $list ): bool;

	/**
	 * @return array<int, int|float|string|bool|array>
	 */
	public function toNativeType(): array;

	public function current(): int|float|string|bool|array;
}
