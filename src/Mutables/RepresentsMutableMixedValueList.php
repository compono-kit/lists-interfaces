<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Mutables;

use ComponoKit\Types\Lists\Interfaces\RepresentsMixedTypeList;
use ComponoKit\Types\Lists\Interfaces\RepresentsMixedValueList;
use ComponoKit\Types\Lists\Interfaces\RepresentsMutableValueList;

interface RepresentsMutableMixedValueList extends RepresentsMixedValueList, RepresentsMutableValueList
{
	public function replace( int $index, int|float|string|bool|array $value ): void;

	public function append( int|float|string|bool|array...$values ): void;

	public function prepend( int|float|string|bool|array...$values ): void;

	public function appendList( RepresentsMixedValueList|RepresentsMixedTypeList $list ): void;

	public function prependList( RepresentsMixedValueList|RepresentsMixedTypeList $list ): void;
}
