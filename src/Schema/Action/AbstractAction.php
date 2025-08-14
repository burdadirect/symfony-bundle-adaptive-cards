<?php

namespace HBM\AdaptiveCardsBundle\Schema\Action;

use HBM\AdaptiveCardsBundle\Schema\AbstractItem;
use HBM\AdaptiveCardsBundle\Schema\Other\IconUrl;
use HBM\AdaptiveCardsBundle\Schema\Other\ThemedUrl;
use HBM\AdaptiveCardsBundle\Schema\Property\TypeAction;

abstract class AbstractAction extends AbstractItem
{
    protected TypeAction $type;

    public ?AbstractAction $fallback = null;

    public ?IconUrl $iconUrl = null;

    public ?string $id = null;
    public ?string $title = null;
    public ?string $tooltip = null;
    public bool $isEnabled = true;

    /** @var AbstractAction[] */
    public array $menuActions = [];

    /** @var ThemedUrl[] */
    public array $themedIconUrls = [];

    public function toArray(): array
    {
        $data = [];
        $data['type'] = $this->type->value;
        $data['fallback'] = $this->fallback?->toArray();

        $data['id'] = $this->id;
        $data['title'] = $this->title;
        $data['tooltip'] = $this->tooltip;
        $data['iconUrl'] = $this->iconUrl?->toString();
        $data['isEnabled'] = $this->isEnabled;

        $data['menuActions'] = $this->addCollection($this->menuActions);
        $data['themedIconUrls'] = $this->addCollection($this->themedIconUrls);

        return $this->normalize($data);
    }

    /**************************************************************************/

    public function getFallback(): ?AbstractAction
    {
        return $this->fallback;
    }

    public function setFallback(?AbstractAction $fallback): AbstractAction
    {
        $this->fallback = $fallback;

        return $this;
    }

    public function getIconUrl(): ?IconUrl
    {
        return $this->iconUrl;
    }

    public function setIconUrl(?IconUrl $iconUrl): AbstractAction
    {
        $this->iconUrl = $iconUrl;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): AbstractAction
    {
        $this->id = $id;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): AbstractAction
    {
        $this->title = $title;

        return $this;
    }

    public function isEnabled(): bool
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(bool $isEnabled): AbstractAction
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    public function getTooltip(): ?string
    {
        return $this->tooltip;
    }

    public function setTooltip(?string $tooltip): AbstractAction
    {
        $this->tooltip = $tooltip;

        return $this;
    }

    public function getMenuActions(): array
    {
        return $this->menuActions;
    }

    public function setMenuActions(array $menuActions): AbstractAction
    {
        $this->menuActions = $menuActions;

        return $this;
    }

    public function getThemedIconUrls(): array
    {
        return $this->themedIconUrls;
    }

    public function setThemedIconUrls(array $themedIconUrls): AbstractAction
    {
        $this->themedIconUrls = $themedIconUrls;

        return $this;
    }

}
