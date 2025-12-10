<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutables;

use ComponoKit\Types\Interfaces\RepresentsString;
use ComponoKit\Types\Lists\Interfaces\ComparesTypes;
use ComponoKit\Types\Lists\Interfaces\RepresentsStringList;

interface RepresentsImmutableStringList extends RepresentsStringList
{
	public function exists( int $index ): bool;

	public function get( int $index ): RepresentsString;

	public function set( int $index, RepresentsString $value ): static;

	public function remove( int $index ): static;

	public function append( RepresentsString...$types ): static;

	public function prepend( RepresentsString...$types ): static;

	public function appendList( RepresentsStringList $list ): static;

	public function prependList( RepresentsStringList $list ): static;

	public function reverse(): static;

	public function shuffle(): static;

	public function replace( int $index, RepresentsString $type ): static;

	public function unique(): static;

	public function sort( ComparesTypes $comparer ): static;
}
