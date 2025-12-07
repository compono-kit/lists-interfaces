<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Mutables;

use ComponoKit\Types\Lists\Interfaces\RepresentsNativeMixedTypeList;
use ComponoKit\Types\Lists\Interfaces\RepresentsMixedTypeList;

interface RepresentsMutableNativeMixedTypeList extends RepresentsNativeMixedTypeList, \ArrayAccess
{
	public function append( int|float|string|bool|array...$values ): void;

	public function prepend( int|float|string|bool|array...$values ): void;

	public function appendList( RepresentsNativeMixedTypeList|RepresentsMixedTypeList $list ): void;

	public function prependList( RepresentsNativeMixedTypeList|RepresentsMixedTypeList $list ): void;
}
