<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Mutables;

use ComponoKit\Types\Interfaces\RepresentsFloat;
use ComponoKit\Types\Lists\Interfaces\ComparesTypes;
use ComponoKit\Types\Lists\Interfaces\RepresentsFloatList;

interface RepresentsMutableFloatList extends RepresentsFloatList, \ArrayAccess
{
	public function append( RepresentsFloat...$types ): void;

	public function prepend( RepresentsFloat...$types ): void;

	public function appendList( RepresentsFloatList $list ): void;

	public function prependList( RepresentsFloatList $list ): void;

	public function reverse(): void;

	public function shuffle(): void;

	public function replace( int $index, RepresentsFloat $type ): void;

	public function unique(): void;

	public function sort( ComparesTypes $comparer ): void;
}
