<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutables;

use ComponoKit\Types\Interfaces\RepresentsFloat;
use ComponoKit\Types\Lists\Interfaces\RepresentsFloatTypeList;
use ComponoKit\Types\Lists\Interfaces\RepresentsImmutableTypeList;

interface RepresentsImmutableFloatTypeList extends RepresentsFloatTypeList, RepresentsImmutableTypeList
{
	public function replace( int $index, RepresentsFloat $type ): static;

	public function append( RepresentsFloat...$types ): static;

	public function prepend( RepresentsFloat...$types ): static;

	public function appendList( RepresentsFloatTypeList $list ): static;

	public function prependList( RepresentsFloatTypeList $list ): static;
}
