<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Mutables;

use ComponoKit\Types\Lists\Interfaces\RepresentsFloatTypeList;
use ComponoKit\Types\Lists\Interfaces\RepresentsFloatValueList;
use ComponoKit\Types\Lists\Interfaces\RepresentsMutableValueList;

interface RepresentsMutableFloatValueList extends RepresentsFloatValueList, RepresentsMutableValueList
{
	public function replace( int $index, float $value ): void;

	public function append( float...$values ): void;

	public function prepend( float...$values ): void;

	public function appendList( RepresentsFloatValueList|RepresentsFloatTypeList $list ): void;

	public function prependList( RepresentsFloatValueList|RepresentsFloatTypeList $list ): void;
}
