<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutables;

use ComponoKit\Types\Lists\Interfaces\ComparesTypes;
use ComponoKit\Types\Lists\Interfaces\RepresentsBooleanList;
use ComponoKit\Types\Lists\Interfaces\RepresentsNativeBooleanList;

interface RepresentsImmutableNativeBooleanList extends RepresentsNativeBooleanList
{
	public function exists( int $index ): bool;

	public function get( int $index ): bool;

	public function set( int $index, bool $value ): static;

	public function remove( int $index ): static;

	public function append( bool...$values ): static;

	public function prepend( bool...$values ): static;

	public function appendList( RepresentsNativeBooleanList|RepresentsBooleanList $list ): static;

	public function prependList( RepresentsNativeBooleanList|RepresentsBooleanList $list ): static;

	public function reverse(): static;

	public function shuffle(): static;

	public function replace( int $index, bool $value ): static;

	public function unique(): static;

	public function sort( ComparesTypes $comparer ): static;
}
