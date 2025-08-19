<?php

namespace HBM\AdaptiveCardsBundle\Schema;

class AdaptiveCard
{

    public array $msteams = [];

    /** @var AbstractItem[] $items */
    private array $items = [];

    public function addItem(AbstractItem $item): self
    {
        $this->items[] = $item;
        return $this;
    }

    public function removeItem(AbstractItem $item): bool
    {
        $key = array_search($item, $this->items, true);

        if ($key === false) {
            return false;
        }

        unset($this->items[$key]);

        return true;
    }

    public function toArray(): array
    {
        $data = [];
        $data['type'] = 'AdaptiveCard';
        $data['speak'] = 'Representation of an issue';
        $data['$schema'] = 'https://adaptivecards.io/schemas/adaptive-card.json';
        $data['version'] = '1.5';
        $data['msteams'] = $this->msteams;
        $data['body'] = [];

        foreach ($this->items as $item) {
            $data['body'][] = $item->toArray();
        }

        return $data;
    }

}
