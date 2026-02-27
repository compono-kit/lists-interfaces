<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

interface RepresentsImmutableTypeList extends RepresentsImmutableList
{
	public function sort( ComparesTypes $comparer ): static;
}
