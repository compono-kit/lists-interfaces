<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutables;

use ComponoKit\Types\Lists\Interfaces\RepresentsFloatList;
use ComponoKit\Types\Lists\Interfaces\RepresentsNativeFloatList;

interface RepresentsImmutableNativeFloatList extends RepresentsNativeFloatList
{
	public function append( float...$values ): static;

	public function prepend( float...$values ): static;

	public function remove( int $index ): static;

	public function appendList( RepresentsNativeFloatList|RepresentsFloatList $list ): static;

	public function prependList( RepresentsNativeFloatList|RepresentsFloatList $list ): static;
}
