<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Mutables;

use ComponoKit\Types\Lists\Interfaces\RepresentsBooleanTypeList;
use ComponoKit\Types\Lists\Interfaces\RepresentsBooleanValueList;
use ComponoKit\Types\Lists\Interfaces\RepresentsMutableValueList;

interface RepresentsMutableBooleanValueList extends RepresentsBooleanValueList, RepresentsMutableValueList
{
	public function replace( int $index, bool $value ): void;

	public function append( bool...$values ): void;

	public function prepend( bool...$values ): void;

	public function appendList( RepresentsBooleanValueList|RepresentsBooleanTypeList $list ): void;

	public function prependList( RepresentsBooleanValueList|RepresentsBooleanTypeList $list ): void;
}
