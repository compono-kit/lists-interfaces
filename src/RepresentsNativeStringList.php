<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

interface RepresentsNativeStringList extends RepresentsList
{
	public function equalsValues( RepresentsNativeStringList $list ): bool;

	/**
	 * @return array<int, string>
	 */
	public function toNativeType(): array;

	public function current(): string;
}
