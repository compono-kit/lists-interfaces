<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

interface RepresentsImmutableValueList extends RepresentsImmutableList
{
	public function sort( ComparesValues $comparer ): static;
}
