<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

interface RepresentsValueList extends RepresentsList
{
	public function findIndex( MatchesValue $matcher ): ?int;
}
