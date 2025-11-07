<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutable;

use ComponoKit\Types\Interfaces\RepresentsFloat;
use ComponoKit\Types\Lists\Interfaces\RepresentsFloatList;

interface RepresentsImmutableFloatList extends RepresentsFloatList
{
	public function append( RepresentsFloat...$types ): static;

	public function prepend( RepresentsFloat...$types ): static;

	public function remove( int $index ): static;

	public function appendList( RepresentsFloatList $list ): static;

	public function prependList( RepresentsFloatList $list ): static;
}
