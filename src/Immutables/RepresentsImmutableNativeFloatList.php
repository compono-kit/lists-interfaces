<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutables;

use ComponoKit\Types\Lists\Interfaces\ComparesTypes;
use ComponoKit\Types\Lists\Interfaces\RepresentsFloatList;
use ComponoKit\Types\Lists\Interfaces\RepresentsNativeFloatList;

interface RepresentsImmutableNativeFloatList extends RepresentsNativeFloatList
{
	public function exists( int $index ): bool;

	public function get( int $index ): float;

	public function set( int $index, float $value ): static;

	public function remove( int $index ): static;

	public function append( float...$values ): static;

	public function prepend( float...$values ): static;

	public function appendList( RepresentsNativeFloatList|RepresentsFloatList $list ): static;

	public function prependList( RepresentsNativeFloatList|RepresentsFloatList $list ): static;

	public function reverse(): static;

	public function shuffle(): static;

	public function replace( int $index, float $value ): static;

	public function unique(): static;

	public function sort( ComparesTypes $comparer ): static;
}
