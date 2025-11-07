<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutable;

use ComponoKit\Types\Interfaces\RepresentsBoolean;
use ComponoKit\Types\Lists\Interfaces\RepresentsBooleanList;

interface RepresentsImmutableBooleanList extends RepresentsBooleanList
{
	public function append( RepresentsBoolean...$types ): static;

	public function prepend( RepresentsBoolean...$types ): static;

	public function remove( int $index ): static;

	public function appendList( RepresentsBooleanList $list ): static;

	public function prependList( RepresentsBooleanList $list ): static;
}
