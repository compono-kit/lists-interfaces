<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Mutables;

use ComponoKit\Types\Lists\Interfaces\RepresentsIntegerTypeList;
use ComponoKit\Types\Lists\Interfaces\RepresentsIntegerValueList;
use ComponoKit\Types\Lists\Interfaces\RepresentsMutableValueList;

interface RepresentsMutableIntegerValueList extends RepresentsIntegerValueList, RepresentsMutableValueList
{
	public function replace( int $index, int $value ): void;

	public function append( int...$values ): void;

	public function prepend( int...$values ): void;

	public function appendList( RepresentsIntegerValueList|RepresentsIntegerTypeList $list ): void;

	public function prependList( RepresentsIntegerValueList|RepresentsIntegerTypeList $list ): void;
}
