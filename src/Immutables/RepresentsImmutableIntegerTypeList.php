<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutables;

use ComponoKit\Types\Interfaces\RepresentsInteger;
use ComponoKit\Types\Lists\Interfaces\RepresentsImmutableTypeList;
use ComponoKit\Types\Lists\Interfaces\RepresentsIntegerTypeList;

interface RepresentsImmutableIntegerTypeList extends RepresentsIntegerTypeList, RepresentsImmutableTypeList
{
	public function replace( int $index, RepresentsInteger $type ): static;

	public function append( RepresentsInteger...$types ): static;

	public function prepend( RepresentsInteger...$types ): static;

	public function appendList( RepresentsIntegerTypeList $list ): static;

	public function prependList( RepresentsIntegerTypeList $list ): static;
}
