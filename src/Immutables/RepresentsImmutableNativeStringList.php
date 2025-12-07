<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces\Immutables;

use ComponoKit\Types\Lists\Interfaces\RepresentsNativeStringList;
use ComponoKit\Types\Lists\Interfaces\RepresentsStringList;

interface RepresentsImmutableNativeStringList extends RepresentsNativeStringList
{
	public function get( int $index ): string;

	public function set( int $index, string $value ): static;

	public function remove( int $index ): static;

	public function exists( int $index ): bool;

	public function append( string...$values ): static;

	public function prepend( string...$values ): static;

	public function appendList( RepresentsNativeStringList|RepresentsStringList $list ): static;

	public function prependList( RepresentsNativeStringList|RepresentsStringList $list ): static;
}
