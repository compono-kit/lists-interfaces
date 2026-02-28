<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

interface RepresentsMutableTypeList extends RepresentsMutableList
{
	public function sort( ComparesTypes $comparer ): void;

	public function slice( int $index, ?int $count = null ): void;
}
