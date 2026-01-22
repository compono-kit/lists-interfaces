<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutables;

use ComponoKit\Types\Lists\Interfaces\ComparesTypes;
use ComponoKit\Types\Lists\Interfaces\RepresentsFloatTypeList;
use ComponoKit\Types\Lists\Interfaces\RepresentsFloatValueList;

interface RepresentsImmutableFloatValueList extends RepresentsFloatValueList
{
	public function exists( int $index ): bool;

	public function get( int $index ): float;

	public function set( int $index, float $value ): static;

	public function remove( int $index ): static;

	public function append( float...$values ): static;

	public function prepend( float...$values ): static;

	public function appendList( RepresentsFloatValueList|RepresentsFloatTypeList $list ): static;

	public function prependList( RepresentsFloatValueList|RepresentsFloatTypeList $list ): static;

	public function reverse(): static;

	public function shuffle(): static;

	public function replace( int $index, float $value ): static;

	public function unique(): static;

	public function sort( ComparesTypes $comparer ): static;
}
