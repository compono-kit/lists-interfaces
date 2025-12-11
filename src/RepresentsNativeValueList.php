<?php declare(strict_types=1);

namespace ComponoKit\Types\Lists\Interfaces;

interface RepresentsNativeValueList extends RepresentsList
{
	public function findIndex( MatchesNativeValue $matcher ): ?int;
}
