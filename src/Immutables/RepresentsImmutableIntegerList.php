<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutables;

use ComponoKit\Types\Interfaces\RepresentsInteger;
use ComponoKit\Types\Lists\Interfaces\RepresentsIntegerList;

interface RepresentsImmutableIntegerList extends RepresentsIntegerList
{
	public function get( int $index ): RepresentsInteger;

	public function set( int $index, RepresentsInteger $value ): static;

	public function remove( int $index ): static;

	public function exists( int $index ): bool;

	public function append( RepresentsInteger...$types ): static;

	public function prepend( RepresentsInteger...$types ): static;

	public function appendList( RepresentsIntegerList $list ): static;

	public function prependList( RepresentsIntegerList $list ): static;
}
