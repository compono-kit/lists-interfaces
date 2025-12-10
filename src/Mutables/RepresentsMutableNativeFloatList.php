<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Mutables;

use ComponoKit\Types\Lists\Interfaces\ComparesTypes;
use ComponoKit\Types\Lists\Interfaces\RepresentsFloatList;
use ComponoKit\Types\Lists\Interfaces\RepresentsNativeFloatList;

interface RepresentsMutableNativeFloatList extends RepresentsNativeFloatList, \ArrayAccess
{
	public function append( float...$values ): void;

	public function prepend( float...$values ): void;

	public function appendList( RepresentsNativeFloatList|RepresentsFloatList $list ): void;

	public function prependList( RepresentsNativeFloatList|RepresentsFloatList $list ): void;

	public function reverse(): void;

	public function shuffle(): void;

	public function replace( int $index, float $value ): void;

	public function unique(): void;

	public function sort( ComparesTypes $comparer ): void;
}
