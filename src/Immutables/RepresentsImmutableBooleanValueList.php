<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutables;

use ComponoKit\Types\Lists\Interfaces\ComparesValues;
use ComponoKit\Types\Lists\Interfaces\RepresentsBooleanTypeList;
use ComponoKit\Types\Lists\Interfaces\RepresentsBooleanValueList;

interface RepresentsImmutableBooleanValueList extends RepresentsBooleanValueList
{
	public function exists( int $index ): bool;

	public function get( int $index ): bool;

	public function set( int $index, bool $value ): static;

	public function remove( int $index ): static;

	public function append( bool...$values ): static;

	public function prepend( bool...$values ): static;

	public function appendList( RepresentsBooleanValueList|RepresentsBooleanTypeList $list ): static;

	public function prependList( RepresentsBooleanValueList|RepresentsBooleanTypeList $list ): static;

	public function reverse(): static;

	public function shuffle(): static;

	public function replace( int $index, bool $value ): static;

	public function unique(): static;

	public function sort( ComparesValues $comparer ): static;
}
