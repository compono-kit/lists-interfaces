<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Mutables;

use ComponoKit\Types\Interfaces\RepresentsBoolean;
use ComponoKit\Types\Lists\Interfaces\RepresentsBooleanList;

interface RepresentsMutableBooleanList extends RepresentsBooleanList, \ArrayAccess
{
	public function append( RepresentsBoolean...$types ): void;

	public function prepend( RepresentsBoolean...$types ): void;

	public function appendList( RepresentsBooleanList $list ): void;

	public function prependList( RepresentsBooleanList $list ): void;
}
