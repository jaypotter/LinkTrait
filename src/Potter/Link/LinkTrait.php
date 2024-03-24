<?php

declare(strict_types=1);

namespace Potter\Link;

trait LinkTrait 
{
    private string $href;
    private bool $templated = false;
    private array $rels;
    private array $attributes;
    
    final public function getHref(): string
    {
        return $this->hasHref() ? $this->href : '';
    }
    
    final public function hasHref(): bool
    {
        return $this->has('href');
    }
    
    final protected function setHref(string $href): void
    {
        $this->href = $href;
    }
    
    final public function isTemplated(): bool
    {
        return $this->templated;
    }
    
    final protected function setTemplated(bool $templated): void
    {
        $this->templated = $templated;
    }
    
    final public function getRels(): array
    {
        return $this->rels ?? [];
    }
    
    final public function hasRel(string $rel): bool
    {
        return in_array($rel, $this->getRels());
    }
    
    final protected function setRels(array $rels): void
    {
        $this->rels = $rels;
    }
    
    final public function getAttributes(): array
    {
        return $this->attributes ?? [];
    }
    
    final public function hasAttribute(string $key): bool
    {
        return in_array($key, $this->getAttributes());
    }
    
    final protected function setAttributes(array $attributes): void
    {
        $this->attributes = $attributes;
    }
    
    abstract public function has(string $id): bool;
}