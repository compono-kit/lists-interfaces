<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Mutables;

use ComponoKit\Types\Lists\Interfaces\ComparesValues;
use ComponoKit\Types\Lists\Interfaces\RepresentsMixedTypeList;
use ComponoKit\Types\Lists\Interfaces\RepresentsMixedValueList;

interface RepresentsMutableMixedValueList extends RepresentsMixedValueList, \ArrayAccess
{
	public function append( int|float|string|bool|array...$values ): void;

	public function prepend( int|float|string|bool|array...$values ): void;

	public function appendList( RepresentsMixedValueList|RepresentsMixedTypeList $list ): void;

	public function prependList( RepresentsMixedValueList|RepresentsMixedTypeList $list ): void;

	public function reverse(): void;

	public function shuffle(): void;

	public function replace( int $index, int|float|string|bool|array $value ): void;

	public function unique(): void;

	public function sort( ComparesValues $comparer ): void;
}
