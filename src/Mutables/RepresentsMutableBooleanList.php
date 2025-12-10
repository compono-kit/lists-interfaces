<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Mutables;

use ComponoKit\Types\Interfaces\RepresentsBoolean;
use ComponoKit\Types\Lists\Interfaces\ComparesTypes;
use ComponoKit\Types\Lists\Interfaces\RepresentsBooleanList;

interface RepresentsMutableBooleanList extends RepresentsBooleanList, \ArrayAccess
{
	public function append( RepresentsBoolean...$types ): void;

	public function prepend( RepresentsBoolean...$types ): void;

	public function appendList( RepresentsBooleanList $list ): void;

	public function prependList( RepresentsBooleanList $list ): void;

	public function reverse(): void;

	public function shuffle(): void;

	public function replace( int $index, RepresentsBoolean $type ): void;

	public function unique(): void;

	public function sort( ComparesTypes $comparer ): void;
}
