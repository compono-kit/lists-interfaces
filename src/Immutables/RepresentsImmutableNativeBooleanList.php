<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutable;

use ComponoKit\Types\Lists\Interfaces\RepresentsBooleanList;
use ComponoKit\Types\Lists\Interfaces\RepresentsNativeBooleanList;

interface RepresentsImmutableNativeBooleanList extends RepresentsNativeBooleanList
{
	public function append( bool...$values ): static;

	public function prepend( bool...$values ): static;

	public function remove( int $index ): static;

	public function appendList( RepresentsNativeBooleanList|RepresentsBooleanList $list ): static;

	public function prependList( RepresentsNativeBooleanList|RepresentsBooleanList $list ): static;
}
