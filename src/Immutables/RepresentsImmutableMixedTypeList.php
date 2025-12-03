<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutables;

use ComponoKit\Types\Interfaces\RepresentsType;
use ComponoKit\Types\Lists\Interfaces\RepresentsMixedTypeList;

interface RepresentsImmutableMixedTypeList extends RepresentsMixedTypeList
{
	public function get( int $index ): RepresentsType;

	public function set( int $index, RepresentsType $value ): static;

	public function remove( int $index ): static;

	public function append( RepresentsType...$types ): static;

	public function prepend( RepresentsType...$types ): static;

	public function appendList( RepresentsMixedTypeList $list ): static;

	public function prependList( RepresentsMixedTypeList $list ): static;
}
