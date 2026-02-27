<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

interface RepresentsMutableValueList extends RepresentsMutableList
{
	public function sort( ComparesValues $comparer ): void;
}
