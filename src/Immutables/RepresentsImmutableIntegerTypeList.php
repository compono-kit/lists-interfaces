<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutables;

use ComponoKit\Types\Interfaces\RepresentsInteger;
use ComponoKit\Types\Lists\Interfaces\ComparesTypes;
use ComponoKit\Types\Lists\Interfaces\RepresentsIntegerTypeList;

interface RepresentsImmutableIntegerTypeList extends RepresentsIntegerTypeList
{
	public function exists( int $index ): bool;

	public function get( int $index ): RepresentsInteger;

	public function set( int $index, RepresentsInteger $value ): static;

	public function remove( int $index ): static;

	public function append( RepresentsInteger...$types ): static;

	public function prepend( RepresentsInteger...$types ): static;

	public function appendList( RepresentsIntegerTypeList $list ): static;

	public function prependList( RepresentsIntegerTypeList $list ): static;

	public function reverse(): static;

	public function shuffle(): static;

	public function replace( int $index, RepresentsInteger $type ): static;

	public function unique(): static;

	public function sort( ComparesTypes $comparer ): static;
}
