<?php

namespace Runroom\GildedRose;

class ItemClassifier
{
    const BACKSTAGE_PASSES_TO_A_TAFKAL_80_ETC_CONCERT = 'Backstage passes to a TAFKAL80ETC concert';
    const SULFURAS_HAND_OF_RAGNAROS = 'Sulfuras, Hand of Ragnaros';
    const AGED_BRIE = 'Aged Brie';

    public function categorize($item)
    {
        switch ($item->name) {
            case self::SULFURAS_HAND_OF_RAGNAROS:
                $myItem = new SulfurasUpdater($item);
                break;
            case self::BACKSTAGE_PASSES_TO_A_TAFKAL_80_ETC_CONCERT:
                $myItem = new BackstagePassUpdater($item);
                break;
            case self::AGED_BRIE:
                $myItem = new AgedBrieUpdater($item);
                break;
            default:
                $myItem = new ItemUpdater($item);
                break;
        }
        return $myItem;
    }
}
