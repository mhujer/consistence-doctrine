<?php

declare(strict_types = 1);

namespace Consistence\Doctrine\Enum;

use Consistence\Doctrine\Enum\EnumAnnotation as Enum;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Embeddable
 */
class FooEmbeddable
{

	/**
	 * @Enum(class=FooEnum::class)
	 * @ORM\Column(type="integer_enum")
	 * @var \Consistence\Doctrine\Enum\FooEnum
	 */
	private $enum = FooEnum::ONE;

	/**
	 * @ORM\Embedded(class=BarEmbeddable::class)
	 * @var \Consistence\Doctrine\Enum\BarEmbeddable
	 */
	private $embedded;

	public function __construct()
	{
		$this->embedded = new BarEmbeddable();
	}

	public function getEnum(): FooEnum
	{
		return $this->enum;
	}

	public function getEmbedded(): BarEmbeddable
	{
		return $this->embedded;
	}

}
