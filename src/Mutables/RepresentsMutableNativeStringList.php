<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Mutables;

use ComponoKit\Types\Lists\Interfaces\RepresentsNativeStringList;
use ComponoKit\Types\Lists\Interfaces\RepresentsStringList;

interface RepresentsMutableNativeStringList extends RepresentsNativeStringList
{
	public function append( string...$values ): void;

	public function prepend( string...$values ): void;

	public function remove( int $index ): void;

	public function appendList( RepresentsNativeStringList|RepresentsStringList $list ): void;

	public function prependList( RepresentsNativeStringList|RepresentsStringList $list ): void;
}
