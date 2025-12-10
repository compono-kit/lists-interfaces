<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Mutables;

use ComponoKit\Types\Interfaces\RepresentsString;
use ComponoKit\Types\Lists\Interfaces\ComparesTypes;
use ComponoKit\Types\Lists\Interfaces\RepresentsStringList;

interface RepresentsMutableStringList extends RepresentsStringList, \ArrayAccess
{
	public function append( RepresentsString...$types ): void;

	public function prepend( RepresentsString...$types ): void;

	public function appendList( RepresentsStringList $list ): void;

	public function prependList( RepresentsStringList $list ): void;

	public function reverse(): void;

	public function shuffle(): void;

	public function replace( int $index, RepresentsString $type ): void;

	public function unique(): void;

	public function sort( ComparesTypes $comparer ): void;
}
