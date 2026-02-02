<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Mutables;

use ComponoKit\Types\Lists\Interfaces\ComparesValues;
use ComponoKit\Types\Lists\Interfaces\RepresentsIntegerTypeList;
use ComponoKit\Types\Lists\Interfaces\RepresentsIntegerValueList;

interface RepresentsMutableIntegerValueList extends RepresentsIntegerValueList, \ArrayAccess
{
	public function append( int...$values ): void;

	public function prepend( int...$values ): void;

	public function appendList( RepresentsIntegerValueList|RepresentsIntegerTypeList $list ): void;

	public function prependList( RepresentsIntegerValueList|RepresentsIntegerTypeList $list ): void;

	public function reverse(): void;

	public function shuffle(): void;

	public function replace( int $index, int $value ): void;

	public function unique(): void;

	public function sort( ComparesValues $comparer ): void;
}
