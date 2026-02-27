<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Mutables;

use ComponoKit\Types\Interfaces\RepresentsFloat;
use ComponoKit\Types\Lists\Interfaces\RepresentsFloatTypeList;
use ComponoKit\Types\Lists\Interfaces\RepresentsMutableTypeList;

interface RepresentsMutableFloatTypeList extends RepresentsFloatTypeList, RepresentsMutableTypeList
{
	public function replace( int $index, RepresentsFloat $type ): void;

	public function append( RepresentsFloat...$types ): void;

	public function prepend( RepresentsFloat...$types ): void;

	public function appendList( RepresentsFloatTypeList $list ): void;

	public function prependList( RepresentsFloatTypeList $list ): void;
}
