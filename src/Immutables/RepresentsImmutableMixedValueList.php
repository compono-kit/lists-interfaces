<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutables;

use ComponoKit\Types\Lists\Interfaces\ComparesValues;
use ComponoKit\Types\Lists\Interfaces\RepresentsMixedTypeList;
use ComponoKit\Types\Lists\Interfaces\RepresentsMixedValueList;

interface RepresentsImmutableMixedValueList extends RepresentsMixedValueList
{
	public function exists( int $index ): bool;

	public function get( int $index ): int|float|string|bool|array;

	public function set( int $index, int|float|string|bool|array $value ): static;

	public function remove( int $index ): static;

	public function append( int|float|string|bool|array...$values ): static;

	public function prepend( int|float|string|bool|array...$values ): static;

	public function appendList( RepresentsMixedValueList|RepresentsMixedTypeList $list ): static;

	public function prependList( RepresentsMixedValueList|RepresentsMixedTypeList $list ): static;

	public function reverse(): static;

	public function shuffle(): static;

	public function replace( int $index, int|float|string|bool|array $value ): static;

	public function unique(): static;

	public function sort( ComparesValues $comparer ): static;
}
