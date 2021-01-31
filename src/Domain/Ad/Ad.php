<?php

namespace App\Domain\Ad;

use JsonSerializable;

class Ad implements JsonSerializable {
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $desc;
    /**
     * @var string
     */
    private $makeName;
    /**
     * @var string
     */
    private $modelName;
    /**
     * @var int
     */
    private $price;
    /**
     * @var
     */
    private $coords;

    public function __construct(int $id, string $title, string $desc, string $makeName, string $modelName, int $price, $coords) {
        $this->id = $id;
        $this->title = $title;
        $this->desc = $desc;
        $this->makeName = $makeName;
        $this->modelName = $modelName;
        $this->price = $price;
        $this->coords = $coords;
    }

    /**
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDesc(): string {
        return $this->desc;
    }

    /**
     * @return string
     */
    public function getMakeName(): string {
        return $this->makeName;
    }

    /**
     * @return string
     */
    public function getModelName(): string {
        return $this->modelName;
    }

    /**
     * @return int
     */
    public function getPrice(): int {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getCoords() {
        return $this->coords;
    }

    public function JsonSerialize(): array {
        return ['id' => $this->id,
            'title' => $this->title,
            'desc' => $this->desc,
            'makeName' => $this->makeName,
            'modelName' => $this->modelName,
            'price'=> $this->price,
            'coords' => $this->price];
    }
}