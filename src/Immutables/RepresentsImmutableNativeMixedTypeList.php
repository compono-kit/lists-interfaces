<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutables;

use ComponoKit\Types\Lists\Interfaces\ComparesTypes;
use ComponoKit\Types\Lists\Interfaces\RepresentsMixedTypeList;
use ComponoKit\Types\Lists\Interfaces\RepresentsNativeMixedTypeList;

interface RepresentsImmutableNativeMixedTypeList extends RepresentsNativeMixedTypeList
{
	public function exists( int $index ): bool;

	public function get( int $index ): int|float|string|bool|array;

	public function set( int $index, int|float|string|bool|array $value ): static;

	public function remove( int $index ): static;

	public function append( int|float|string|bool|array...$values ): static;

	public function prepend( int|float|string|bool|array...$values ): static;

	public function appendList( RepresentsNativeMixedTypeList|RepresentsMixedTypeList $list ): static;

	public function prependList( RepresentsNativeMixedTypeList|RepresentsMixedTypeList $list ): static;

	public function reverse(): static;

	public function shuffle(): static;

	public function replace( int $index, int|float|string|bool|array $value ): static;

	public function unique(): static;

	public function sort( ComparesTypes $comparer ): static;
}
