<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutables;

use ComponoKit\Types\Lists\Interfaces\ComparesValues;
use ComponoKit\Types\Lists\Interfaces\RepresentsStringTypeList;
use ComponoKit\Types\Lists\Interfaces\RepresentsStringValueList;

interface RepresentsImmutableStringValueList extends RepresentsStringValueList
{
	public function exists( int $index ): bool;

	public function get( int $index ): string;

	public function set( int $index, string $value ): static;

	public function remove( int $index ): static;

	public function append( string...$values ): static;

	public function prepend( string...$values ): static;

	public function appendList( RepresentsStringValueList|RepresentsStringTypeList $list ): static;

	public function prependList( RepresentsStringValueList|RepresentsStringTypeList $list ): static;

	public function reverse(): static;

	public function shuffle(): static;

	public function replace( int $index, string $value ): static;

	public function unique(): static;

	public function sort( ComparesValues $comparer ): static;
}
