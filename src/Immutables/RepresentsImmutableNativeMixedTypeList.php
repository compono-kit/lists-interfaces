<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutables;

use ComponoKit\Types\Lists\Interfaces\RepresentsNativeMixedTypeList;
use ComponoKit\Types\Lists\Interfaces\RepresentsMixedTypeList;

interface RepresentsImmutableNativeMixedTypeList extends RepresentsNativeMixedTypeList
{
	public function get( int $index ): int|float|string|bool|array;

	public function set( int $index, int|float|string|bool|array $value ): static;

	public function remove( int|float|string|bool|array $index ): static;

	public function exists( int $index ): bool;

	public function append( int|float|string|bool|array...$values ): static;

	public function prepend( int|float|string|bool|array...$values ): static;

	public function appendList( RepresentsNativeMixedTypeList|RepresentsMixedTypeList $list ): static;

	public function prependList( RepresentsNativeMixedTypeList|RepresentsMixedTypeList $list ): static;
}
