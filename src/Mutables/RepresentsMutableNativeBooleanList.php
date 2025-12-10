<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Mutables;

use ComponoKit\Types\Lists\Interfaces\ComparesTypes;
use ComponoKit\Types\Lists\Interfaces\RepresentsBooleanList;
use ComponoKit\Types\Lists\Interfaces\RepresentsNativeBooleanList;

interface RepresentsMutableNativeBooleanList extends RepresentsNativeBooleanList, \ArrayAccess
{
	public function append( bool...$values ): void;

	public function prepend( bool...$values ): void;

	public function appendList( RepresentsNativeBooleanList|RepresentsBooleanList $list ): void;

	public function prependList( RepresentsNativeBooleanList|RepresentsBooleanList $list ): void;

	public function reverse(): void;

	public function shuffle(): void;

	public function replace( int $index, bool $value ): void;

	public function unique(): void;

	public function sort( ComparesTypes $comparer ): void;
}
