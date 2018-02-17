<?php
namespace Application\Theme\Tsuda;

use Concrete\Core\Area\Layout\Preset\Provider\ThemeProviderInterface;
use Concrete\Core\Page\Theme\Theme;

class PageTheme extends Theme // implements ThemeProviderInterface
{
    public function registerAssets()
    {
        //$this->providesAsset('javascript', 'bootstrap/*');
        $this->providesAsset('javascript', 'jquery');
    }

    protected $pThemeGridFrameworkHandle = 'bootstrap3';

    public function getThemeName()
    {
        return t('Tsuda');
    }

    public function getThemeDescription()
    {
        return t('CMS ProWresling');
    }

    /**
     * @return array
     */
    public function getThemeResponsiveImageMap()
    {
        return [
            'large' => '900px',
            'medium' => '768px',
            'small' => '0',
        ];
    }

}
