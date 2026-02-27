<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Mutables;

use ComponoKit\Types\Interfaces\RepresentsInteger;
use ComponoKit\Types\Lists\Interfaces\RepresentsIntegerTypeList;
use ComponoKit\Types\Lists\Interfaces\RepresentsMutableTypeList;

interface RepresentsMutableIntegerTypeList extends RepresentsIntegerTypeList, RepresentsMutableTypeList
{
	public function replace( int $index, RepresentsInteger $type ): void;

	public function append( RepresentsInteger...$types ): void;

	public function prepend( RepresentsInteger...$types ): void;

	public function appendList( RepresentsIntegerTypeList $list ): void;

	public function prependList( RepresentsIntegerTypeList $list ): void;
}
