<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutables;

use ComponoKit\Types\Interfaces\RepresentsBoolean;
use ComponoKit\Types\Lists\Interfaces\RepresentsBooleanTypeList;
use ComponoKit\Types\Lists\Interfaces\RepresentsImmutableTypeList;

interface RepresentsImmutableBooleanTypeList extends RepresentsBooleanTypeList, RepresentsImmutableTypeList
{
	public function replace( int $index, RepresentsBoolean $type ): static;

	public function append( RepresentsBoolean...$types ): static;

	public function prepend( RepresentsBoolean...$types ): static;

	public function appendList( RepresentsBooleanTypeList $list ): static;

	public function prependList( RepresentsBooleanTypeList $list ): static;
}
