<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Mutables;

use ComponoKit\Types\Interfaces\RepresentsInteger;
use ComponoKit\Types\Lists\Interfaces\RepresentsIntegerList;

interface RepresentsMutableIntegerList extends RepresentsIntegerList
{
	public function append( RepresentsInteger...$types ): void;

	public function prepend( RepresentsInteger...$types ): void;

	public function remove( int $index ): void;

	public function appendList( RepresentsIntegerList $list ): void;

	public function prependList( RepresentsIntegerList $list ): void;
}
