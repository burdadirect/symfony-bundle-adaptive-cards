<?php

namespace HBM\AdaptiveCardsBundle\Schema;

abstract class AbstractItem
{

    abstract protected function toArray(): array;

    protected function normalize(array $data): array
    {
        foreach ($data as $key => $value) {
            if (($value === null) || ($value === '') || (is_array(
                  $value
                ) && (count($value) === 0))) {
                unset($data[$key]);
            }
        }

        return $data;
    }

    /**
     * @param AbstractItem[]|string[] $items
     *
     * @return array
     */
    protected function addCollection(array $items): array
    {
        $data = [];
        foreach ($items as $item) {
            if ($item instanceof self) {
                $data[] = $item->toArray();
            } elseif (is_string($item)) {
                $data[] = $item;
            } else {
                throw new \InvalidArgumentException('Invalid item type');
            }
        }

        return $data;
    }

}
