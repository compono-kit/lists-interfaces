<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutables;

use ComponoKit\Types\Lists\Interfaces\RepresentsFloatTypeList;
use ComponoKit\Types\Lists\Interfaces\RepresentsFloatValueList;
use ComponoKit\Types\Lists\Interfaces\RepresentsImmutableValueList;

interface RepresentsImmutableFloatValueList extends RepresentsFloatValueList, RepresentsImmutableValueList
{
	public function replace( int $index, float $value ): static;

	public function append( float...$values ): static;

	public function prepend( float...$values ): static;

	public function appendList( RepresentsFloatValueList|RepresentsFloatTypeList $list ): static;

	public function prependList( RepresentsFloatValueList|RepresentsFloatTypeList $list ): static;
}
