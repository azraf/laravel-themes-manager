<?php

declare(strict_types=1);

namespace Azraf\ThemesManager\Events;

use Azraf\ThemesManager\Theme;

class ThemeDisabling
{
    public Theme $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }
}
