<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Modules/psxdesign/views/templates/admin/logos/Blocks/Favicon/favicon_description.html.twig */
class __TwigTemplate_2d86e0ac36964744ddea2babbb2c3a2bf273578e91480110f9e60b7417022936 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
<div class=\"col-12 col-lg-4\">
    <h2>";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Favicon", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</h2>
    <p class=\"text-muted\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The favicon is a small icon that appears on the left in the address bar, tabs, favorites, etc.", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "
    </p>
    <p class=\"text-muted\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"277\" height=\"33\" fill=\"none\">
            <path fill=\"#FAFBFC\" d=\"M0 33h8v-8a8 8 0 0 1-8 8ZM8 8a8 8 0 0 1 8-8h245a8 8 0 0 1 8 8v25H8V8Z\"/>
            <image width=\"16\" height=\"16\" x=\"20\" y=\"9\" xlink:href=\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' xml:space='preserve' viewBox='0 0 37.748 23.404'%3E%3Cpath fill='%2300b3e3' d='M20.41 2.822c.067.064.136.126.201.192a10.302 10.302 0 0 1 1.998 2.81 10.214 10.214 0 0 1 .391.922 10.17 10.17 0 0 1 .3.965 10.23 10.23 0 0 1 .31 2.035c.01.175.013.352.013.53v13.128h.004V10.275a3.852 3.852 0 0 1 3.848-3.847 3.852 3.852 0 0 1 3.847 3.847v13.13h6.426v-13.13C37.748 4.61 33.141 0 27.475 0a10.24 10.24 0 0 0-7.065 2.822z'/%3E%3Cpath d='M17.2 10.275v13.13h6.423v-13.13c0-.177-.003-.354-.012-.529a10.244 10.244 0 0 0-.105-1.033 10.23 10.23 0 0 0-.092-.506 10.153 10.153 0 0 0-.252-.984 10.17 10.17 0 0 0-.553-1.399 10.256 10.256 0 0 0-1.334-2.082 10.391 10.391 0 0 0-.664-.728c-.065-.066-.134-.128-.2-.192a10.245 10.245 0 0 0-3.212 7.453zM9.504 23.404H3.077V6.444H0V.017h3.213a6.297 6.297 0 0 1 6.291 6.29z'/%3E%3Cpath fill='%2300b3e3' d='M31.425 59.394h-6.427v-16.96h-3.077v-6.427h3.213a6.297 6.297 0 0 1 6.291 6.29z' clip-path='url(%23f)' transform='translate(-21.921 -35.99)'/%3E%3Cpath d='M7.576 1.781a10.271 10.271 0 0 0-4.5 8.494v13.13h6.428V6.306c0-1.776-.74-3.381-1.928-4.526z' clip-path='url(%23g)'/%3E%3Cpath fill='%23da3ab3' d='M45.547 59.394H39.12V46.265a3.852 3.852 0 0 0-3.848-3.848 3.852 3.852 0 0 0-3.848 3.848v13.129h-6.427V46.265c0-5.666 4.609-10.275 10.274-10.275 5.665 0 10.274 4.609 10.274 10.275v13.129z' style='font-variation-settings:normal;-inkscape-stroke:none' transform='translate(-21.921 -35.99)'/%3E%3Cpath fill='%23002c9d' d='M17.2 10.275v13.13h6.423v-13.13c0-.177-.003-.354-.012-.529a10.241 10.241 0 0 0-.105-1.033c-.026-.17-.058-.339-.092-.506a10.155 10.155 0 0 0-.252-.984 10.172 10.172 0 0 0-.553-1.399 10.25 10.25 0 0 0-1.334-2.082 10.391 10.391 0 0 0-.664-.728c-.065-.066-.134-.128-.2-.192a10.245 10.245 0 0 0-3.212 7.453zM7.576 1.781a10.271 10.271 0 0 0-4.5 8.494v13.13h6.428V6.306c0-1.776-.74-3.381-1.928-4.526z'/%3E%3C/svg%3E\"/>
            <text xml:space=\"preserve\" fill=\"#363A41\" font-family=\"Open Sans\" font-size=\"12\" clip-path=\"url(#svg-faviconDescriptionContainer)\">
                <tspan x=\"44\" y=\"21.655\">";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My store", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</tspan>
            </text>
            <path stroke=\"#6C868E\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"m245 13 3.5 3.5L252 20m0-7-7 7\"/>
            <path fill=\"#FAFBFC\" d=\"M277 33h-8v-8a8 8 0 0 0 8 8Z\"/>
            <defs>
                <clipPath id=\"svg-faviconDescriptionContainer\">
                    <path fill=\"#fff\" d=\"M20 9h204v16H20z\"/>
                </clipPath>
            </defs>
        </svg>
    </p>
    <p class=\"text-muted\">
        ";
        // line 48
        echo twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create your own with our [1]favicon generator[/1] to reinforce your brand image.", ["[1]" => "<a href=\"https://addons.prestashop.com/en/create-favicon.php?pab=1\" target=\"_blank\" rel=\"noopener\" class=\"external-link\">", "[/1]" => "</a>"], "Modules.Psxdesign.Admin"), "<a>");
        echo "
    </p>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/logos/Blocks/Favicon/favicon_description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 48,  56 => 36,  46 => 29,  41 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Favicon/favicon_description.html.twig", "C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\templates\\admin\\logos\\Blocks\\Favicon\\favicon_description.html.twig");
    }
}
