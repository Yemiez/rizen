<?php

namespace Core\Lex\Keyword;

class KeywordDictionary
{
    private array $keywords;

    public function __construct(array $keywords = [])
    {
        $this->keywords = $keywords;
    }

    public function getKeywords(): array
    {
        return $this->keywords;
    }

    public function isKeyword(string $word): bool
    {
        return in_array($word, $this->keywords);
    }
}
