<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Mutables;

use ComponoKit\Types\Interfaces\RepresentsBoolean;
use ComponoKit\Types\Lists\Interfaces\RepresentsBooleanTypeList;
use ComponoKit\Types\Lists\Interfaces\RepresentsMutableTypeList;

interface RepresentsMutableBooleanTypeList extends RepresentsBooleanTypeList, RepresentsMutableTypeList
{
	public function replace( int $index, RepresentsBoolean $type ): void;

	public function append( RepresentsBoolean...$types ): void;

	public function prepend( RepresentsBoolean...$types ): void;

	public function appendList( RepresentsBooleanTypeList $list ): void;

	public function prependList( RepresentsBooleanTypeList $list ): void;
}
