<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutables;

use ComponoKit\Types\Interfaces\RepresentsFloat;
use ComponoKit\Types\Lists\Interfaces\ComparesTypes;
use ComponoKit\Types\Lists\Interfaces\RepresentsFloatTypeList;

interface RepresentsImmutableFloatTypeList extends RepresentsFloatTypeList
{
	public function exists( int $index ): bool;

	public function get( int $index ): RepresentsFloat;

	public function set( int $index, RepresentsFloat $value ): static;

	public function remove( int $index ): static;

	public function append( RepresentsFloat...$types ): static;

	public function prepend( RepresentsFloat...$types ): static;

	public function appendList( RepresentsFloatTypeList $list ): static;

	public function prependList( RepresentsFloatTypeList $list ): static;

	public function reverse(): static;

	public function shuffle(): static;

	public function replace( int $index, RepresentsFloat $type ): static;

	public function unique(): static;

	public function sort( ComparesTypes $comparer ): static;
}
