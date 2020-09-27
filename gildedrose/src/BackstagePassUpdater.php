<?php

namespace Runroom\GildedRose;

class BackstagePassUpdater extends ItemUpdater
{
    public function updateQuality()
    {
        $this->increaseQuality();
        if ($this->item->sell_in < 11) {
            $this->increaseQuality();
        }
        if ($this->item->sell_in < 6) {
            $this->increaseQuality();
        }
    }

    protected function updateExpired()
    {
        $this->item->quality = 0;
    }
}
