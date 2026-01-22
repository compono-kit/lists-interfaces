<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Mutables;

use ComponoKit\Types\Interfaces\RepresentsBoolean;
use ComponoKit\Types\Lists\Interfaces\ComparesTypes;
use ComponoKit\Types\Lists\Interfaces\RepresentsBooleanTypeList;

interface RepresentsMutableBooleanTypeList extends RepresentsBooleanTypeList, \ArrayAccess
{
	public function append( RepresentsBoolean...$types ): void;

	public function prepend( RepresentsBoolean...$types ): void;

	public function appendList( RepresentsBooleanTypeList $list ): void;

	public function prependList( RepresentsBooleanTypeList $list ): void;

	public function reverse(): void;

	public function shuffle(): void;

	public function replace( int $index, RepresentsBoolean $type ): void;

	public function unique(): void;

	public function sort( ComparesTypes $comparer ): void;
}
