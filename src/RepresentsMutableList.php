<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

interface RepresentsMutableList
{
	public function remove( int $index ): void;

	public function reverse(): void;

	public function shuffle(): void;

	public function unique(): void;
}
