<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutables;

use ComponoKit\Types\Interfaces\RepresentsString;
use ComponoKit\Types\Lists\Interfaces\RepresentsStringList;

interface RepresentsImmutableStringList extends RepresentsStringList
{
	public function append( RepresentsString...$types ): static;

	public function prepend( RepresentsString...$types ): static;

	public function remove( int $index ): static;

	public function appendList( RepresentsStringList $list ): static;

	public function prependList( RepresentsStringList $list ): static;
}
