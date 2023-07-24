<?php

namespace Jatdung\MediaManager\Views;

use Dcat\Admin\Actions\Action;

class Spread extends View
{
    protected $icon = 'fa-th';

    protected $name = 'spread';

    protected $view = 'mikha-dev.dcat-media-manager::_spread';

    public function renderAction(Action $action)
    {
        $action->appendHtmlAttribute('class', 'dropdown-item');
        return "<a {$action->formatHtmlAttributes()}>{$action->title()}</a>";
    }

    public function renderFileSelector(string $html)
    {
        return <<<HTML
<div class="file-check">
    {$html}
</div>
HTML;
    }
}
