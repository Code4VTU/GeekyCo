<?php

namespace App\Paginator;

use Illuminate\Pagination\BootstrapThreePresenter;
use Illuminate\Pagination\UrlWindow;
use Illuminate\Support\HtmlString;

class Pagination extends BootstrapThreePresenter
{
    public function render()
    {
        if ($this->hasPages()) {
            return new HtmlString(sprintf(
                '<ul>%s %s %s</ul>',
                $this->getPreviousButton(),
                $this->getLinks(),
                $this->getNextButton()
            ));
        }

        return '';

    }

    /**
     * Get HTML wrapper for disabled text.
     *
     * @param  string $text
     *
     * @return string
     */
    protected function getDisabledTextWrapper($text)
    {
        return '<li class="unavailable" aria-disabled="true"><a href="javascript:void(0)">' . $text . '</a></li>';
    }

    /**
     * Get HTML wrapper for active text.
     *
     * @param  string $text
     *
     * @return string
     */
    protected function getActivePageWrapper($text)
    {
        return '<li><a class="current-page" href="javascript:void(0)">' . $text . '</a></li>';
    }

    /**
     * Get a pagination "dot" element.
     *
     * @return string
     */
    protected function getDots()
    {
        return $this->getDisabledTextWrapper('&hellip;');
    }
}
