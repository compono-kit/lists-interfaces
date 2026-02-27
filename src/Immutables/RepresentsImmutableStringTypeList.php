<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutables;

use ComponoKit\Types\Interfaces\RepresentsString;
use ComponoKit\Types\Lists\Interfaces\RepresentsImmutableTypeList;
use ComponoKit\Types\Lists\Interfaces\RepresentsStringTypeList;

interface RepresentsImmutableStringTypeList extends RepresentsStringTypeList, RepresentsImmutableTypeList
{
	public function replace( int $index, RepresentsString $type ): static;

	public function append( RepresentsString...$types ): static;

	public function prepend( RepresentsString...$types ): static;

	public function appendList( RepresentsStringTypeList $list ): static;

	public function prependList( RepresentsStringTypeList $list ): static;
}
