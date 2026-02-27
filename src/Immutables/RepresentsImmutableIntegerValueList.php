<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutables;

use ComponoKit\Types\Lists\Interfaces\RepresentsImmutableValueList;
use ComponoKit\Types\Lists\Interfaces\RepresentsIntegerTypeList;
use ComponoKit\Types\Lists\Interfaces\RepresentsIntegerValueList;

interface RepresentsImmutableIntegerValueList extends RepresentsIntegerValueList, RepresentsImmutableValueList
{
	public function replace( int $index, int $value ): static;

	public function append( int...$values ): static;

	public function prepend( int...$values ): static;

	public function appendList( RepresentsIntegerValueList|RepresentsIntegerTypeList $list ): static;

	public function prependList( RepresentsIntegerValueList|RepresentsIntegerTypeList $list ): static;
}
