<?php

namespace Runroom\GildedRose;

class AgedBrieUpdater extends ItemUpdater
{
    public function updateQuality()
    {
        $this->increaseQuality();
    }

    protected function updateExpired()
    {
        $this->increaseQuality();
    }
}
