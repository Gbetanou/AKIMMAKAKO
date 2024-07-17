<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.module.psxdesign.provider.theme_configuration_provider' shared service.

return $this->services['prestashop.module.psxdesign.provider.theme_configuration_provider'] = new \PrestaShop\Module\PsxDesign\Provider\ThemeConfiguration\ThemeConfigurationProvider(($this->services['prestashop.module.psxdesign.provider.fonts_configuration_provider'] ?? $this->load('getPrestashop_Module_Psxdesign_Provider_FontsConfigurationProviderService.php')), ($this->services['prestashop.module.psxdesign.provider.colors_configuration_provider'] ?? $this->load('getPrestashop_Module_Psxdesign_Provider_ColorsConfigurationProviderService.php')), ($this->services['prestashop.module.psxdesign.provider.global_theme_configuration_provider'] ?? $this->load('getPrestashop_Module_Psxdesign_Provider_GlobalThemeConfigurationProviderService.php')));
