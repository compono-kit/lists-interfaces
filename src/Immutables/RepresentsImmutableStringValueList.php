<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutables;

use ComponoKit\Types\Lists\Interfaces\RepresentsImmutableValueList;
use ComponoKit\Types\Lists\Interfaces\RepresentsStringTypeList;
use ComponoKit\Types\Lists\Interfaces\RepresentsStringValueList;

interface RepresentsImmutableStringValueList extends RepresentsStringValueList, RepresentsImmutableValueList
{
	public function replace( int $index, string $value ): static;

	public function append( string...$values ): static;

	public function prepend( string...$values ): static;

	public function appendList( RepresentsStringValueList|RepresentsStringTypeList $list ): static;

	public function prependList( RepresentsStringValueList|RepresentsStringTypeList $list ): static;
}
