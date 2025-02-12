<?php

namespace TallStackUi\Foundation\Personalization;

use Illuminate\Support\Collection;

class BuildScopePersonalization
{
    public function __construct(
        private array $classes,
        private readonly array|string|null $attributes = null,
        private ?Collection $collection = null,
    ) {
        $this->collection = is_array($this->attributes)
            ? collect($this->attributes)
            : (is_string($this->attributes) ? collect(app()->call($this->attributes, ['classes' => $this->classes])) : collect());
    }

    public function execute(): array
    {
        if ($this->collection->isNotEmpty()) {
            $this->common();
            $this->replace();
            $this->remove();
            $this->append();
            $this->prepend();
        }

        // We format here to return only the classes that were actually defined
        // and thus be able to merge with the soft personalization definitions.
        return $this->collection->mapWithKeys(fn (string|array $value, string $key) => [$key => $this->classes[$key] ?? []])->toArray();
    }

    /**
     * Append scoped personalization (adding classes to the end of a block).
     */
    private function append(): void
    {
        $attributes = $this->collection->filter(fn (string|array $value) => is_array($value) && isset($value['append']))->toArray();

        foreach ($attributes as $key => $value) {
            if (! isset($this->classes[$key])) {
                continue;
            }

            $this->classes[$key] = $this->classes[$key].' '.$value['append'];
            $this->classes[$key] = $this->sanitize($this->classes[$key]);
        }
    }

    /**
     * Common scoped personalization (replacing the entire content of a block).
     */
    private function common(): void
    {
        $attributes = $this->collection->filter(fn (string|array $value) => is_string($value))->toArray();

        foreach ($attributes as $key => $value) {
            if (! isset($this->classes[$key])) {
                continue;
            }

            $this->classes[$key] = $value;
            $this->classes[$key] = $this->sanitize($this->classes[$key]);
        }
    }

    /**
     * Prepend scoped personalization (adding classes to the beginning of a block).
     */
    private function prepend(): void
    {
        $attributes = $this->collection->filter(fn (string|array $value) => is_array($value) && isset($value['prepend']))->toArray();

        foreach ($attributes as $key => $value) {
            if (! isset($this->classes[$key])) {
                continue;
            }

            $this->classes[$key] = $value['prepend'].' '.$this->classes[$key];
            $this->classes[$key] = $this->sanitize($this->classes[$key]);
        }
    }

    /**
     * Remove scoped personalization (removing classes from a block).
     */
    private function remove(): void
    {
        $attributes = $this->collection->filter(fn (string|array $value) => is_array($value) && isset($value['remove']))->toArray();

        foreach ($attributes as $key => $value) {
            if (! isset($this->classes[$key])) {
                continue;
            }

            $this->classes[$key] = str_replace($value['remove'], '', (string) $this->classes[$key]);
            $this->classes[$key] = $this->sanitize($this->classes[$key]);
        }
    }

    /**
     * Replace scoped personalization (replacing classes in a block).
     */
    private function replace(): void
    {
        $attributes = $this->collection->filter(fn (string|array $value) => is_array($value) && isset($value['replace']))->toArray();

        foreach ($attributes as $key => $value) {
            if (! isset($this->classes[$key])) {
                continue;
            }

            $this->classes[$key] = str_replace(array_keys($value['replace']), array_values($value['replace']), (string) $this->classes[$key]);
        }
    }

    /**
     * Sanitize string by removing extra spaces and trimming it.
     */
    private function sanitize(string $string): string
    {
        return str($string)->squish()->trim()->value();
    }
}
