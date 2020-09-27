<?php

namespace Runroom\GildedRose;

final class GildedRose
{
    private $items = [];

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function updateQuality()
    {
        foreach ($this->items as $item) {
            $this->updateItem($item);
        }
    }

    public function updateItem($item)
    {
        $classifier = new ItemClassifier();
        $myItem = $classifier->categorize($item);
        $myItem->update();
    }
}
