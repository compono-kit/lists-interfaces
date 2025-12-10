<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Mutables;

use ComponoKit\Types\Interfaces\RepresentsInteger;
use ComponoKit\Types\Lists\Interfaces\ComparesTypes;
use ComponoKit\Types\Lists\Interfaces\RepresentsIntegerList;

interface RepresentsMutableIntegerList extends RepresentsIntegerList, \ArrayAccess
{
	public function append( RepresentsInteger...$types ): void;

	public function prepend( RepresentsInteger...$types ): void;

	public function appendList( RepresentsIntegerList $list ): void;

	public function prependList( RepresentsIntegerList $list ): void;

	public function reverse(): void;

	public function shuffle(): void;

	public function replace( int $index, RepresentsInteger $type ): void;

	public function unique(): void;

	public function sort( ComparesTypes $comparer ): void;
}
