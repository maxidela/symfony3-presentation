<?php
/**
 * Created by PhpStorm.
 * User: maxidela
 * Date: 19/04/16
 * Time: 13:47
 */

namespace AppBundle\Service;


use Knp\Bundle\MarkdownBundle\MarkdownParserInterface;

class MarkdownTransformer
{

    private $markdownParser;

    public function __construct(MarkdownParserInterface $markdownParser)
    {
        $this->markdownParser = $markdownParser;
    }

    public function parse($str)
    {
        return $this->markdownParser
            ->transformMarkdown($str);
    }
}