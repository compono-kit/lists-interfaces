<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutables;

use ComponoKit\Types\Interfaces\RepresentsBoolean;
use ComponoKit\Types\Lists\Interfaces\ComparesTypes;
use ComponoKit\Types\Lists\Interfaces\RepresentsBooleanTypeList;

interface RepresentsImmutableBooleanTypeList extends RepresentsBooleanTypeList
{
	public function exists( int $index ): bool;

	public function get( int $index ): RepresentsBoolean;

	public function set( int $index, RepresentsBoolean $value ): static;

	public function remove( int $index ): static;

	public function append( RepresentsBoolean...$types ): static;

	public function prepend( RepresentsBoolean...$types ): static;

	public function appendList( RepresentsBooleanTypeList $list ): static;

	public function prependList( RepresentsBooleanTypeList $list ): static;

	public function reverse(): static;

	public function shuffle(): static;

	public function replace( int $index, RepresentsBoolean $type ): static;

	public function unique(): static;

	public function sort( ComparesTypes $comparer ): static;
}
