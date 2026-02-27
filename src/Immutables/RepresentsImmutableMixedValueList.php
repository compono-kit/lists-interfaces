<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutables;

use ComponoKit\Types\Lists\Interfaces\RepresentsImmutableValueList;
use ComponoKit\Types\Lists\Interfaces\RepresentsMixedTypeList;
use ComponoKit\Types\Lists\Interfaces\RepresentsMixedValueList;

interface RepresentsImmutableMixedValueList extends RepresentsMixedValueList, RepresentsImmutableValueList
{
	public function replace( int $index, int|float|string|bool|array $value ): static;

	public function append( int|float|string|bool|array...$values ): static;

	public function prepend( int|float|string|bool|array...$values ): static;

	public function appendList( RepresentsMixedValueList|RepresentsMixedTypeList $list ): static;

	public function prependList( RepresentsMixedValueList|RepresentsMixedTypeList $list ): static;
}
