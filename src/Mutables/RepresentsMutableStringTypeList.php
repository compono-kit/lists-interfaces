<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Mutables;

use ComponoKit\Types\Interfaces\RepresentsString;
use ComponoKit\Types\Lists\Interfaces\RepresentsMutableTypeList;
use ComponoKit\Types\Lists\Interfaces\RepresentsStringTypeList;

interface RepresentsMutableStringTypeList extends RepresentsStringTypeList, RepresentsMutableTypeList
{
	public function replace( int $index, RepresentsString $type ): void;

	public function append( RepresentsString...$types ): void;

	public function prepend( RepresentsString...$types ): void;

	public function appendList( RepresentsStringTypeList $list ): void;

	public function prependList( RepresentsStringTypeList $list ): void;
}
