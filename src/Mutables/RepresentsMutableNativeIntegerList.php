<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Mutables;

use ComponoKit\Types\Lists\Interfaces\ComparesTypes;
use ComponoKit\Types\Lists\Interfaces\RepresentsIntegerList;
use ComponoKit\Types\Lists\Interfaces\RepresentsNativeIntegerList;

interface RepresentsMutableNativeIntegerList extends RepresentsNativeIntegerList, \ArrayAccess
{
	public function append( int...$values ): void;

	public function prepend( int...$values ): void;

	public function appendList( RepresentsNativeIntegerList|RepresentsIntegerList $list ): void;

	public function prependList( RepresentsNativeIntegerList|RepresentsIntegerList $list ): void;

	public function reverse(): void;

	public function shuffle(): void;

	public function replace( int $index, int $value ): void;

	public function unique(): void;

	public function sort( ComparesTypes $comparer ): void;
}
