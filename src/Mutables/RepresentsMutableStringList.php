<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Mutable;

use ComponoKit\Types\Interfaces\RepresentsString;
use ComponoKit\Types\Lists\Interfaces\RepresentsStringList;

interface RepresentsMutableStringList extends RepresentsStringList
{
	public function append( RepresentsString...$types ): void;

	public function prepend( RepresentsString...$types ): void;

	public function remove( int $index ): void;

	public function appendList( RepresentsStringList $list ): void;

	public function prependList( RepresentsStringList $list ): void;
}
