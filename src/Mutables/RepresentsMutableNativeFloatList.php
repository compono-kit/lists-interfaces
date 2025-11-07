<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Mutable;

use ComponoKit\Types\Lists\Interfaces\RepresentsFloatList;
use ComponoKit\Types\Lists\Interfaces\RepresentsNativeFloatList;

interface RepresentsMutableNativeFloatList extends RepresentsNativeFloatList
{
	public function append( float...$values ): void;

	public function prepend( float...$values ): void;

	public function remove( int $index ): void;

	public function appendList( RepresentsNativeFloatList|RepresentsFloatList $list ): void;

	public function prependList( RepresentsNativeFloatList|RepresentsFloatList $list ): void;
}
