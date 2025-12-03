<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutables;

use ComponoKit\Types\Interfaces\RepresentsFloat;
use ComponoKit\Types\Lists\Interfaces\RepresentsFloatList;

interface RepresentsImmutableFloatList extends RepresentsFloatList
{
	public function get( int $index ): RepresentsFloat;

	public function set( int $index, RepresentsFloat $value ): static;

	public function remove( int $index ): static;

	public function append( RepresentsFloat...$types ): static;

	public function prepend( RepresentsFloat...$types ): static;

	public function appendList( RepresentsFloatList $list ): static;

	public function prependList( RepresentsFloatList $list ): static;
}
