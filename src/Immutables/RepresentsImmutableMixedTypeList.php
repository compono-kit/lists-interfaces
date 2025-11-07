<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutable;

use ComponoKit\Types\Interfaces\RepresentsType;
use ComponoKit\Types\Lists\Interfaces\RepresentsMixedTypeList;

interface RepresentsImmutableMixedTypeList extends RepresentsMixedTypeList
{
	public function append( RepresentsType...$types ): static;

	public function prepend( RepresentsType...$types ): static;

	public function remove( int $index ): static;

	public function appendList( RepresentsMixedTypeList $list ): static;

	public function prependList( RepresentsMixedTypeList $list ): static;
}
