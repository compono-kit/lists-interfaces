<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Mutable;

use ComponoKit\Types\Interfaces\RepresentsFloat;
use ComponoKit\Types\Lists\Interfaces\RepresentsFloatList;

interface RepresentsMutableFloatList extends RepresentsFloatList
{
	public function append( RepresentsFloat...$types ): void;

	public function prepend( RepresentsFloat...$types ): void;

	public function remove( int $index ): void;

	public function appendList( RepresentsFloatList $list ): void;

	public function prependList( RepresentsFloatList $list ): void;
}
