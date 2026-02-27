<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutables;

use ComponoKit\Types\Lists\Interfaces\RepresentsBooleanTypeList;
use ComponoKit\Types\Lists\Interfaces\RepresentsBooleanValueList;
use ComponoKit\Types\Lists\Interfaces\RepresentsImmutableValueList;

interface RepresentsImmutableBooleanValueList extends RepresentsBooleanValueList, RepresentsImmutableValueList
{
	public function replace( int $index, bool $value ): static;

	public function append( bool...$values ): static;

	public function prepend( bool...$values ): static;

	public function appendList( RepresentsBooleanValueList|RepresentsBooleanTypeList $list ): static;

	public function prependList( RepresentsBooleanValueList|RepresentsBooleanTypeList $list ): static;
}
