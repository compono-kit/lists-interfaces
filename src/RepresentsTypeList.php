<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

interface RepresentsTypeList extends RepresentsList
{
	public function findIndex( MatchesType $matcher ): ?int;
}
