<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Mutables;

use ComponoKit\Types\Interfaces\RepresentsType;
use ComponoKit\Types\Lists\Interfaces\RepresentsMixedTypeList;

interface RepresentsMutableMixedTypeList extends RepresentsMixedTypeList
{
	public function append( RepresentsType...$types ): void;

	public function prepend( RepresentsType...$types ): void;

	public function remove( int $index ): void;

	public function appendList( RepresentsMixedTypeList $list ): void;

	public function prependList( RepresentsMixedTypeList $list ): void;
}
