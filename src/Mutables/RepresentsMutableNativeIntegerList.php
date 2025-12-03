<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Mutables;

use ComponoKit\Types\Lists\Interfaces\RepresentsIntegerList;
use ComponoKit\Types\Lists\Interfaces\RepresentsNativeIntegerList;

interface RepresentsMutableNativeIntegerList extends RepresentsNativeIntegerList
{
	public function append( int...$values ): void;

	public function prepend( int...$values ): void;

	public function appendList( RepresentsNativeIntegerList|RepresentsIntegerList $list ): void;

	public function prependList( RepresentsNativeIntegerList|RepresentsIntegerList $list ): void;
}
