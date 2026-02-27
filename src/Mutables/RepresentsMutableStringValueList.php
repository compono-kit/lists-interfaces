<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Mutables;

use ComponoKit\Types\Lists\Interfaces\RepresentsMutableValueList;
use ComponoKit\Types\Lists\Interfaces\RepresentsStringTypeList;
use ComponoKit\Types\Lists\Interfaces\RepresentsStringValueList;

interface RepresentsMutableStringValueList extends RepresentsStringValueList, RepresentsMutableValueList
{
	public function replace( int $index, string $value ): void;

	public function append( string...$values ): void;

	public function prepend( string...$values ): void;

	public function appendList( RepresentsStringValueList|RepresentsStringTypeList $list ): void;

	public function prependList( RepresentsStringValueList|RepresentsStringTypeList $list ): void;
}
