<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutables;

use ComponoKit\Types\Lists\Interfaces\RepresentsIntegerList;
use ComponoKit\Types\Lists\Interfaces\RepresentsNativeIntegerList;

interface RepresentsImmutableNativeIntegerList extends RepresentsNativeIntegerList
{
	public function get( int $index ): int;

	public function set( int $index, int $value ): static;

	public function remove( int $index ): static;

	public function exists( int $index ): bool;

	public function append( int...$values ): static;

	public function prepend( int...$values ): static;

	public function appendList( RepresentsNativeIntegerList|RepresentsIntegerList $list ): static;

	public function prependList( RepresentsNativeIntegerList|RepresentsIntegerList $list ): static;
}
