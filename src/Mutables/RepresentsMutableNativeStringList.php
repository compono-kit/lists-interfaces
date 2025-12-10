<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Mutables;

use ComponoKit\Types\Lists\Interfaces\ComparesTypes;
use ComponoKit\Types\Lists\Interfaces\RepresentsNativeStringList;
use ComponoKit\Types\Lists\Interfaces\RepresentsStringList;

interface RepresentsMutableNativeStringList extends RepresentsNativeStringList, \ArrayAccess
{
	public function append( string...$values ): void;

	public function prepend( string...$values ): void;

	public function appendList( RepresentsNativeStringList|RepresentsStringList $list ): void;

	public function prependList( RepresentsNativeStringList|RepresentsStringList $list ): void;

	public function reverse(): void;

	public function shuffle(): void;

	public function replace( int $index, string $value ): void;

	public function unique(): void;

	public function sort( ComparesTypes $comparer ): void;
}
