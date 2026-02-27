<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

interface RepresentsImmutableList
{
	public function remove( int $index ): static;

	public function reverse(): static;

	public function shuffle(): static;

	public function unique(): static;
}
