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

/* @PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig */
class __TwigTemplate_6cec265295cc24ede555f63b7d06b0162da5e1daa2232afa5164f84b9fbc092d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 45
        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 45);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.', 45, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["radio_widget"])) {
            throw new RuntimeError('Block "radio_widget" is not defined in trait "bootstrap_base_layout.html.twig".', 45, $this->source);
        }

        $_trait_0_blocks["base_radio_widget"] = $_trait_0_blocks["radio_widget"]; unset($_trait_0_blocks["radio_widget"]);

        if (!isset($_trait_0_blocks["checkbox_widget"])) {
            throw new RuntimeError('Block "checkbox_widget" is not defined in trait "bootstrap_base_layout.html.twig".', 45, $this->source);
        }

        $_trait_0_blocks["base_checkbox_widget"] = $_trait_0_blocks["checkbox_widget"]; unset($_trait_0_blocks["checkbox_widget"]);

        // line 48
        $_trait_1 = $this->loadTemplate("bootstrap_4_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 48);
        if (!$_trait_1->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 48, $this->source);
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        // line 49
        $_trait_2 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 49);
        if (!$_trait_2->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig".'" cannot be used as a trait.', 49, $this->source);
        }
        $_trait_2_blocks = $_trait_2->getBlocks();

        // line 50
        $_trait_3 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 50);
        if (!$_trait_3->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig".'" cannot be used as a trait.', 50, $this->source);
        }
        $_trait_3_blocks = $_trait_3->getBlocks();

        // line 51
        $_trait_4 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/material.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 51);
        if (!$_trait_4->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/material.html.twig".'" cannot be used as a trait.', 51, $this->source);
        }
        $_trait_4_blocks = $_trait_4->getBlocks();

        // line 52
        $_trait_5 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 52);
        if (!$_trait_5->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig".'" cannot be used as a trait.', 52, $this->source);
        }
        $_trait_5_blocks = $_trait_5->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks,
            $_trait_3_blocks,
            $_trait_4_blocks,
            $_trait_5_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_widget' => [$this, 'block_form_widget'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'ip_address_text_widget' => [$this, 'block_ip_address_text_widget'],
                'password_widget' => [$this, 'block_password_widget'],
                'form_row' => [$this, 'block_form_row'],
                'form_modify_all_shops' => [$this, 'block_form_modify_all_shops'],
                'form_disabling_switch' => [$this, 'block_form_disabling_switch'],
                'widget_type_class' => [$this, 'block_widget_type_class'],
                'form_label' => [$this, 'block_form_label'],
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'url_widget' => [$this, 'block_url_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'email_widget' => [$this, 'block_email_widget'],
                'button_widget' => [$this, 'block_button_widget'],
                'icon_button_widget' => [$this, 'block_icon_button_widget'],
                'choice_widget' => [$this, 'block_choice_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'choice_tree_widget' => [$this, 'block_choice_tree_widget'],
                'choice_tree_item_widget' => [$this, 'block_choice_tree_item_widget'],
                'translatefields_widget' => [$this, 'block_translatefields_widget'],
                'translate_fields_widget' => [$this, 'block_translate_fields_widget'],
                'translate_text_widget' => [$this, 'block_translate_text_widget'],
                'translate_textarea_widget' => [$this, 'block_translate_textarea_widget'],
                'date_picker_widget' => [$this, 'block_date_picker_widget'],
                'date_range_widget' => [$this, 'block_date_range_widget'],
                'search_and_reset_widget' => [$this, 'block_search_and_reset_widget'],
                'switch_widget' => [$this, 'block_switch_widget'],
                'row_attributes' => [$this, 'block_row_attributes'],
                '_form_step6_attachments_widget' => [$this, 'block__form_step6_attachments_widget'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_errors_field' => [$this, 'block_form_errors_field'],
                'form_errors_other' => [$this, 'block_form_errors_other'],
                'material_choice_table_widget' => [$this, 'block_material_choice_table_widget'],
                'material_multiple_choice_table_widget' => [$this, 'block_material_multiple_choice_table_widget'],
                'translatable_fields_with_tabs' => [$this, 'block_translatable_fields_with_tabs'],
                'translatable_fields_with_dropdown' => [$this, 'block_translatable_fields_with_dropdown'],
                'translatable_widget' => [$this, 'block_translatable_widget'],
                'birthday_widget' => [$this, 'block_birthday_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'shop_restriction_checkbox_widget' => [$this, 'block_shop_restriction_checkbox_widget'],
                'generatable_text_widget' => [$this, 'block_generatable_text_widget'],
                'text_with_recommended_length_widget' => [$this, 'block_text_with_recommended_length_widget'],
                'text_with_length_counter_widget' => [$this, 'block_text_with_length_counter_widget'],
                'integer_min_max_filter_widget' => [$this, 'block_integer_min_max_filter_widget'],
                'number_min_max_filter_widget' => [$this, 'block_number_min_max_filter_widget'],
                'number_widget' => [$this, 'block_number_widget'],
                'integer_widget' => [$this, 'block_integer_widget'],
                'form_unit' => [$this, 'block_form_unit'],
                'form_unit_prepend' => [$this, 'block_form_unit_prepend'],
                'form_help' => [$this, 'block_form_help'],
                'form_prepend_external_link' => [$this, 'block_form_prepend_external_link'],
                'form_append_external_link' => [$this, 'block_form_append_external_link'],
                'form_external_link' => [$this, 'block_form_external_link'],
                'form_external_link_attributes' => [$this, 'block_form_external_link_attributes'],
                'custom_content_widget' => [$this, 'block_custom_content_widget'],
                'text_widget' => [$this, 'block_text_widget'],
                'form_prepend_alert' => [$this, 'block_form_prepend_alert'],
                'form_append_alert' => [$this, 'block_form_append_alert'],
                'form_alert' => [$this, 'block_form_alert'],
                'unavailable_widget' => [$this, 'block_unavailable_widget'],
                'text_preview_widget' => [$this, 'block_text_preview_widget'],
                'link_preview_widget' => [$this, 'block_link_preview_widget'],
                'image_preview_widget' => [$this, 'block_image_preview_widget'],
                'delta_quantity_widget' => [$this, 'block_delta_quantity_widget'],
                'delta_quantity_quantity_widget' => [$this, 'block_delta_quantity_quantity_widget'],
                'delta_quantity_delta_row' => [$this, 'block_delta_quantity_delta_row'],
                'delta_quantity_delta_widget' => [$this, 'block_delta_quantity_delta_widget'],
                'submittable_input_widget' => [$this, 'block_submittable_input_widget'],
                'submittable_input_button_widget' => [$this, 'block_submittable_input_button_widget'],
                'submittable_delta_quantity_delta_widget' => [$this, 'block_submittable_delta_quantity_delta_widget'],
                'navigation_tab_widget' => [$this, 'block_navigation_tab_widget'],
                'accordion_widget' => [$this, 'block_accordion_widget'],
                'button_collection_widget' => [$this, 'block_button_collection_widget'],
                'avatar_url_row' => [$this, 'block_avatar_url_row'],
                'change_password_row' => [$this, 'block_change_password_row'],
                'price_reduction_widget' => [$this, 'block_price_reduction_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 34
        echo "
";
        // line 46
        echo "
";
        // line 53
        echo "
";
        // line 55
        echo "
";
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('form_start', $context, $blocks);
        // line 68
        $this->displayBlock('form_widget', $context, $blocks);
        // line 76
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 81
        $this->displayBlock('ip_address_text_widget', $context, $blocks);
        // line 91
        $this->displayBlock('password_widget', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('form_row', $context, $blocks);
        // line 117
        echo "
";
        // line 122
        $this->displayBlock('form_modify_all_shops', $context, $blocks);
        // line 129
        echo "
";
        // line 130
        $this->displayBlock('form_disabling_switch', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('widget_type_class', $context, $blocks);
        // line 157
        echo "
";
        // line 160
        $this->displayBlock('form_label', $context, $blocks);
        // line 205
        echo "
";
        // line 206
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 212
        echo "
";
        // line 213
        $this->displayBlock('money_widget', $context, $blocks);
        // line 231
        echo "
";
        // line 232
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 240
        echo "
";
        // line 241
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 255
        $this->displayBlock('url_widget', $context, $blocks);
        // line 261
        $this->displayBlock('date_widget', $context, $blocks);
        // line 279
        echo "
";
        // line 280
        $this->displayBlock('time_widget', $context, $blocks);
        // line 295
        $this->displayBlock('email_widget', $context, $blocks);
        // line 301
        $this->displayBlock('button_widget', $context, $blocks);
        // line 305
        echo "
";
        // line 306
        $this->displayBlock('icon_button_widget', $context, $blocks);
        // line 324
        echo "
";
        // line 325
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 329
        echo "
";
        // line 330
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 334
        echo "
";
        // line 335
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 358
        echo "
";
        // line 359
        $this->displayBlock('choice_tree_widget', $context, $blocks);
        // line 369
        echo "
";
        // line 370
        $this->displayBlock('choice_tree_item_widget', $context, $blocks);
        // line 408
        echo "
";
        // line 409
        $this->displayBlock('translatefields_widget', $context, $blocks);
        // line 434
        echo "
";
        // line 435
        $this->displayBlock('translate_fields_widget', $context, $blocks);
        // line 441
        echo "
";
        // line 442
        $this->displayBlock('translate_text_widget', $context, $blocks);
        // line 478
        echo "
";
        // line 479
        $this->displayBlock('translate_textarea_widget', $context, $blocks);
        // line 520
        echo "
";
        // line 521
        $this->displayBlock('date_picker_widget', $context, $blocks);
        // line 535
        echo "
";
        // line 536
        $this->displayBlock('date_range_widget', $context, $blocks);
        // line 552
        echo "
";
        // line 553
        $this->displayBlock('search_and_reset_widget', $context, $blocks);
        // line 578
        echo "
";
        // line 579
        $this->displayBlock('switch_widget', $context, $blocks);
        // line 603
        $this->displayBlock('row_attributes', $context, $blocks);
        // line 611
        $this->displayBlock('_form_step6_attachments_widget', $context, $blocks);
        // line 640
        echo "
";
        // line 642
        echo "
";
        // line 643
        $this->displayBlock('choice_label', $context, $blocks);
        // line 648
        echo "
";
        // line 649
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 652
        echo "
";
        // line 653
        $this->displayBlock('radio_label', $context, $blocks);
        // line 656
        echo "
";
        // line 657
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 689
        echo "
";
        // line 690
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 704
        echo "
";
        // line 705
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 712
        echo "
";
        // line 714
        echo "
";
        // line 715
        $this->displayBlock('form_errors', $context, $blocks);
        // line 722
        echo "
";
        // line 723
        $this->displayBlock('form_errors_field', $context, $blocks);
        // line 789
        echo "
";
        // line 790
        $this->displayBlock('form_errors_other', $context, $blocks);
        // line 809
        echo "
";
        // line 811
        echo "
";
        // line 812
        $this->displayBlock('material_choice_table_widget', $context, $blocks);
        // line 848
        echo "
";
        // line 849
        $this->displayBlock('material_multiple_choice_table_widget', $context, $blocks);
        // line 901
        echo "
";
        // line 903
        $this->displayBlock('translatable_fields_with_tabs', $context, $blocks);
        // line 926
        echo "
";
        // line 927
        $this->displayBlock('translatable_fields_with_dropdown', $context, $blocks);
        // line 963
        echo "
";
        // line 964
        $this->displayBlock('translatable_widget', $context, $blocks);
        // line 972
        echo "
";
        // line 973
        $this->displayBlock('birthday_widget', $context, $blocks);
        // line 997
        echo "
";
        // line 998
        $this->displayBlock('file_widget', $context, $blocks);
        // line 1030
        echo "
";
        // line 1031
        $this->displayBlock('shop_restriction_checkbox_widget', $context, $blocks);
        // line 1047
        echo "
";
        // line 1048
        $this->displayBlock('generatable_text_widget', $context, $blocks);
        // line 1067
        echo "
";
        // line 1068
        $this->displayBlock('text_with_recommended_length_widget', $context, $blocks);
        // line 1093
        echo "
";
        // line 1094
        $this->displayBlock('text_with_length_counter_widget', $context, $blocks);
        // line 1122
        echo "
";
        // line 1123
        $this->displayBlock('integer_min_max_filter_widget', $context, $blocks);
        // line 1127
        echo "
";
        // line 1128
        $this->displayBlock('number_min_max_filter_widget', $context, $blocks);
        // line 1133
        $this->displayBlock('number_widget', $context, $blocks);
        // line 1143
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 1153
        $this->displayBlock('form_unit', $context, $blocks);
        // line 1160
        echo "
";
        // line 1161
        $this->displayBlock('form_unit_prepend', $context, $blocks);
        // line 1168
        echo "
";
        // line 1169
        $this->displayBlock('form_help', $context, $blocks);
        // line 1178
        echo "
";
        // line 1179
        $this->displayBlock('form_prepend_external_link', $context, $blocks);
        // line 1184
        echo "
";
        // line 1185
        $this->displayBlock('form_append_external_link', $context, $blocks);
        // line 1190
        echo "
";
        // line 1191
        $this->displayBlock('form_external_link', $context, $blocks);
        // line 1204
        $this->displayBlock('form_external_link_attributes', $context, $blocks);
        // line 1218
        $this->displayBlock('custom_content_widget', $context, $blocks);
        // line 1221
        echo "
";
        // line 1222
        $this->displayBlock('text_widget', $context, $blocks);
        // line 1239
        $this->displayBlock('form_prepend_alert', $context, $blocks);
        // line 1245
        $this->displayBlock('form_append_alert', $context, $blocks);
        // line 1251
        $this->displayBlock('form_alert', $context, $blocks);
        // line 1284
        $this->displayBlock('unavailable_widget', $context, $blocks);
        // line 1291
        echo "
";
        // line 1292
        $this->displayBlock('text_preview_widget', $context, $blocks);
        // line 1321
        echo "
";
        // line 1322
        $this->displayBlock('link_preview_widget', $context, $blocks);
        // line 1329
        echo "
";
        // line 1330
        $this->displayBlock('image_preview_widget', $context, $blocks);
        // line 1335
        echo "
";
        // line 1336
        $this->displayBlock('delta_quantity_widget', $context, $blocks);
        // line 1349
        echo "
";
        // line 1350
        $this->displayBlock('delta_quantity_quantity_widget', $context, $blocks);
        // line 1362
        echo "
";
        // line 1363
        $this->displayBlock('delta_quantity_delta_row', $context, $blocks);
        // line 1379
        echo "
";
        // line 1380
        $this->displayBlock('delta_quantity_delta_widget', $context, $blocks);
        // line 1385
        echo "
";
        // line 1386
        $this->displayBlock('submittable_input_widget', $context, $blocks);
        // line 1399
        echo "
";
        // line 1400
        $this->displayBlock('submittable_input_button_widget', $context, $blocks);
        // line 1405
        echo "
";
        // line 1406
        $this->displayBlock('submittable_delta_quantity_delta_widget', $context, $blocks);
        // line 1420
        $this->displayBlock('navigation_tab_widget', $context, $blocks);
        // line 1471
        $this->displayBlock('accordion_widget', $context, $blocks);
        // line 1511
        $this->displayBlock('button_collection_widget', $context, $blocks);
        // line 1554
        echo "
";
        // line 1555
        $this->displayBlock('avatar_url_row', $context, $blocks);
        // line 1565
        echo "
";
        // line 1566
        $this->displayBlock('change_password_row', $context, $blocks);
        // line 1606
        $this->displayBlock('price_reduction_widget', $context, $blocks);
    }

    // line 58
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-alerts-success" => twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 59), "alerts", [], "any", false, true, false, 59), "success", [], "any", true, true, false, 59)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 59), "alerts", [], "any", false, true, false, 59), "success", [], "any", false, false, false, 59), [])) : ([])))]);
        // line 60
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-alerts-info" => twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 60), "alerts", [], "any", false, true, false, 60), "info", [], "any", true, true, false, 60)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 60), "alerts", [], "any", false, true, false, 60), "info", [], "any", false, false, false, 60), [])) : ([])))]);
        // line 61
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-alerts-warning" => twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 61), "alerts", [], "any", false, true, false, 61), "warning", [], "any", true, true, false, 61)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 61), "alerts", [], "any", false, true, false, 61), "warning", [], "any", false, false, false, 61), [])) : ([])))]);
        // line 62
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-alerts-error" => twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 62), "alerts", [], "any", false, true, false, 62), "error", [], "any", true, true, false, 62)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 62), "alerts", [], "any", false, true, false, 62), "error", [], "any", false, false, false, 62), [])) : ([])))]);
        // line 63
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-form-submitted" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 63), "submitted", [], "any", false, false, false, 63)) ? (1) : (0))]);
        // line 64
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-form-valid" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 64), "valid", [], "any", false, false, false, 64)) ? (1) : (0))]);
        // line 65
        echo "  ";
        $this->displayParentBlock("form_start", $context, $blocks);
        echo "
";
    }

    // line 68
    public function block_form_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        if (array_key_exists("columns_number", $context)) {
            // line 70
            echo "    ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 70)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 70), "")) : ("")) . " form-columns-") . ($context["columns_number"] ?? null)))]);
            // line 71
            echo "  ";
        }
        // line 72
        echo "  ";
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 73
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 76
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        // line 78
        $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 78)->display(twig_array_merge($context, ["attr" => ($context["attr"] ?? null)]));
    }

    // line 81
    public function block_ip_address_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "  <div class=\"input-group\">";
        // line 83
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 84
        echo "<button type=\"button\" class=\"btn btn-outline-primary add_ip_button\" data-ip=\"";
        echo twig_escape_filter($this->env, ($context["currentIp"] ?? null), "html", null, true);
        echo "\">
      <i class=\"material-icons\">add_circle</i> ";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add my IP", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
  </div>
  ";
        // line 88
        $this->displayBlock("form_help", $context, $blocks);
        echo "
";
    }

    // line 91
    public function block_password_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "password")) : ("password"));
        // line 93
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        // line 94
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 99
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "<div class=\"form-group";
        $this->displayBlock("widget_type_class", $context, $blocks);
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 100)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 100), "html", null, true);
        }
        echo "\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 102
        $this->displayBlock("form_prepend_alert", $context, $blocks);
        // line 103
        $this->displayBlock("form_prepend_external_link", $context, $blocks);
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 107
        $this->displayBlock("form_modify_all_shops", $context, $blocks);
        // line 109
        $this->displayBlock("form_append_alert", $context, $blocks);
        // line 110
        $this->displayBlock("form_append_external_link", $context, $blocks);
        // line 111
        echo "</div>

  ";
        // line 113
        if (($context["column_breaker"] ?? null)) {
            // line 114
            echo "  <div class=\"form-group form-column-breaker\"></div>
  ";
        }
    }

    // line 122
    public function block_form_modify_all_shops($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 123
        echo "  ";
        $context["overrideCheckboxName"] = (($context["modify_all_shops_prefix"] ?? null) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 123), "name", [], "any", false, false, false, 123));
        // line 124
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 124), ($context["overrideCheckboxName"] ?? null), [], "any", true, true, false, 124)) {
            // line 125
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 125), ($context["overrideCheckboxName"] ?? null), [], "any", false, false, false, 125), 'errors');
            echo "
    ";
            // line 126
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 126), ($context["overrideCheckboxName"] ?? null), [], "any", false, false, false, 126), 'widget');
            echo "
  ";
        }
    }

    // line 130
    public function block_form_disabling_switch($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "  ";
        $context["disablingSwitchName"] = (($context["disabling_switch_prefix"] ?? null) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 131), "name", [], "any", false, false, false, 131));
        // line 132
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 132), ($context["disablingSwitchName"] ?? null), [], "any", true, true, false, 132)) {
            // line 133
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 133), ($context["disablingSwitchName"] ?? null), [], "any", false, false, false, 133), 'errors');
            echo "
    ";
            // line 134
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 134), ($context["disablingSwitchName"] ?? null), [], "any", false, false, false, 134), 'widget');
            echo "
  ";
        }
    }

    // line 138
    public function block_widget_type_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 139
        if (( !($context["compound"] ?? null) && (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 139), "block_prefixes", [], "any", false, false, false, 139)), 2)))) {
            // line 140
            echo " ";
            ob_start(function () { return ''; });
            // line 141
            echo "
    ";
            // line 142
            $context["index"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 142), "block_prefixes", [], "any", false, false, false, 142)) - 2);
            // line 143
            echo "    ";
            $context["widgetType"] = (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 143), "block_prefixes", [], "any", false, false, false, 143)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["index"] ?? null)] ?? null) : null);
            // line 144
            echo "    ";
            if ((0 === twig_compare(($context["widgetType"] ?? null), "choice"))) {
                // line 145
                echo "      ";
                if ( !($context["expanded"] ?? null)) {
                    // line 146
                    echo "        ";
                    $context["widgetType"] = "select";
                    // line 147
                    echo "      ";
                } elseif (($context["multiple"] ?? null)) {
                    // line 148
                    echo "        ";
                    $context["widgetType"] = "checboxes";
                    // line 149
                    echo "      ";
                } else {
                    // line 150
                    echo "        ";
                    $context["widgetType"] = "radio";
                    // line 151
                    echo "      ";
                }
                // line 152
                echo "    ";
            }
            // line 153
            echo "    ";
            echo twig_escape_filter($this->env, ($context["widgetType"] ?? null), "html", null, true);
            echo "-widget
";
            $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 140
            echo twig_spaceless($___internal_parse_0_);
        }
    }

    // line 160
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 161
        if ( !(($context["label"] ?? null) === false)) {
            // line 162
            if ( !($context["compound"] ?? null)) {
                // line 163
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            }
            // line 165
            echo "    ";
            if (($context["required"] ?? null)) {
                // line 166
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 166)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 166), "")) : ("")) . " required"))]);
            }
            // line 168
            echo "    ";
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 169
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 170
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                     // line 171
($context["name"] ?? null), "%id%" =>                     // line 172
($context["id"] ?? null)]);
                } else {
                    // line 175
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 179
            $context["labelTag"] = ((array_key_exists("label_tag_name", $context)) ? (_twig_default_filter(($context["label_tag_name"] ?? null), "label")) : ("label"));
            // line 180
            echo "    <";
            echo twig_escape_filter($this->env, ($context["labelTag"] ?? null), "html", null, true);
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 181
            if (($context["required"] ?? null)) {
                // line 182
                echo "      <span class=\"text-danger\">*</span>
    ";
            }
            // line 184
            echo "    ";
            echo (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)));
            echo "
    ";
            // line 185
            if (twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "tooltip", [], "array", true, true, false, 185)) {
                // line 186
                echo "      ";
                $context["placement"] = ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "tooltip_placement", [], "array", true, true, false, 186)) ? ((($__internal_compile_1 = ($context["label_attr"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["tooltip_placement"] ?? null) : null)) : ("top"));
                // line 187
                echo "      <i class=\"icon-question\" data-toggle=\"pstooltip\" data-placement=\"";
                echo twig_escape_filter($this->env, ($context["placement"] ?? null), "html", null, true);
                echo "\"
         title=\"";
                // line 188
                echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["label_attr"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["tooltip"] ?? null) : null), "html", null, true);
                echo "\"></i>
    ";
            }
            // line 190
            echo "
    ";
            // line 191
            if ((array_key_exists("label_help_box", $context) || twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "popover", [], "array", true, true, false, 191))) {
                // line 192
                echo "      ";
                $context["content"] = ((array_key_exists("label_help_box", $context)) ? (($context["label_help_box"] ?? null)) : ((($__internal_compile_3 = ($context["label_attr"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["popover"] ?? null) : null)));
                // line 193
                echo "      ";
                $context["placement"] = ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "popover_placement", [], "array", true, true, false, 193)) ? ((($__internal_compile_4 = ($context["label_attr"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["popover_placement"] ?? null) : null)) : ("top"));
                // line 194
                echo "      ";
                $this->loadTemplate("@Common/HelpBox/helpbox.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 194)->display(twig_array_merge($context, ["placement" => ($context["placement"] ?? null), "content" => ($context["content"] ?? null)]));
                // line 195
                echo "    ";
            }
            // line 196
            $this->displayBlock("form_disabling_switch", $context, $blocks);
            // line 197
            echo "</";
            echo twig_escape_filter($this->env, ($context["labelTag"] ?? null), "html", null, true);
            echo ">";
        }
        // line 199
        if (array_key_exists("label_subtitle", $context)) {
            // line 200
            echo "    <p class=\"subtitle\">";
            echo ($context["label_subtitle"] ?? null);
            echo "</p>
  ";
        }
    }

    // line 206
    public function block_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 207
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 207)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 207), "")) : ("")) . " form-control"))]);
        // line 208
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        // line 209
        $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 209)->display(twig_array_merge($context, ["attr" => ($context["attr"] ?? null)]));
        // line 210
        echo "  ";
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 213
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 214
        echo "<div class=\"input-group money-type\">
    ";
        // line 215
        $context["prepend"] = (0 === twig_compare("{{", twig_slice($this->env, ($context["money_pattern"] ?? null), 0, 2)));
        // line 216
        echo "    ";
        if ( !($context["prepend"] ?? null)) {
            // line 217
            echo "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text\">";
            // line 218
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 221
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 222
        if (($context["prepend"] ?? null)) {
            // line 223
            echo "      <div class=\"input-group-append\">
        <span class=\"input-group-text\">";
            // line 224
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 227
        echo "  </div>

  ";
        // line 229
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 232
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 233
        echo "<div class=\"input-group\">";
        // line 234
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 235
        echo "<div class=\"input-group-append\">
      <span class=\"input-group-text\">%</span>
    </div>
  </div>";
    }

    // line 241
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 242
        if ((0 === twig_compare(($context["widget"] ?? null), "single_text"))) {
            // line 243
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 245
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 245)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 245), "")) : ("")) . " form-inline"))]);
            // line 246
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 247
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 247), 'errors');
            // line 248
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 248), 'errors');
            // line 249
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 249), 'widget', ["datetime" => true]);
            // line 250
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 250), 'widget', ["datetime" => true]);
            // line 251
            echo "</div>";
        }
    }

    // line 255
    public function block_url_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 256
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "url")) : ("url"));
        // line 257
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        // line 258
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 261
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 262
        if ((0 === twig_compare(($context["widget"] ?? null), "single_text"))) {
            // line 263
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 265
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 265)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 265), "")) : ("")) . " form-inline"))]);
            // line 266
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 267
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 269
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 270
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 270), 'widget'), "{{ month }}" =>             // line 271
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 271), 'widget'), "{{ day }}" =>             // line 272
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 272), 'widget')]);
            // line 274
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 275
                echo "</div>";
            }
        }
    }

    // line 280
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 281
        if ((0 === twig_compare(($context["widget"] ?? null), "single_text"))) {
            // line 282
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 284
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 284)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 284), "")) : ("")) . " form-inline"))]);
            // line 285
            if (( !array_key_exists("datetime", $context) || (0 === twig_compare(false, ($context["datetime"] ?? null))))) {
                // line 286
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 288
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 288), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 288), 'widget');
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 288), 'widget');
            }
            // line 289
            echo "    ";
            if (( !array_key_exists("datetime", $context) || (0 === twig_compare(false, ($context["datetime"] ?? null))))) {
                // line 290
                echo "</div>";
            }
        }
    }

    // line 295
    public function block_email_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 296
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "email")) : ("email"));
        // line 297
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        // line 298
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 301
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 302
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 302)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 302), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 303
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 306
    public function block_icon_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 307
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 307)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 307), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 308
        echo "  ";
        if ((0 === twig_compare(($context["button_type"] ?? null), "link"))) {
            // line 309
            echo "    ";
            $context["buttonTag"] = "a";
            // line 310
            echo "    ";
            // line 311
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", true, true, false, 311)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", false, false, false, 311), false)) : (false))) {
                // line 312
                echo "      ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 312) . " disabled"))]);
                // line 313
                echo "    ";
            }
            // line 314
            echo "  ";
        } else {
            // line 315
            echo "    ";
            $context["buttonTag"] = "button";
            // line 316
            echo "    ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["type" => "button"]);
            // line 317
            echo "  ";
        }
        // line 318
        echo "
  <";
        // line 319
        echo twig_escape_filter($this->env, ($context["buttonTag"] ?? null), "html", null, true);
        echo " ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">
    <i class=\"material-icons\">";
        // line 320
        echo twig_escape_filter($this->env, ($context["button_icon"] ?? null), "html", null, true);
        echo "</i>
    <span class=\"btn-label\">";
        // line 321
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "</span>
  </";
        // line 322
        echo twig_escape_filter($this->env, ($context["buttonTag"] ?? null), "html", null, true);
        echo ">";
    }

    // line 325
    public function block_choice_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 326
        $this->displayParentBlock("choice_widget", $context, $blocks);
        // line 327
        $this->displayBlock("form_help", $context, $blocks);
        echo "
";
    }

    // line 330
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 331
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 331)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 331), "")) : ("")) . " custom-select"))]);
        // line 332
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
    }

    // line 335
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 336
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 336)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 336), "")) : ("")))) {
            // line 337
            echo "<div class=\"control-group\">";
            // line 338
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 339
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,                 // line 340
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 340)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 340), "")) : ("")), "translation_domain" =>                 // line 341
($context["choice_translation_domain"] ?? null), "valid" =>                 // line 342
($context["valid"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 345
            echo "</div>";
        } else {
            // line 347
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 348
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 349
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,                 // line 350
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 350)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 350), "")) : ("")), "translation_domain" =>                 // line 351
($context["choice_translation_domain"] ?? null), "valid" =>                 // line 352
($context["valid"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 355
            echo "</div>";
        }
    }

    // line 359
    public function block_choice_tree_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 360
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"category-tree-overflow\">
    <ul class=\"category-tree\">
      <li class=\"form-control-label text-right main-category\">";
        // line 362
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Main category", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</li>";
        // line 363
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 364
            echo "        ";
            $this->displayBlock("choice_tree_item_widget", $context, $blocks);
            echo "
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 366
        echo "</ul>
  </div>";
    }

    // line 370
    public function block_choice_tree_item_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 371
        echo "<li>
    ";
        // line 372
        $context["checked"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 372), "submitted_values", [], "any", true, true, false, 372) && twig_get_attribute($this->env, $this->source, ($context["submitted_values"] ?? null), twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 372), [], "array", true, true, false, 372))) ? ("checked=\"checked\"") : (""));
        // line 373
        echo "    ";
        if (($context["multiple"] ?? null)) {
            // line 374
            echo "<div class=\"checkbox\">
        <label>
          <input type=\"checkbox\" name=\"";
            // line 376
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 376), "full_name", [], "any", false, false, false, 376), "html", null, true);
            echo "[tree][]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 376), "html", null, true);
            echo "\" class=\"category\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
            echo ">
          ";
            // line 377
            if ((twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "active", [], "any", true, true, false, 377) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "active", [], "any", false, false, false, 377), 0)))) {
                // line 378
                echo "            <i>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 378), "html", null, true);
                echo "</i>";
            } else {
                // line 380
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 380), "html", null, true);
                echo "
          ";
            }
            // line 382
            echo "          ";
            if (array_key_exists("defaultCategory", $context)) {
                // line 383
                echo "            <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 383), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
          ";
            }
            // line 385
            echo "        </label>
      </div>";
        } else {
            // line 388
            echo "<div class=\"radio\">
        <label>
          <input type=\"radio\" name=\"form[";
            // line 390
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 390), "id", [], "any", false, false, false, 390), "html", null, true);
            echo "][tree]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 390), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
            echo " class=\"category\">
          ";
            // line 391
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 391), "html", null, true);
            echo "
          ";
            // line 392
            if (array_key_exists("defaultCategory", $context)) {
                // line 393
                echo "            <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 393), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
          ";
            }
            // line 395
            echo "        </label>
      </div>";
        }
        // line 398
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", true, true, false, 398)) {
            // line 399
            echo "      <ul>
        ";
            // line 400
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", false, false, false, 400));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 401
                echo "          ";
                $context["child"] = $context["item"];
                // line 402
                echo "          ";
                $this->displayBlock("choice_tree_item_widget", $context, $blocks);
                echo "
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 404
            echo "</ul>
    ";
        }
        // line 406
        echo "  </li>";
    }

    // line 409
    public function block_translatefields_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 410
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
  <div class=\"translations tabbable\" id=\"";
        // line 411
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 411), "id", [], "any", false, false, false, 411), "html", null, true);
        echo "\" tabindex=\"1\">
    ";
        // line 412
        if (((0 === twig_compare(($context["hideTabs"] ?? null), false)) && (1 === twig_compare(twig_length_filter($this->env, ($context["form"] ?? null)), 1)))) {
            // line 413
            echo "      <ul class=\"translationsLocales nav nav-pills\">
        ";
            // line 414
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 415
                echo "          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"";
                // line 416
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 416), "label", [], "any", false, false, false, 416), "html", null, true);
                echo "\" class=\"";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["defaultLocale"] ?? null), "id_lang", [], "any", false, false, false, 416), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 416), "name", [], "any", false, false, false, 416)))) {
                    echo "active";
                }
                echo " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 416), "id", [], "any", false, false, false, 416), "html", null, true);
                echo "\">
              ";
                // line 417
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 417), "label", [], "any", false, false, false, 417)), "html", null, true);
                echo "
            </a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 421
            echo "      </ul>
    ";
        }
        // line 423
        echo "
    <div class=\"translationsFields tab-content\">
      ";
        // line 425
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 426
            echo "        <div data-locale=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 426), "label", [], "any", false, false, false, 426), "html", null, true);
            echo "\" class=\"translationsFields-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 426), "id", [], "any", false, false, false, 426), "html", null, true);
            echo " tab-pane translation-field ";
            if (((0 === twig_compare(($context["hideTabs"] ?? null), false)) && (1 === twig_compare(twig_length_filter($this->env, ($context["form"] ?? null)), 1)))) {
                echo "panel panel-default";
            }
            echo " ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["defaultLocale"] ?? null), "id_lang", [], "any", false, false, false, 426), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 426), "name", [], "any", false, false, false, 426)))) {
                echo "show active";
            }
            echo " ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 426), "valid", [], "any", false, false, false, 426)) {
                echo "field-error";
            }
            echo " translation-label-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 426), "label", [], "any", false, false, false, 426), "html", null, true);
            echo "\">
          ";
            // line 427
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            echo "
          ";
            // line 428
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 431
        echo "    </div>
  </div>
";
    }

    // line 435
    public function block_translate_fields_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 436
        if (( !array_key_exists("type", $context) || (0 !== twig_compare("file", ($context["type"] ?? null))))) {
            // line 437
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 437)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 437), "")) : ("")) . " form-control"))]);
        }
        // line 439
        $this->displayParentBlock("translate_fields_widget", $context, $blocks);
    }

    // line 442
    public function block_translate_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 443
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 445
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 446
            echo "      ";
            $context["classes"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 446), "attr", [], "any", false, true, false, 446), "class", [], "any", true, true, false, 446)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 446), "attr", [], "any", false, true, false, 446), "class", [], "any", false, false, false, 446), "")) : ("")) . " js-locale-input");
            // line 447
            echo "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 447), "label", [], "any", false, false, false, 447));
            // line 448
            echo "
      ";
            // line 449
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 449), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 449), "name", [], "any", false, false, false, 449)))) {
                // line 450
                echo "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 451
                echo "      ";
            }
            // line 453
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(($context["classes"] ?? null))]);
            // line 454
            $this->displayBlock("form_widget", $context, $blocks);
            echo "
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 456
        echo "
    ";
        // line 457
        if ( !($context["hide_locales"] ?? null)) {
            // line 458
            echo "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 464
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 464), "id", [], "any", false, false, false, 464), "html", null, true);
            echo "\"
        >
          ";
            // line 466
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 466), "default_locale", [], "any", false, false, false, 466), "iso_code", [], "any", false, false, false, 466), "html", null, true);
            echo "
        </button>

        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 469
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 469), "id", [], "any", false, false, false, 469), "html", null, true);
            echo "\">
          ";
            // line 470
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 471
                echo "            <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 471), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 471), "html", null, true);
                echo "</span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 473
            echo "        </div>
      </div>
    ";
        }
        // line 476
        echo "  </div>";
    }

    // line 479
    public function block_translate_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 480
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 482
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["textarea"]) {
            // line 483
            echo "      ";
            $context["classes"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, true, false, 483), "attr", [], "any", false, true, false, 483), "class", [], "any", true, true, false, 483)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, true, false, 483), "attr", [], "any", false, true, false, 483), "class", [], "any", false, false, false, 483), "")) : ("")) . " js-locale-input");
            // line 484
            echo "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 484), "label", [], "any", false, false, false, 484));
            // line 485
            echo "
      ";
            // line 486
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 486), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 486), "name", [], "any", false, false, false, 486)))) {
                // line 487
                echo "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 488
                echo "      ";
            }
            // line 489
            echo "
      <div class=\"";
            // line 490
            echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 491
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["textarea"], 'widget', ["attr" => ["class" => twig_trim_filter(($context["classes"] ?? null))]]);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['textarea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 494
        echo "
    ";
        // line 495
        if (($context["show_locale_select"] ?? null)) {
            // line 496
            echo "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 502
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 502), "id", [], "any", false, false, false, 502), "html", null, true);
            echo "\"
        >
          ";
            // line 504
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 504), "default_locale", [], "any", false, false, false, 504), "iso_code", [], "any", false, false, false, 504), "html", null, true);
            echo "
        </button>

        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 507
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 507), "id", [], "any", false, false, false, 507), "html", null, true);
            echo "\">
          ";
            // line 508
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 509
                echo "            <span class=\"dropdown-item js-locale-item\"
                  data-locale=\"";
                // line 510
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 510), "html", null, true);
                echo "\"
            >
              ";
                // line 512
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 512), "html", null, true);
                echo "
            </span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 515
            echo "        </div>
      </div>
    ";
        }
        // line 518
        echo "  </div>";
    }

    // line 521
    public function block_date_picker_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 522
        echo "  ";
        ob_start(function () { return ''; });
        // line 523
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 523)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 523), "")) : ("")) . " form-control datepicker"))]);
        // line 524
        echo "    <div class=\"input-group datepicker\">
      <input type=\"text\" data-format=\"";
        // line 525
        echo twig_escape_filter($this->env, ($context["date_format"] ?? null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo "/>
      <div class=\"input-group-append\">
        <div class=\"input-group-text\">
          <i class=\"material-icons\">date_range</i>
        </div>
      </div>
    </div>
    ";
        // line 532
        $this->displayBlock("form_help", $context, $blocks);
        echo "
  ";
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 522
        echo twig_spaceless($___internal_parse_1_);
    }

    // line 536
    public function block_date_range_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 537
        echo "  ";
        ob_start(function () { return ''; });
        // line 538
        echo "    <div class=\"input-group date-range row\">
      <div class=\"col col-md-4\">
        ";
        // line 540
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "from", [], "any", false, false, false, 540), 'row');
        echo "
      </div>
      <div class=\"col col-md-4\">
        ";
        // line 543
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "to", [], "any", false, false, false, 543), 'row');
        echo "
        ";
        // line 544
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "unlimited", [], "any", true, true, false, 544)) {
            // line 545
            echo "          ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "unlimited", [], "any", false, false, false, 545), 'widget');
            echo "
          ";
            // line 546
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "unlimited", [], "any", false, false, false, 546), 'errors');
            echo "
        ";
        }
        // line 548
        echo "      </div>
    </div>
  ";
        $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 537
        echo twig_spaceless($___internal_parse_2_);
    }

    // line 553
    public function block_search_and_reset_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 554
        echo "  ";
        ob_start(function () { return ''; });
        // line 555
        echo "    <button type=\"submit\"
            class=\"btn btn-primary grid-search-button d-block\"
            title=\"";
        // line 557
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "\"
            name=\"";
        // line 558
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "[search]\"
    >
      <i class=\"material-icons\">search</i>
      ";
        // line 561
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
    ";
        // line 563
        if (($context["show_reset_button"] ?? null)) {
            // line 564
            echo "      <div class=\"js-grid-reset-button\">
        <button type=\"reset\"
                name=\"";
            // line 566
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "[reset]\"
                class=\"btn btn-link js-reset-search btn d-block grid-reset-button\"
                data-url=\"";
            // line 568
            echo twig_escape_filter($this->env, ($context["reset_url"] ?? null), "html", null, true);
            echo "\"
                data-redirect=\"";
            // line 569
            echo twig_escape_filter($this->env, ($context["redirect_url"] ?? null), "html", null, true);
            echo "\"
        >
          <i class=\"material-icons\">clear</i>
          ";
            // line 572
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset", [], "Admin.Actions"), "html", null, true);
            echo "
        </button>
      </div>
    ";
        }
        // line 576
        echo "  ";
        $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 554
        echo twig_spaceless($___internal_parse_3_);
    }

    // line 579
    public function block_switch_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 580
        echo "  ";
        ob_start(function () { return ''; });
        // line 581
        echo "  ";
        $context["rowAttributes"] = ((array_key_exists("row_attr", $context)) ? (_twig_default_filter(($context["row_attr"] ?? null), [])) : ([]));
        // line 582
        echo "  <div class=\"input-group ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["rowAttributes"] ?? null), "class", [], "any", true, true, false, 582)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["rowAttributes"] ?? null), "class", [], "any", false, false, false, 582), "")) : ("")), "html", null, true);
        echo "\" ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rowAttributes"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["rowAttr"]) {
            echo " ";
            if ((0 !== twig_compare($context["key"], "class"))) {
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["rowAttr"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['rowAttr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
    <span class=\"ps-switch\" id=\"";
        // line 583
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 583), "id", [], "any", false, false, false, 583), "html", null, true);
        echo "\">
        ";
        // line 584
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 585
            echo "          ";
            $context["inputId"] = ((($context["id"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 585));
            // line 586
            echo "          <input id=\"";
            echo twig_escape_filter($this->env, ($context["inputId"] ?? null), "html", null, true);
            echo "\"
            ";
            // line 587
            $this->displayBlock("attributes", $context, $blocks);
            echo "
            name=\"";
            // line 588
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "\"
            value=\"";
            // line 589
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 589), "html", null, true);
            echo "\"
            ";
            // line 590
            if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null))) {
                echo "checked=\"\"";
            }
            // line 591
            echo "            ";
            if (($context["disabled"] ?? null)) {
                echo "disabled=\"\"";
            }
            // line 592
            echo "            type=\"radio\"
          >
          ";
            // line 594
            if (($context["show_choices"] ?? null)) {
                echo "<label for=\"";
                echo twig_escape_filter($this->env, ($context["inputId"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 594), [], ($context["choice_translation_domain"] ?? null)), "html", null, true);
                echo "</label>";
            }
            // line 595
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 596
        echo "        <span class=\"slide-button\"></span>
    </span>
  </div>
  ";
        $___internal_parse_4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 580
        echo twig_spaceless($___internal_parse_4_);
        // line 600
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 603
    public function block_row_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 604
        $context["rowAttributes"] = ((array_key_exists("row_attr", $context)) ? (_twig_default_filter(($context["row_attr"] ?? null), [])) : ([]));
        // line 605
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rowAttributes"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 606
            echo " ";
            // line 607
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 611
    public function block__form_step6_attachments_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 612
        echo "  <div class=\"js-options-no-attachments ";
        echo (((1 === twig_compare(twig_length_filter($this->env, ($context["form"] ?? null)), 0))) ? ("hide") : (""));
        echo "\">
    <small>";
        // line 613
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There is no attachment yet.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "</small>
  </div>
  <div id=\"product-attachments\" class=\"panel panel-default\">
    <div class=\"panel-body js-options-with-attachments ";
        // line 616
        echo (((0 === twig_compare(twig_length_filter($this->env, ($context["form"] ?? null)), 0))) ? ("hide") : (""));
        echo "\">
      <div>
        <table id=\"product-attachment-file\" class=\"table\">
          <thead class=\"thead-default\">
          <tr>
            <th class=\"col-md-3\">";
        // line 621
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title", [], "Admin.Global"), "html", null, true);
        echo "</th>
            <th class=\"col-md-6\">";
        // line 622
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File name", [], "Admin.Global"), "html", null, true);
        echo "</th>
            <th class=\"col-md-2\">";
        // line 623
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
          </tr>
          </thead>
          <tbody>";
        // line 627
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 628
            echo "            <tr>
              <td class=\"col-md-3\">";
            // line 629
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "</td>
              <td class=\"col-md-6 file-name\"><span>";
            // line 630
            echo twig_escape_filter($this->env, (($__internal_compile_5 = (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 630), "attr", [], "any", false, false, false, 630), "data", [], "any", false, false, false, 630)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 630)] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["file_name"] ?? null) : null), "html", null, true);
            echo "</span></td>
              <td class=\"col-md-2\">";
            // line 631
            echo twig_escape_filter($this->env, (($__internal_compile_7 = (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 631), "attr", [], "any", false, false, false, 631), "data", [], "any", false, false, false, 631)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 631)] ?? null) : null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["mime"] ?? null) : null), "html", null, true);
            echo "</td>
            </tr>
          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 634
        echo "</tbody>
        </table>
      </div>
    </div>
  </div>
";
    }

    // line 643
    public function block_choice_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 645
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 645)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 645), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 646
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 649
    public function block_checkbox_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 650
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 653
    public function block_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 654
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 657
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 658
        echo "  ";
        // line 659
        echo "  ";
        if (array_key_exists("widget", $context)) {
            // line 660
            echo "    ";
            if (($context["required"] ?? null)) {
                // line 661
                echo "      ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 661)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 661), "")) : ("")) . " required"))]);
                // line 662
                echo "    ";
            }
            // line 663
            echo "    ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 664
                echo "      ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 664)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 664), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))]);
                // line 665
                echo "    ";
            }
            // line 666
            echo "    ";
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 667
                echo "      ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                // line 668
                echo "    ";
            }
            // line 669
            echo "
    ";
            // line 670
            if ((0 === twig_compare((($__internal_compile_9 = ($context["block_prefixes"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[2] ?? null) : null), "radio"))) {
                // line 671
                echo "      <label class=\"form-check-label\"";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">";
                // line 672
                echo ($context["widget"] ?? null);
                // line 674
                echo "<i class=\"form-check-round\"></i>";
                // line 676
                echo (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 677
                echo "</label>
    ";
            } else {
                // line 679
                echo "      <div class=\"md-checkbox md-checkbox-inline\">
        <label";
                // line 680
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">";
                // line 681
                echo ($context["widget"] ?? null);
                // line 682
                echo "<i class=\"md-checkbox-control\"></i>";
                // line 683
                echo (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 684
                echo "</label>
      </div>
    ";
            }
            // line 687
            echo "  ";
        }
    }

    // line 690
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 691
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 691)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 691), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 691)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 691), "")) : (""))));
        // line 692
        if (twig_in_filter("radio-custom", ($context["parent_label_class"] ?? null))) {
            // line 693
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 693)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 693), "")) : ("")) . " custom-control-input"))]);
            // line 694
            echo "<div class=\"custom-control custom-radio";
            echo ((twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) ? (" custom-control-inline") : (""));
            echo "\">";
            // line 695
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" =>             $this->renderBlock("base_radio_widget", $context, $blocks)]);
            // line 696
            echo "</div>";
        } else {
            // line 698
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 698)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 698), "")) : ("")) . " form-check-input"))]);
            // line 699
            echo "<div class=\"form-check form-check-radio form-radio";
            echo ((twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) ? (" form-check-inline") : (""));
            echo "\">";
            // line 700
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" =>             $this->renderBlock("base_radio_widget", $context, $blocks)]);
            // line 701
            echo "</div>";
        }
    }

    // line 705
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 706
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 706)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 706), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 706)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 706), "")) : (""))));
        // line 707
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 707)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 707), "")) : ("")) . " form-check-input"))]);
        // line 708
        echo "<div class=\"form-check form-check-radio form-checkbox";
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "container_class", [], "any", true, true, false, 708)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "container_class", [], "any", false, false, false, 708), "html", null, true);
        }
        echo "\">";
        // line 709
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" =>         $this->renderBlock("base_checkbox_widget", $context, $blocks)]);
        // line 710
        echo "</div>";
    }

    // line 715
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 716
        if ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "fieldError", [], "array", true, true, false, 716) && (0 === twig_compare((($__internal_compile_10 = ($context["attr"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["fieldError"] ?? null) : null), true)))) {
            // line 717
            echo "    ";
            $this->displayBlock("form_errors_field", $context, $blocks);
            echo "
  ";
        } else {
            // line 719
            echo "    ";
            $this->displayBlock("form_errors_other", $context, $blocks);
            echo "
  ";
        }
    }

    // line 723
    public function block_form_errors_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 724
        echo "  ";
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["errors"] ?? null)), 0))) {
            // line 726
            if ((1 === twig_compare(twig_length_filter($this->env, ($context["errors"] ?? null)), 1))) {
                // line 728
                $context["popoverContainer"] = ("popover-error-container-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 728), "id", [], "any", false, false, false, 728));
                // line 729
                echo "      <div class=\"";
                echo twig_escape_filter($this->env, ($context["popoverContainer"] ?? null), "html", null, true);
                echo "\"></div>

      ";
                // line 731
                ob_start(function () { return ''; });
                // line 732
                echo "        <div class=\"popover-error-list\">
          <ul>";
                // line 734
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 735
                    echo "<li class=\"text-danger\"> ";
                    echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source,                     // line 736
$context["error"], "messagePluralization", [], "any", false, false, false, 736))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,                     // line 737
$context["error"], "messageTemplate", [], "any", false, false, false, 737), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 737), "form_error")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice(twig_get_attribute($this->env, $this->source,                     // line 738
$context["error"], "messageTemplate", [], "any", false, false, false, 738), twig_get_attribute($this->env, $this->source, $context["error"], "messagePluralization", [], "any", false, false, false, 738), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 738), "form_error"))), "html", null, true);
                    // line 739
                    echo "
              </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 742
                echo "          </ul>
        </div>
      ";
                $context["popoverErrorContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 745
                echo "
      <template class=\"js-popover-error-content\" data-id=\"";
                // line 746
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 746), "id", [], "any", false, false, false, 746), "html", null, true);
                echo "\">
        ";
                // line 747
                echo twig_escape_filter($this->env, ($context["popoverErrorContent"] ?? null), "html", null, true);
                echo "
      </template>

      ";
                // line 750
                ob_start(function () { return ''; });
                // line 751
                echo "        <span
          data-toggle=\"form-popover-error\"
          data-id=\"";
                // line 753
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 753), "id", [], "any", false, false, false, 753), "html", null, true);
                echo "\"
          data-placement=\"bottom\"
          data-template='<div class=\"popover form-popover-error\" role=\"tooltip\"><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>'
          data-trigger=\"hover\"
          data-container=\".";
                // line 757
                echo twig_escape_filter($this->env, ($context["popoverContainer"] ?? null), "html", null, true);
                echo "\"
        >
          <i class=\"material-icons form-error-icon\">error_outline</i> <u> ";
                // line 759
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice("%count% errors", twig_length_filter($this->env, ($context["errors"] ?? null)), [], "Admin.Global"), "html", null, true);
                echo "</u>
        </span>
      ";
                $context["errorPopover"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 762
                echo "
      <div class=\"invalid-feedback-container\">
        <div class=\"text-danger\">
          ";
                // line 765
                echo twig_escape_filter($this->env, ($context["errorPopover"] ?? null), "html", null, true);
                echo "
        </div>
      </div>

      ";
            } else {
                // line 771
                echo "<div class=\"d-inline-block text-danger align-top\">
        <i class=\"material-icons form-error-icon\">error_outline</i>
      </div>
      <div class=\"d-inline-block\">
        ";
                // line 775
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 776
                    echo "          <div class=\"text-danger\">
            <p> ";
                    // line 777
                    echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source,                     // line 778
$context["error"], "messagePluralization", [], "any", false, false, false, 778))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,                     // line 779
$context["error"], "messageTemplate", [], "any", false, false, false, 779), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 779), "form_error")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice(twig_get_attribute($this->env, $this->source,                     // line 780
$context["error"], "messageTemplate", [], "any", false, false, false, 780), twig_get_attribute($this->env, $this->source, $context["error"], "messagePluralization", [], "any", false, false, false, 780), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 780), "form_error"))), "html", null, true);
                    // line 781
                    echo "
            </p>
          </div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 785
                echo "</div>";
            }
        }
    }

    // line 790
    public function block_form_errors_other($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 791
        echo "  ";
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["errors"] ?? null)), 0))) {
            // line 792
            echo "<div class=\"alert alert-danger d-print-none\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      <div class=\"alert-text\">
        ";
            // line 797
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 798
                echo "            <p> ";
                echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source,                 // line 799
$context["error"], "messagePluralization", [], "any", false, false, false, 799))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,                 // line 800
$context["error"], "messageTemplate", [], "any", false, false, false, 800), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 800), "form_error")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice(twig_get_attribute($this->env, $this->source,                 // line 801
$context["error"], "messageTemplate", [], "any", false, false, false, 801), twig_get_attribute($this->env, $this->source, $context["error"], "messagePluralization", [], "any", false, false, false, 801), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 801), "form_error"))), "html", null, true);
                // line 802
                echo "
            </p>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 805
            echo "</div>
    </div>
  ";
        }
    }

    // line 812
    public function block_material_choice_table_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 813
        echo "  ";
        ob_start(function () { return ''; });
        // line 814
        echo "    <div class=\"choice-table\">
      <table class=\"table table-bordered mb-0\">
        <thead>
        <tr>
          <th class=\"checkbox\">
            <div class=\"md-checkbox\">
              <label>
                <input
                  type=\"checkbox\"
                  class=\"js-choice-table-select-all\"
                  ";
        // line 824
        if (($context["isCheckSelectAll"] ?? null)) {
            // line 825
            echo "                    checked
                  ";
        }
        // line 827
        echo "                >
                <i class=\"md-checkbox-control\"></i>
                ";
        // line 829
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select all", [], "Admin.Actions"), "html", null, true);
        echo "
              </label>
            </div>
          </th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 836
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 837
            echo "          <tr>
            <td>
              ";
            // line 839
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["material_design" => true]);
            echo "
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 843
        echo "        </tbody>
      </table>
    </div>
  ";
        $___internal_parse_5_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 813
        echo twig_spaceless($___internal_parse_5_);
    }

    // line 849
    public function block_material_multiple_choice_table_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 850
        echo "  ";
        ob_start(function () { return ''; });
        // line 851
        echo "    <div class=\"choice-table";
        if (($context["headers_fixed"] ?? null)) {
            echo "-headers-fixed";
        }
        echo " table-responsive\">
      <table class=\"table\">
        <thead>
        <tr>
          <th>";
        // line 855
        echo twig_escape_filter($this->env, ($context["table_label"] ?? null), "html", null, true);
        echo "</th>
          ";
        // line 856
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child_choice"]) {
            // line 857
            echo "            <th class=\"text-center\">
              ";
            // line 858
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 858), "multiple", [], "any", false, false, false, 858) && !twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 858), "name", [], "any", false, false, false, 858), ($context["headers_to_disable"] ?? null)))) {
                // line 859
                echo "                <a href=\"#\"
                   class=\"js-multiple-choice-table-select-column\"
                   data-column-num=\"";
                // line 861
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 861) + 1), "html", null, true);
                echo "\"
                   data-column-checked=\"false\"
                >
                  ";
                // line 864
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 864), "label", [], "any", false, false, false, 864), "html", null, true);
                echo "
                </a>
              ";
            } else {
                // line 867
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 867), "label", [], "any", false, false, false, 867), "html", null, true);
                echo "
              ";
            }
            // line 869
            echo "            </th>
          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 871
        echo "        </tr>
        </thead>
        <tbody>
        ";
        // line 874
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
        foreach ($context['_seq'] as $context["choice_name"] => $context["choice_value"]) {
            // line 875
            echo "          <tr>
            <td>
              ";
            // line 877
            echo twig_escape_filter($this->env, $context["choice_name"], "html", null, true);
            echo "
            </td>
            ";
            // line 879
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["child_choice_name"] => $context["child_choice"]) {
                // line 880
                echo "              <td class=\"text-center\">
                ";
                // line 881
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], [], "array", false, true, false, 881), $context["child_choice_name"], [], "array", true, true, false, 881)) {
                    // line 882
                    echo "                  ";
                    $context["entry_index"] = (($__internal_compile_11 = (($__internal_compile_12 = ($context["child_choice_entry_index_mapping"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[$context["choice_value"]] ?? null) : null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[$context["child_choice_name"]] ?? null) : null);
                    // line 883
                    echo "
                  ";
                    // line 884
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 884), "multiple", [], "any", false, false, false, 884)) {
                        // line 885
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_13 = $context["child_choice"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[($context["entry_index"] ?? null)] ?? null) : null), 'widget', ["material_design" => true]);
                        echo "
                  ";
                    } else {
                        // line 887
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_14 = $context["child_choice"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[($context["entry_index"] ?? null)] ?? null) : null), 'widget');
                        echo "
                  ";
                    }
                    // line 889
                    echo "                ";
                } else {
                    // line 890
                    echo "                  --
                ";
                }
                // line 892
                echo "              </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['child_choice_name'], $context['child_choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 894
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['choice_name'], $context['choice_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 896
        echo "        </tbody>
      </table>
    </div>
  ";
        $___internal_parse_6_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 850
        echo twig_spaceless($___internal_parse_6_);
    }

    // line 903
    public function block_translatable_fields_with_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 904
        echo "  <div class=\"translations tabbable\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 904), "id", [], "any", false, false, false, 904), "html", null, true);
        echo "\" tabindex=\"1\">
    ";
        // line 905
        if (((0 === twig_compare(($context["hide_locales"] ?? null), false)) && (1 === twig_compare(twig_length_filter($this->env, ($context["form"] ?? null)), 1)))) {
            // line 906
            echo "      <ul class=\"translationsLocales nav nav-pills\">
        ";
            // line 907
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 908
                echo "          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"";
                // line 909
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 909), "label", [], "any", false, false, false, 909), "html", null, true);
                echo "\" class=\"";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 909), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 909), "name", [], "any", false, false, false, 909)))) {
                    echo "active";
                }
                echo " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 909), "id", [], "any", false, false, false, 909), "html", null, true);
                echo "\">
              ";
                // line 910
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 910), "label", [], "any", false, false, false, 910)), "html", null, true);
                echo "
            </a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 914
            echo "      </ul>
    ";
        }
        // line 916
        echo "
    <div class=\"translationsFields tab-content\">
      ";
        // line 918
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 919
            echo "        <div data-locale=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 919), "label", [], "any", false, false, false, 919), "html", null, true);
            echo "\" class=\"translationsFields-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 919), "id", [], "any", false, false, false, 919), "html", null, true);
            echo " tab-pane translation-field ";
            if (((0 === twig_compare(($context["hide_locales"] ?? null), false)) && (1 === twig_compare(twig_length_filter($this->env, ($context["form"] ?? null)), 1)))) {
                echo "panel panel-default";
            }
            echo " ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 919), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 919), "name", [], "any", false, false, false, 919)))) {
                echo "show active";
            }
            echo " ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 919), "valid", [], "any", false, false, false, 919)) {
                echo "field-error";
            }
            echo " translation-label-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 919), "label", [], "any", false, false, false, 919), "html", null, true);
            echo "\">
          ";
            // line 920
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 923
        echo "    </div>
  </div>
";
    }

    // line 927
    public function block_translatable_fields_with_dropdown($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 928
        $context["formClass"] = twig_trim_filter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 928), "attr", [], "any", false, true, false, 928), "class", [], "any", true, true, false, 928)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 928), "attr", [], "any", false, true, false, 928), "class", [], "any", false, false, false, 928), "")) : ("")) . " input-group locale-input-group js-locale-input-group d-flex"));
        // line 929
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["formClass"] ?? null), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 929), "id", [], "any", false, false, false, 929), "html", null, true);
        echo "\" tabindex=\"1\">
      ";
        // line 930
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 931
            echo "        ";
            $context["classes"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 931), "attr", [], "any", false, true, false, 931), "class", [], "any", true, true, false, 931)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 931), "attr", [], "any", false, true, false, 931), "class", [], "any", false, false, false, 931), "")) : ("")) . " js-locale-input");
            // line 932
            echo "        ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 932), "label", [], "any", false, false, false, 932));
            // line 933
            echo "        ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 933), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 933), "name", [], "any", false, false, false, 933)))) {
                // line 934
                echo "          ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 935
                echo "        ";
            }
            // line 936
            echo "        <div data-lang-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 936), "name", [], "any", false, false, false, 936), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
            echo "\" style=\"flex-grow: 1;\">
          ";
            // line 937
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget');
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 940
        echo "      ";
        if ( !($context["hide_locales"] ?? null)) {
            // line 941
            echo "        <div class=\"dropdown\">
          <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                  type=\"button\"
                  data-toggle=\"dropdown\"
            ";
            // line 945
            if (array_key_exists("change_form_language_url", $context)) {
                // line 946
                echo "              data-change-language-url=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 946), "change_form_language_url", [], "any", false, false, false, 946), "html", null, true);
                echo "\"
            ";
            }
            // line 948
            echo "                  aria-haspopup=\"true\"
                  aria-expanded=\"false\"
                  id=\"";
            // line 950
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 950), "id", [], "any", false, false, false, 950), "html", null, true);
            echo "_dropdown\"
          >
            ";
            // line 952
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 952), "default_locale", [], "any", false, false, false, 952), "iso_code", [], "any", false, false, false, 952), "html", null, true);
            echo "
          </button>
          <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 954
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 954), "id", [], "any", false, false, false, 954), "html", null, true);
            echo "_dropdown\">
            ";
            // line 955
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 956
                echo "              <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 956), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 956), "html", null, true);
                echo "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 958
            echo "          </div>
        </div>
      ";
        }
        // line 961
        echo "    </div>";
    }

    // line 964
    public function block_translatable_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 965
        if (($context["use_tabs"] ?? null)) {
            // line 966
            echo "    ";
            $this->displayBlock("translatable_fields_with_tabs", $context, $blocks);
            echo "
  ";
        } else {
            // line 968
            echo "    ";
            $this->displayBlock("translatable_fields_with_dropdown", $context, $blocks);
            echo "
  ";
        }
        // line 970
        echo "  ";
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 973
    public function block_birthday_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 974
        echo "  ";
        if ((0 === twig_compare(($context["widget"] ?? null), "single_text"))) {
            // line 975
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 977
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 977)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 977), "")) : ("")) . " form-inline"))]);
            // line 978
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 979
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 981
            echo "
    ";
            // line 982
            $context["yearWidget"] = (("<div class=\"col pl-0 birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 982), 'widget')) . "</div>");
            // line 983
            echo "    ";
            $context["monthWidget"] = (("<div class=\"col birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 983), 'widget')) . "</div>");
            // line 984
            echo "    ";
            $context["dayWidget"] = (("<div class=\"col pr-0 birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 984), 'widget')) . "</div>");
            // line 986
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 987
($context["yearWidget"] ?? null), "{{ month }}" =>             // line 988
($context["monthWidget"] ?? null), "{{ day }}" =>             // line 989
($context["dayWidget"] ?? null)]);
            // line 992
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 993
                echo "</div>";
            }
        }
    }

    // line 998
    public function block_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 999
        echo "  <style>
    .custom-file-label:after {
      content: \"";
        // line 1001
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Browse", [], "Admin.Actions"), "html", null, true);
        echo "\";
    }
  </style>
  <div class=\"custom-file\">
    ";
        // line 1005
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source,         // line 1006
($context["attr"] ?? null), "class", [], "any", true, true, false, 1006)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1006), "")) : ("")) . " custom-file-input")), "data-multiple-files-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count% file(s)", [], "Admin.Global"), "data-locale" => $this->extensions['PrestaShopBundle\Twig\ContextIsoCodeProviderExtension']->getIsoCode()]);
        // line 1011
        if ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", true, true, false, 1011) && twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", false, false, false, 1011))) {
            // line 1012
            echo "      ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => (twig_get_attribute($this->env, $this->source,             // line 1013
($context["attr"] ?? null), "class", [], "any", false, false, false, 1013) . " disabled")]);
            // line 1015
            echo "    ";
        }
        // line 1016
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1018
        echo "<label class=\"custom-file-label\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1018), "id", [], "any", false, false, false, 1018), "html", null, true);
        echo "\">
      ";
        // line 1019
        $context["attributes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1019), "attr", [], "any", false, false, false, 1019);
        // line 1020
        echo "      ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "placeholder", [], "any", true, true, false, 1020)) ? (twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "placeholder", [], "any", false, false, false, 1020)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose file(s)", [], "Admin.Actions"))), "html", null, true);
        echo "
    </label>
  </div>";
        // line 1023
        $this->displayBlock("form_help", $context, $blocks);
        // line 1024
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1024), "download_url", [], "any", false, false, false, 1024)) {
            // line 1025
            echo "    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1025), "download_url", [], "any", false, false, false, 1025), "html", null, true);
            echo "\">
      ";
            // line 1026
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download file", [], "Admin.Actions"), "html", null, true);
            echo "
    </a>
  ";
        }
    }

    // line 1031
    public function block_shop_restriction_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1032
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1032), "attr", [], "any", false, false, false, 1032), "is_allowed_to_display", [], "any", false, false, false, 1032)) {
            // line 1033
            echo "    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        ";
            // line 1035
            $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "checkbox")) : ("checkbox"));
            // line 1036
            echo "        <input
          class=\"js-multi-store-restriction-checkbox\"
          type=\"";
            // line 1038
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\"
          ";
            // line 1039
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo "
          value=\"";
            // line 1040
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"
        >
        <i class=\"md-checkbox-control\"></i>
      </label>
    </div>
  ";
        }
    }

    // line 1048
    public function block_generatable_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1049
        echo "  <div class=\"input-group\">
    ";
        // line 1050
        if (($context["compound"] ?? null)) {
            // line 1051
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 1053
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        // line 1055
        echo "    <span class=\"input-group-btn ml-1\">
      <button class=\"btn btn-outline-secondary js-generator-btn\"
              type=\"button\"
              data-target-input-id=\"";
        // line 1058
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"
              data-generated-value-length=\"";
        // line 1059
        echo twig_escape_filter($this->env, ($context["generated_value_length"] ?? null), "html", null, true);
        echo "\"
      >
        ";
        // line 1061
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
   </span>
  </div>
  ";
        // line 1065
        $this->displayBlock("form_help", $context, $blocks);
        echo "
";
    }

    // line 1068
    public function block_text_with_recommended_length_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1069
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-recommended-length-counter" => (("#" .         // line 1070
($context["id"] ?? null)) . "_recommended_length_counter"), "class" => "js-recommended-length-input"]);
        // line 1074
        if ((0 === twig_compare(($context["input_type"] ?? null), "textarea"))) {
            // line 1075
            $this->displayBlock("textarea_widget", $context, $blocks);
        } else {
            // line 1077
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        // line 1079
        echo "
  <small class=\"form-text text-muted text-right\"
         id=\"";
        // line 1081
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_recommended_length_counter\"
  >
    <em>
      ";
        // line 1084
        echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1][/1] of [2][/2] characters used (recommended)", [], "Admin.Catalog.Feature"), ["[1]" => ("<span class=\"js-current-length\">" . twig_length_filter($this->env,         // line 1085
($context["value"] ?? null))), "[/1]" => "</span>", "[2]" => ("<span>" .         // line 1087
($context["recommended_length"] ?? null)), "[/2]" => "</span>"]);
        // line 1089
        echo "
    </em>
  </small>
";
    }

    // line 1094
    public function block_text_with_length_counter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1095
        echo "  <div class=\"input-group js-text-with-length-counter\">
    ";
        // line 1096
        $context["current_length"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1096), "max_length", [], "any", false, false, false, 1096) - twig_length_filter($this->env, ($context["value"] ?? null)));
        // line 1097
        echo "
    ";
        // line 1098
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1098), "position", [], "any", false, false, false, 1098), "before"))) {
            // line 1099
            echo "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text js-countable-text\">";
            // line 1100
            echo twig_escape_filter($this->env, ($context["current_length"] ?? null), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 1103
        echo "
    ";
        // line 1104
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-max-length" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1104), "max_length", [], "any", false, false, false, 1104), "maxlength" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1104), "max_length", [], "any", false, false, false, 1104), "class" => "js-countable-input"]);
        // line 1105
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ($context["input_attr"] ?? null));
        // line 1107
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1107), "input", [], "any", false, false, false, 1107), "input"))) {
            // line 1108
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1109
($context["form"] ?? null), "vars", [], "any", false, false, false, 1109), "input", [], "any", false, false, false, 1109), "textarea"))) {
            // line 1110
            $this->displayBlock("textarea_widget", $context, $blocks);
        } else {
            // line 1112
            $this->displayBlock("form_widget", $context, $blocks);
        }
        // line 1114
        echo "
    ";
        // line 1115
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1115), "position", [], "any", false, false, false, 1115), "after"))) {
            // line 1116
            echo "      <div class=\"input-group-append\">
        <span class=\"input-group-text js-countable-text\">";
            // line 1117
            echo twig_escape_filter($this->env, ($context["current_length"] ?? null), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 1120
        echo "  </div>
";
    }

    // line 1123
    public function block_integer_min_max_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1124
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_15 = ($context["form"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["min_field"] ?? null) : null), 'widget', ["attr" => ["class" => "min-field"]]);
        echo "
  ";
        // line 1125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_16 = ($context["form"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["max_field"] ?? null) : null), 'widget', ["attr" => ["class" => "max-field"]]);
        echo "
";
    }

    // line 1128
    public function block_number_min_max_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1129
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_17 = ($context["form"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["min_field"] ?? null) : null), 'widget', ["attr" => ["class" => "min-field"]]);
        echo "
  ";
        // line 1130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_18 = ($context["form"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["max_field"] ?? null) : null), 'widget', ["attr" => ["class" => "max-field"]]);
        echo "
";
    }

    // line 1133
    public function block_number_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1134
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 1135
        echo "<div class=\"input-group\">";
        // line 1136
        $this->displayBlock("form_unit_prepend", $context, $blocks);
        // line 1137
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1138
        $this->displayBlock("form_unit", $context, $blocks);
        // line 1139
        echo "</div>
  ";
        // line 1140
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 1143
    public function block_integer_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1144
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "number")) : ("number"));
        // line 1145
        echo "<div class=\"input-group\">";
        // line 1146
        $this->displayBlock("form_unit_prepend", $context, $blocks);
        // line 1147
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1148
        $this->displayBlock("form_unit", $context, $blocks);
        // line 1149
        echo "</div>
  ";
        // line 1150
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 1153
    public function block_form_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1154
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1154), "unit", [], "any", true, true, false, 1154) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1154), "prepend_unit", [], "any", false, false, false, 1154))) {
            // line 1155
            echo "    <div class=\"input-group-append\">
      <span class=\"input-group-text\">";
            // line 1156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1156), "unit", [], "any", false, false, false, 1156), "html", null, true);
            echo "</span>
    </div>
  ";
        }
    }

    // line 1161
    public function block_form_unit_prepend($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1162
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1162), "unit", [], "any", true, true, false, 1162) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1162), "prepend_unit", [], "any", false, false, false, 1162))) {
            // line 1163
            echo "    <div class=\"input-group-prepend\">
      <span class=\"input-group-text\">";
            // line 1164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1164), "unit", [], "any", false, false, false, 1164), "html", null, true);
            echo "</span>
    </div>
  ";
        }
    }

    // line 1169
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1170
        echo "  ";
        if ( !(null === ($context["help"] ?? null))) {
            // line 1171
            $context["help_attr"] = twig_array_merge(($context["help_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 1171)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 1171), "")) : ("")) . " form-text"))]);
            // line 1172
            echo "<small id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "_help\"";
            $__internal_compile_19 = $context;
            $__internal_compile_20 = ["attr" => ($context["help_attr"] ?? null)];
            if (!twig_test_iterable($__internal_compile_20)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 1172, $this->getSourceContext());
            }
            $__internal_compile_20 = twig_to_array($__internal_compile_20);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_20));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $__internal_compile_19;
            echo ">";
            echo ($context["help"] ?? null);
            echo "</small>
  ";
        }
        // line 1174
        echo "  ";
        if (array_key_exists("warning", $context)) {
            // line 1175
            echo "    ";
            echo twig_escape_filter($this->env, ($context["warning"] ?? null), "html", null, true);
            echo "
  ";
        }
    }

    // line 1179
    public function block_form_prepend_external_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1180
        echo "  ";
        if ((array_key_exists("external_link", $context) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "position", [], "any", false, false, false, 1180), "prepend")))) {
            // line 1181
            $this->displayBlock("form_external_link", $context, $blocks);
        }
    }

    // line 1185
    public function block_form_append_external_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1186
        echo "  ";
        if ((array_key_exists("external_link", $context) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "position", [], "any", false, false, false, 1186), "append")))) {
            // line 1187
            $this->displayBlock("form_external_link", $context, $blocks);
        }
    }

    // line 1191
    public function block_form_external_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1192
        echo "  ";
        if (array_key_exists("external_link", $context)) {
            // line 1193
            ob_start(function () { return ''; });
            // line 1194
            echo "<a ";
            $this->displayBlock("form_external_link_attributes", $context, $blocks);
            echo ">
        <i class=\"material-icons\">open_in_new</i>";
            $context["openingTag"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1198
            echo "<div class=\"small font-secondary";
            if ((twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "align", [], "any", false, false, false, 1198) === "right")) {
                echo " text-right";
            }
            echo "\">
      ";
            // line 1199
            echo twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "text", [], "any", false, false, false, 1199), ["[1]" => ($context["openingTag"] ?? null), "[/1]" => "</a>"]);
            echo "
    </div>
  ";
        }
    }

    // line 1204
    public function block_form_external_link_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1205
        $context["external_link_attr"] = twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "attr", [], "any", false, false, false, 1205), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "attr", [], "any", false, true, false, 1205), "class", [], "any", true, true, false, 1205)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "attr", [], "any", false, true, false, 1205), "class", [], "any", false, false, false, 1205), "")) : ("")) . " btn btn-link px-0 align-right"))]);
        // line 1206
        echo "
  ";
        // line 1207
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["external_link_attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 1208
            echo "    ";
            if (!twig_in_filter($context["attrname"], [0 => "href", 1 => "class"])) {
                // line 1209
                echo "      ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"
    ";
            }
            // line 1211
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1212
        echo "
  target=\"_blank\"
  href=\"";
        // line 1214
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "href", [], "any", false, false, false, 1214), "html", null, true);
        echo "\"
  class=\"";
        // line 1215
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["external_link_attr"] ?? null), "class", [], "any", false, false, false, 1215), "html", null, true);
        echo "\"";
    }

    // line 1218
    public function block_custom_content_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1219
        echo "  ";
        $this->loadTemplate(($context["template"] ?? null), "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 1219)->display(twig_array_merge($context, ($context["data"] ?? null)));
    }

    // line 1222
    public function block_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1223
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["aria-label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1223), "id", [], "any", false, false, false, 1223)], "Admin.Global")]);
        // line 1224
        if ( !(null === ($context["data_list"] ?? null))) {
            // line 1225
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["list" => (($context["id"] ?? null) . "_datalist")]);
        }
        // line 1227
        echo "
  ";
        // line 1228
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ($context["attr"] ?? null)]);
        echo "

  ";
        // line 1230
        if ( !(null === ($context["data_list"] ?? null))) {
            // line 1231
            echo "    <datalist id=\"";
            echo twig_escape_filter($this->env, (($context["id"] ?? null) . "_datalist"), "html", null, true);
            echo "\">
      ";
            // line 1232
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 1233
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "\"></option>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1235
            echo "    </datalist>
  ";
        }
    }

    // line 1239
    public function block_form_prepend_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1240
        if ((array_key_exists("alert_position", $context) && (0 === twig_compare(($context["alert_position"] ?? null), "prepend")))) {
            // line 1241
            $this->displayBlock("form_alert", $context, $blocks);
        }
    }

    // line 1245
    public function block_form_append_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1246
        if ((array_key_exists("alert_position", $context) && (0 === twig_compare(($context["alert_position"] ?? null), "append")))) {
            // line 1247
            $this->displayBlock("form_alert", $context, $blocks);
        }
    }

    // line 1251
    public function block_form_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1252
        if (array_key_exists("alert_message", $context)) {
            // line 1253
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, ($context["alert_type"] ?? null), "html", null, true);
            if (array_key_exists("alert_title", $context)) {
                echo " expandable-alert";
            }
            echo "\" role=\"alert\">
    ";
            // line 1254
            if (array_key_exists("alert_title", $context)) {
                // line 1255
                echo "      <p class=\"alert-text\">
        ";
                // line 1256
                echo ($context["alert_title"] ?? null);
                echo "
      </p>
    ";
            } else {
                // line 1259
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["alert_message"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 1260
                    echo "        <p class=\"alert-text\">
          ";
                    // line 1261
                    echo $context["message"];
                    echo "
        </p>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1264
                echo "    ";
            }
            // line 1265
            echo "
    ";
            // line 1266
            if (array_key_exists("alert_title", $context)) {
                // line 1267
                echo "      <div class=\"alert-more collapse\" id=\"expandable_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1267), "id", [], "any", false, false, false, 1267), "html", null, true);
                echo "\" style=\"\">
        ";
                // line 1268
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["alert_message"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 1269
                    echo "          <p>
            ";
                    // line 1270
                    echo $context["message"];
                    echo "
          </p>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1273
                echo "      </div>
      <div class=\"read-more-container\">
         <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#expandable_";
                // line 1275
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1275), "id", [], "any", false, false, false, 1275), "html", null, true);
                echo "\" aria-expanded=\"true\" aria-controls=\"collapseDanger\">
            ";
                // line 1276
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Read more", [], "Admin.Actions"), "html", null, true);
                echo "
          </button>
       </div>
    ";
            }
            // line 1280
            echo "  </div>
  ";
        }
    }

    // line 1284
    public function block_unavailable_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1285
        echo "  <div class=\"alert alert-unavailable\" role=\"alert\">
    <p class=\"alert-text\">
      ";
        // line 1287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not available yet.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
    </p>
  </div>
";
    }

    // line 1292
    public function block_text_preview_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1293
        echo "  ";
        // line 1294
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1295
        echo "<span class=\"label text-preview ";
        echo twig_escape_filter($this->env, ($context["preview_class"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 1297
        echo "    ";
        if (array_key_exists("prefix", $context)) {
            // line 1298
            echo "    <span class=\"text-preview-prefix\">
      ";
            // line 1299
            echo ($context["prefix"] ?? null);
            echo "
    </span>
    ";
        }
        // line 1302
        echo "
    <span class=\"text-preview-value\">
      ";
        // line 1304
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1304), "allow_html", [], "any", false, false, false, 1304)) {
            // line 1305
            echo "        ";
            // line 1306
            echo "        ";
            echo ($context["value"] ?? null);
            echo "
      ";
        } else {
            // line 1308
            echo "        ";
            // line 1309
            echo "        ";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html");
            echo "
      ";
        }
        // line 1311
        echo "    </span>

    ";
        // line 1314
        echo "    ";
        if (array_key_exists("suffix", $context)) {
            // line 1315
            echo "    <span class=\"text-preview-suffix\">
      ";
            // line 1316
            echo ($context["suffix"] ?? null);
            echo "
    </span>
    ";
        }
        // line 1319
        echo "  </span>
";
    }

    // line 1322
    public function block_link_preview_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1323
        echo "  ";
        // line 1324
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1325
        echo "<a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1325), "value", [], "any", false, false, false, 1325), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1325)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1325), "")) : ("")), "html", null, true);
        echo "\">
    ";
        // line 1326
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1326), "button_label", [], "any", false, false, false, 1326), "html", null, true);
        echo "
  </a>
";
    }

    // line 1330
    public function block_image_preview_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1331
        echo "  ";
        // line 1332
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1333
        echo "<img src=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_trim_filter(("Image preview for " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1333), "name", [], "any", false, false, false, 1333))), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1333), "image_class", [], "any", false, false, false, 1333), "html", null, true);
        echo "\" />
";
    }

    // line 1336
    public function block_delta_quantity_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1337
        echo "  ";
        $context["quantity"] = ((twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "quantity", [], "any", true, true, false, 1337)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "quantity", [], "any", false, false, false, 1337), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 1337), "vars", [], "any", false, false, false, 1337), "value", [], "any", false, false, false, 1337))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 1337), "vars", [], "any", false, false, false, 1337), "value", [], "any", false, false, false, 1337)));
        // line 1338
        echo "  ";
        // line 1339
        echo "  ";
        if ((null === ($context["initialQuantity"] ?? null))) {
            // line 1340
            echo "    ";
            $context["initialQuantity"] = ($context["quantity"] ?? null);
            // line 1341
            echo "  ";
        }
        // line 1342
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1342)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1342), "")) : ("")) . " delta-quantity")), "data-initial-quantity" => ($context["initialQuantity"] ?? null)]);
        // line 1343
        echo "  <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 1344
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "initial_quantity", [], "any", false, false, false, 1344), 'widget', ["value" => ($context["initialQuantity"] ?? null)]);
        echo "
    ";
        // line 1345
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 1345), 'widget', ["initialQuantity" => ($context["initialQuantity"] ?? null), "deltaQuantity" => ($context["deltaQuantity"] ?? null), "value" => ($context["quantity"] ?? null)]);
        echo "
    ";
        // line 1346
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delta", [], "any", false, false, false, 1346), 'row');
        echo "
  </div>
";
    }

    // line 1350
    public function block_delta_quantity_quantity_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1351
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1351)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1351), "")) : ("")) . " delta-quantity-quantity"))]);
        // line 1352
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 1353
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1354
        echo "<span class=\"initial-quantity\">";
        echo twig_escape_filter($this->env, ($context["initialQuantity"] ?? null), "html", null, true);
        echo "</span>
    <span class=\"quantity-update";
        // line 1355
        if ((0 !== twig_compare(($context["deltaQuantity"] ?? null), 0))) {
            echo " quantity-modified";
        }
        echo "\">
      <i class=\"material-icons\">trending_flat</i>
      <span class=\"new-quantity\">";
        // line 1357
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "</span>
    </span>
    ";
        // line 1359
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
  </div>
";
    }

    // line 1363
    public function block_delta_quantity_delta_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1364
        echo "  <div class=\"form-group";
        $this->displayBlock("widget_type_class", $context, $blocks);
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 1364)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 1364), "html", null, true);
        }
        echo "\">
    <div class=\"delta-quantity-delta-container\">";
        // line 1366
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 1367
        $this->displayBlock("form_prepend_alert", $context, $blocks);
        // line 1368
        $this->displayBlock("form_prepend_external_link", $context, $blocks);
        // line 1370
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 1372
        $this->displayBlock("form_append_alert", $context, $blocks);
        // line 1373
        $this->displayBlock("form_append_external_link", $context, $blocks);
        // line 1374
        echo "</div>";
        // line 1375
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 1376
        $this->displayBlock("form_modify_all_shops", $context, $blocks);
        // line 1377
        echo "</div>
";
    }

    // line 1380
    public function block_delta_quantity_delta_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1381
        $context["type"] = "number";
        // line 1382
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1382)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1382), "")) : ("")) . " delta-quantity-delta"))]);
        // line 1383
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 1386
    public function block_submittable_input_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1387
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1387)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1387), "")) : ("")) . " ps-submittable-input-wrapper"))]);
        // line 1388
        echo "<div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        // line 1389
        $context["typeAttr"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1389), "type_attr", [], "any", false, false, false, 1389), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1390
($context["form"] ?? null), "vars", [], "any", false, true, false, 1390), "type_attr", [], "any", false, true, false, 1390), "class", [], "any", true, true, false, 1390)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1390), "type_attr", [], "any", false, true, false, 1390), "class", [], "any", false, false, false, 1390), "")) : ("")) . " submittable-input")), "data-initial-value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1391
($context["form"] ?? null), "value", [], "any", false, false, false, 1391), "vars", [], "any", false, false, false, 1391), "value", [], "any", false, false, false, 1391), "value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1392
($context["form"] ?? null), "value", [], "any", false, false, false, 1392), "vars", [], "any", false, false, false, 1392), "value", [], "any", false, false, false, 1392)]);
        // line 1395
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 1395), 'widget', ["attr" => ($context["typeAttr"] ?? null)]);
        // line 1396
        $this->displayBlock("submittable_input_button_widget", $context, $blocks);
        // line 1397
        echo "</div>
";
    }

    // line 1400
    public function block_submittable_input_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1401
        echo "  <button type=\"button\" class=\"check-button d-none\">
    <i class=\"material-icons\">check</i>
  </button>
";
    }

    // line 1406
    public function block_submittable_delta_quantity_delta_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1407
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1407)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1407), "")) : ("")) . " delta-quantity-delta ps-submittable-input-wrapper"))]);
        // line 1408
        echo "<div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        // line 1409
        $context["attr"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1409), "attr", [], "any", false, false, false, 1409), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1410
($context["form"] ?? null), "vars", [], "any", false, true, false, 1410), "attr", [], "any", false, true, false, 1410), "class", [], "any", true, true, false, 1410)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1410), "attr", [], "any", false, true, false, 1410), "class", [], "any", false, false, false, 1410), "")) : ("")) . " submittable-input")), "data-initial-value" =>         // line 1411
($context["value"] ?? null), "value" =>         // line 1412
($context["value"] ?? null)]);
        // line 1415
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ($context["attr"] ?? null)]);
        // line 1416
        $this->displayBlock("submittable_input_button_widget", $context, $blocks);
        // line 1417
        echo "</div>
";
    }

    // line 1420
    public function block_navigation_tab_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1421
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1421)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1421), "")) : ("")) . " navigation-tab-widget"))]);
        // line 1422
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
  <div id=\"";
        // line 1423
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1423), "id", [], "any", false, false, false, 1423), "html", null, true);
        echo "-tabs\" class=\"tabs js-tabs\">
    <div class=\"arrow d-xl-none js-arrow left-arrow float-left\">
      <i class=\"material-icons rtl-flip hide\">chevron_left</i>
    </div>

    <ul class=\"nav nav-tabs js-nav-tabs\" id=\"form-nav\" role=\"tablist\">
    ";
        // line 1429
        $context["firstRenderedChild"] = true;
        // line 1430
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1430));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1431
            echo "      ";
            if ((( !twig_get_attribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 1431) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1431), "name", [], "any", false, false, false, 1431), "_toolbar_buttons"))) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1431), "name", [], "any", false, false, false, 1431), "_token")))) {
                // line 1432
                echo "      <li id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1432), "id", [], "any", false, false, false, 1432), "html", null, true);
                echo "-tab-nav\" class=\"nav-item";
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1432), "valid", [], "any", false, false, false, 1432)) {
                    echo " has-error";
                }
                echo "\">
        <a href=\"#";
                // line 1433
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1433), "id", [], "any", false, false, false, 1433), "html", null, true);
                echo "-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link";
                if (($context["firstRenderedChild"] ?? null)) {
                    echo " active";
                }
                echo "\">
          ";
                // line 1434
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1434), "label", [], "any", false, false, false, 1434), "html", null, true);
                echo "
        </a>
      </li>
      ";
                // line 1437
                $context["firstRenderedChild"] = false;
                // line 1438
                echo "      ";
            }
            // line 1439
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1440
        echo "    </ul>

    <div class=\"arrow d-xl-none js-arrow right-arrow visible float-right\">
      <i class=\"material-icons rtl-flip hide\">chevron_right</i>
    </div>

    ";
        // line 1446
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "offsetExists", [0 => "_toolbar_buttons"], "method", false, false, false, 1446)) {
            // line 1447
            echo "    <div class=\"navigation-tab-widget-toolbar toolbar text-md-right\">
      ";
            // line 1448
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_toolbar_buttons", [], "any", false, false, false, 1448), 'widget');
            echo "
    </div>
    ";
        }
        // line 1451
        echo "  </div>

  <div id=\"";
        // line 1453
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1453), "id", [], "any", false, false, false, 1453), "html", null, true);
        echo "-tabs-content\" class=\"tab-content\">
    ";
        // line 1454
        $context["firstRenderedChild"] = true;
        // line 1455
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1455));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1456
            echo "      ";
            if (( !twig_get_attribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 1456) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1456), "name", [], "any", false, false, false, 1456), "_token")))) {
                // line 1457
                echo "      <div role=\"tabpanel\" class=\"form-contenttab tab-pane container-fluid";
                if (($context["firstRenderedChild"] ?? null)) {
                    echo " active";
                }
                echo "\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1457), "id", [], "any", false, false, false, 1457), "html", null, true);
                echo "-tab\">
        ";
                // line 1458
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1458), "label_tab", [], "any", true, true, false, 1458)) {
                    // line 1459
                    echo "          ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', (twig_test_empty($_label_ = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1459), "label_tab", [], "any", false, false, false, 1459)) ? [] : ["label" => $_label_]));
                    echo "
        ";
                }
                // line 1461
                echo "        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                echo "
        ";
                // line 1462
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                echo "
      </div>
      ";
                // line 1464
                $context["firstRenderedChild"] = false;
                // line 1465
                echo "      ";
            }
            // line 1466
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1467
        echo "  </div>
</div>
";
    }

    // line 1471
    public function block_accordion_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1472
        echo "<div class=\"accordion accordion-form\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1472), "id", [], "any", false, false, false, 1472), "html", null, true);
        echo "\">
    ";
        // line 1473
        $context["firstChild"] = true;
        // line 1474
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1475
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1475), "compound", [], "any", false, false, false, 1475)) {
                // line 1476
                echo "      ";
                $context["hasError"] = (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1476), "valid", [], "any", false, false, false, 1476), true));
                // line 1477
                echo "      ";
                $context["isExpanded"] = ((($context["firstChild"] ?? null) && ($context["expand_first"] ?? null)) || (($context["hasError"] ?? null) && ($context["expand_on_error"] ?? null)));
                // line 1478
                echo "      <div class=\"card\">
        <div class=\"card-header\" id=\"";
                // line 1479
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1479), "id", [], "any", false, false, false, 1479), "html", null, true);
                echo "_accordion_header\">
          <h2 class=\"mb-0\">
            <button
              class=\"accordion-form-button ";
                // line 1482
                if (($context["hasError"] ?? null)) {
                    echo " has-error ";
                }
                echo " btn btn-block text-left";
                if ( !($context["isExpanded"] ?? null)) {
                    echo " collapsed";
                }
                echo "\"
              type=\"button\"
              data-toggle=\"collapse\"
              data-target=\"#";
                // line 1485
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1485), "id", [], "any", false, false, false, 1485), "html", null, true);
                echo "_accordion\"
              aria-expanded=\"";
                // line 1486
                if (($context["isExpanded"] ?? null)) {
                    echo "true";
                } else {
                    echo "false";
                }
                echo "\"
              aria-controls=\"";
                // line 1487
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1487), "id", [], "any", false, false, false, 1487), "html", null, true);
                echo "_accordion\">
              ";
                // line 1488
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1488), "label", [], "any", false, false, false, 1488), "html", null, true);
                echo "
              <i class=\"material-icons\"></i>
            </button>
          </h2>
        </div>

        <div id=\"";
                // line 1494
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1494), "id", [], "any", false, false, false, 1494), "html", null, true);
                echo "_accordion\" class=\"collapse";
                if (($context["isExpanded"] ?? null)) {
                    echo " show";
                }
                echo "\" aria-labelledby=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1494), "id", [], "any", false, false, false, 1494), "html", null, true);
                echo "_accordion_header\" ";
                if (($context["display_one"] ?? null)) {
                    echo "data-parent=\"#";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1494), "id", [], "any", false, false, false, 1494), "html", null, true);
                    echo "\"";
                }
                echo ">
          <div class=\"card-body\">
            ";
                // line 1496
                $context["childAttr"] = ["class" => "accordion-sub-form"];
                // line 1497
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ($context["childAttr"] ?? null)]);
                echo "
            ";
                // line 1498
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                echo "
          </div>
        </div>
      </div>
      ";
                // line 1502
                $context["firstChild"] = false;
                // line 1503
                echo "      ";
            }
            // line 1504
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1505
        echo "
    ";
        // line 1507
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
  </div>";
    }

    // line 1511
    public function block_button_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1512
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source,         // line 1513
($context["attr"] ?? null), "class", [], "any", true, true, false, 1513)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1513), "")) : ("")) . " form-group btn-collection btn-toolbar")), "role" => "group", "style" => ("justify-content: " .         // line 1515
($context["justify_content"] ?? null))]);
        // line 1517
        echo "<div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
    ";
        // line 1518
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["button_groups"] ?? null));
        foreach ($context['_seq'] as $context["group"] => $context["buttons"]) {
            // line 1519
            echo "      <div class=\"";
            if (($context["use_button_groups"] ?? null)) {
                echo "btn-group ";
            }
            echo "group-";
            echo twig_escape_filter($this->env, $context["group"], "html", null, true);
            echo "\">
        ";
            // line 1521
            echo "        ";
            $context["inlineButtonsLimit"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1521), "inline_buttons_limit", [], "any", false, false, false, 1521);
            // line 1522
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1522));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 1523
                echo "          ";
                if (((($context["inlineButtonsLimit"] ?? null) === null) || (0 >= twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 1523), ($context["inlineButtonsLimit"] ?? null))))) {
                    // line 1524
                    echo "            ";
                    // line 1525
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1525), "use_inline_labels", [], "any", false, false, false, 1525)) {
                        // line 1526
                        echo "              ";
                        $context["actionLabel"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["action"], "vars", [], "any", false, false, false, 1526), "label", [], "any", false, false, false, 1526);
                        // line 1527
                        echo "            ";
                    } else {
                        // line 1528
                        echo "              ";
                        $context["actionLabel"] = "";
                        // line 1529
                        echo "            ";
                    }
                    // line 1530
                    echo "            ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["action"], 'widget', ["label" => ($context["actionLabel"] ?? null)]);
                    echo "
          ";
                }
                // line 1532
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1533
            echo "
        ";
            // line 1535
            echo "        ";
            if (( !(($context["inlineButtonsLimit"] ?? null) === null) && (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1535)), ($context["inlineButtonsLimit"] ?? null))))) {
                // line 1536
                echo "          <a id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1536), "id", [], "any", false, false, false, 1536), "html", null, true);
                echo "_dropdown\" class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split no-rotate\"
             data-toggle=\"dropdown\"
             aria-haspopup=\"true\"
             aria-expanded=\"false\"
          >
          </a>
          <div class=\"dropdown-menu\">
            ";
                // line 1543
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1543), ($context["inlineButtonsLimit"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 1544
                    echo "              ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["action"], 'widget', ["attr" => ["class" => ("dropdown-item " . twig_trim_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 1545
$context["action"], "vars", [], "any", false, true, false, 1545), "attr", [], "any", false, true, false, 1545), "class", [], "any", true, true, false, 1545)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["action"], "vars", [], "any", false, true, false, 1545), "attr", [], "any", false, true, false, 1545), "class", [], "any", false, false, false, 1545), "")) : (""))))]]);
                    // line 1546
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1548
                echo "          </div>
        ";
            }
            // line 1550
            echo "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group'], $context['buttons'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1552
        echo "  </div>
";
    }

    // line 1555
    public function block_avatar_url_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1556
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'row', ["attr" => ($context["attr"] ?? null)]);
        echo "

  <div class=\"form-group row\">
    <label class=\"form-control-label\"></label>
    <div class=\"col-sm\">
      <img class=\"img-thumbnail clickable-avatar\" src=\"";
        // line 1561
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 1561), "vars", [], "any", false, false, false, 1561), "value", [], "any", false, false, false, 1561), "avatar_url", [], "any", false, false, false, 1561), "html", null, true);
        echo "\" alt=\"\">
    </div>
  </div>
";
    }

    // line 1566
    public function block_change_password_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1567
        echo "  <div class=\"form-group row\">
    <label class=\"form-control-label\">
      ";
        // line 1569
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password", [], "Admin.Global"), "html", null, true);
        echo "
    </label>
    <div class=\"col-sm\">
      ";
        // line 1573
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1573), "change_password_button", [], "any", false, false, false, 1573), 'row');
        echo "

      <div class=\"card card-body js-change-password-block d-none\">
        ";
        // line 1577
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1577), "old_password", [], "any", false, false, false, 1577), 'row');
        echo "

        ";
        // line 1580
        echo "        ";
        // line 1581
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1581), "new_password", [], "any", false, false, false, 1581), 'row');
        echo "

        <div class=\"form-group row\">
          <label class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            ";
        // line 1586
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1586), "generated_password", [], "any", false, false, false, 1586), 'widget');
        echo "
          </div>
          <div class=\"col-sm\">
            ";
        // line 1589
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1589), "generate_password_button", [], "any", false, false, false, 1589), 'widget');
        echo "
          </div>
        </div>
        ";
        // line 1592
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1592), "cancel_button", [], "any", false, false, false, 1592), 'row');
        echo "

        ";
        // line 1595
        echo "        <div class=\"js-password-strength-feedback d-none\">
          <span class=\"strength-low\">";
        // line 1596
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</span>
          <span class=\"strength-medium\">";
        // line 1597
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Okay", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</span>
          <span class=\"strength-high\">";
        // line 1598
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Good", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</span>
          <span class=\"strength-extreme\">";
        // line 1599
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fabulous", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</span>
        </div>
      </div>
    </div>
  </div>
";
    }

    // line 1606
    public function block_price_reduction_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1607
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1607)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1607), "")) : ("")) . " reduction-widget row"))]);
        // line 1608
        echo "  <div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
    ";
        // line 1609
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1609));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1610
            echo "      ";
            $__internal_compile_21 = $context;
            $__internal_compile_22 = ["row_attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1610), "row_attr", [], "any", false, false, false, 1610), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1610), "row_attr", [], "any", false, true, false, 1610), "class", [], "any", true, true, false, 1610)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1610), "row_attr", [], "any", false, true, false, 1610), "class", [], "any", false, false, false, 1610), "")) : ("")) . " col col-md-3"))])];
            if (!twig_test_iterable($__internal_compile_22)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 1610, $this->getSourceContext());
            }
            $__internal_compile_22 = twig_to_array($__internal_compile_22);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_22));
            // line 1611
            echo "      <div ";
            $this->displayBlock("row_attributes", $context, $blocks);
            echo ">
      ";
            $context = $__internal_compile_21;
            // line 1613
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "
        ";
            // line 1614
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
            echo "
      </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1617
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  4527 => 1617,  4510 => 1614,  4505 => 1613,  4499 => 1611,  4490 => 1610,  4473 => 1609,  4468 => 1608,  4466 => 1607,  4462 => 1606,  4452 => 1599,  4448 => 1598,  4444 => 1597,  4440 => 1596,  4437 => 1595,  4432 => 1592,  4426 => 1589,  4420 => 1586,  4411 => 1581,  4409 => 1580,  4403 => 1577,  4396 => 1573,  4390 => 1569,  4386 => 1567,  4382 => 1566,  4374 => 1561,  4365 => 1556,  4361 => 1555,  4356 => 1552,  4349 => 1550,  4345 => 1548,  4338 => 1546,  4336 => 1545,  4334 => 1544,  4330 => 1543,  4319 => 1536,  4316 => 1535,  4313 => 1533,  4299 => 1532,  4293 => 1530,  4290 => 1529,  4287 => 1528,  4284 => 1527,  4281 => 1526,  4278 => 1525,  4276 => 1524,  4273 => 1523,  4255 => 1522,  4252 => 1521,  4243 => 1519,  4239 => 1518,  4234 => 1517,  4232 => 1515,  4231 => 1513,  4230 => 1512,  4226 => 1511,  4219 => 1507,  4216 => 1505,  4210 => 1504,  4207 => 1503,  4205 => 1502,  4198 => 1498,  4193 => 1497,  4191 => 1496,  4174 => 1494,  4165 => 1488,  4161 => 1487,  4153 => 1486,  4149 => 1485,  4137 => 1482,  4131 => 1479,  4128 => 1478,  4125 => 1477,  4122 => 1476,  4119 => 1475,  4114 => 1474,  4112 => 1473,  4107 => 1472,  4103 => 1471,  4097 => 1467,  4091 => 1466,  4088 => 1465,  4086 => 1464,  4081 => 1462,  4076 => 1461,  4070 => 1459,  4068 => 1458,  4059 => 1457,  4056 => 1456,  4051 => 1455,  4049 => 1454,  4045 => 1453,  4041 => 1451,  4035 => 1448,  4032 => 1447,  4030 => 1446,  4022 => 1440,  4016 => 1439,  4013 => 1438,  4011 => 1437,  4005 => 1434,  3997 => 1433,  3988 => 1432,  3985 => 1431,  3980 => 1430,  3978 => 1429,  3969 => 1423,  3964 => 1422,  3962 => 1421,  3958 => 1420,  3953 => 1417,  3951 => 1416,  3949 => 1415,  3947 => 1412,  3946 => 1411,  3945 => 1410,  3944 => 1409,  3940 => 1408,  3938 => 1407,  3934 => 1406,  3927 => 1401,  3923 => 1400,  3918 => 1397,  3916 => 1396,  3914 => 1395,  3912 => 1392,  3911 => 1391,  3910 => 1390,  3909 => 1389,  3905 => 1388,  3903 => 1387,  3899 => 1386,  3895 => 1383,  3893 => 1382,  3891 => 1381,  3887 => 1380,  3882 => 1377,  3880 => 1376,  3878 => 1375,  3876 => 1374,  3874 => 1373,  3872 => 1372,  3870 => 1370,  3868 => 1368,  3866 => 1367,  3864 => 1366,  3852 => 1364,  3848 => 1363,  3841 => 1359,  3836 => 1357,  3829 => 1355,  3824 => 1354,  3822 => 1353,  3818 => 1352,  3816 => 1351,  3812 => 1350,  3805 => 1346,  3801 => 1345,  3797 => 1344,  3792 => 1343,  3789 => 1342,  3786 => 1341,  3783 => 1340,  3780 => 1339,  3778 => 1338,  3775 => 1337,  3771 => 1336,  3760 => 1333,  3758 => 1332,  3756 => 1331,  3752 => 1330,  3745 => 1326,  3738 => 1325,  3736 => 1324,  3734 => 1323,  3730 => 1322,  3725 => 1319,  3719 => 1316,  3716 => 1315,  3713 => 1314,  3709 => 1311,  3703 => 1309,  3701 => 1308,  3695 => 1306,  3693 => 1305,  3691 => 1304,  3687 => 1302,  3681 => 1299,  3678 => 1298,  3675 => 1297,  3670 => 1295,  3668 => 1294,  3666 => 1293,  3662 => 1292,  3654 => 1287,  3650 => 1285,  3646 => 1284,  3640 => 1280,  3633 => 1276,  3629 => 1275,  3625 => 1273,  3616 => 1270,  3613 => 1269,  3609 => 1268,  3604 => 1267,  3602 => 1266,  3599 => 1265,  3596 => 1264,  3587 => 1261,  3584 => 1260,  3579 => 1259,  3573 => 1256,  3570 => 1255,  3568 => 1254,  3560 => 1253,  3558 => 1252,  3554 => 1251,  3549 => 1247,  3547 => 1246,  3543 => 1245,  3538 => 1241,  3536 => 1240,  3532 => 1239,  3526 => 1235,  3517 => 1233,  3513 => 1232,  3508 => 1231,  3506 => 1230,  3501 => 1228,  3498 => 1227,  3495 => 1225,  3493 => 1224,  3491 => 1223,  3487 => 1222,  3482 => 1219,  3478 => 1218,  3473 => 1215,  3469 => 1214,  3465 => 1212,  3459 => 1211,  3451 => 1209,  3448 => 1208,  3444 => 1207,  3441 => 1206,  3439 => 1205,  3435 => 1204,  3427 => 1199,  3420 => 1198,  3414 => 1194,  3412 => 1193,  3409 => 1192,  3405 => 1191,  3400 => 1187,  3397 => 1186,  3393 => 1185,  3388 => 1181,  3385 => 1180,  3381 => 1179,  3373 => 1175,  3370 => 1174,  3352 => 1172,  3350 => 1171,  3347 => 1170,  3343 => 1169,  3335 => 1164,  3332 => 1163,  3329 => 1162,  3325 => 1161,  3317 => 1156,  3314 => 1155,  3311 => 1154,  3307 => 1153,  3303 => 1150,  3300 => 1149,  3298 => 1148,  3296 => 1147,  3294 => 1146,  3292 => 1145,  3290 => 1144,  3286 => 1143,  3282 => 1140,  3279 => 1139,  3277 => 1138,  3275 => 1137,  3273 => 1136,  3271 => 1135,  3269 => 1134,  3265 => 1133,  3259 => 1130,  3254 => 1129,  3250 => 1128,  3244 => 1125,  3239 => 1124,  3235 => 1123,  3230 => 1120,  3224 => 1117,  3221 => 1116,  3219 => 1115,  3216 => 1114,  3213 => 1112,  3210 => 1110,  3208 => 1109,  3206 => 1108,  3204 => 1107,  3202 => 1105,  3200 => 1104,  3197 => 1103,  3191 => 1100,  3188 => 1099,  3186 => 1098,  3183 => 1097,  3181 => 1096,  3178 => 1095,  3174 => 1094,  3167 => 1089,  3165 => 1087,  3164 => 1085,  3163 => 1084,  3157 => 1081,  3153 => 1079,  3150 => 1077,  3147 => 1075,  3145 => 1074,  3143 => 1070,  3141 => 1069,  3137 => 1068,  3131 => 1065,  3124 => 1061,  3119 => 1059,  3115 => 1058,  3110 => 1055,  3107 => 1053,  3104 => 1051,  3102 => 1050,  3099 => 1049,  3095 => 1048,  3084 => 1040,  3080 => 1039,  3076 => 1038,  3072 => 1036,  3070 => 1035,  3066 => 1033,  3063 => 1032,  3059 => 1031,  3051 => 1026,  3046 => 1025,  3044 => 1024,  3042 => 1023,  3036 => 1020,  3034 => 1019,  3029 => 1018,  3027 => 1016,  3024 => 1015,  3022 => 1013,  3020 => 1012,  3018 => 1011,  3016 => 1006,  3015 => 1005,  3008 => 1001,  3004 => 999,  3000 => 998,  2994 => 993,  2992 => 992,  2990 => 989,  2989 => 988,  2988 => 987,  2987 => 986,  2984 => 984,  2981 => 983,  2979 => 982,  2976 => 981,  2971 => 979,  2969 => 978,  2967 => 977,  2964 => 975,  2961 => 974,  2957 => 973,  2952 => 970,  2946 => 968,  2940 => 966,  2938 => 965,  2934 => 964,  2930 => 961,  2925 => 958,  2914 => 956,  2910 => 955,  2906 => 954,  2901 => 952,  2896 => 950,  2892 => 948,  2886 => 946,  2884 => 945,  2878 => 941,  2875 => 940,  2866 => 937,  2859 => 936,  2856 => 935,  2853 => 934,  2850 => 933,  2847 => 932,  2844 => 931,  2840 => 930,  2833 => 929,  2831 => 928,  2827 => 927,  2821 => 923,  2812 => 920,  2791 => 919,  2787 => 918,  2783 => 916,  2779 => 914,  2769 => 910,  2759 => 909,  2756 => 908,  2752 => 907,  2749 => 906,  2747 => 905,  2742 => 904,  2738 => 903,  2734 => 850,  2728 => 896,  2721 => 894,  2714 => 892,  2710 => 890,  2707 => 889,  2701 => 887,  2695 => 885,  2693 => 884,  2690 => 883,  2687 => 882,  2685 => 881,  2682 => 880,  2678 => 879,  2673 => 877,  2669 => 875,  2665 => 874,  2660 => 871,  2645 => 869,  2639 => 867,  2633 => 864,  2627 => 861,  2623 => 859,  2621 => 858,  2618 => 857,  2601 => 856,  2597 => 855,  2587 => 851,  2584 => 850,  2580 => 849,  2576 => 813,  2570 => 843,  2560 => 839,  2556 => 837,  2552 => 836,  2542 => 829,  2538 => 827,  2534 => 825,  2532 => 824,  2520 => 814,  2517 => 813,  2513 => 812,  2506 => 805,  2499 => 802,  2497 => 801,  2496 => 800,  2495 => 799,  2493 => 798,  2489 => 797,  2482 => 792,  2479 => 791,  2475 => 790,  2469 => 785,  2461 => 781,  2459 => 780,  2458 => 779,  2457 => 778,  2456 => 777,  2453 => 776,  2449 => 775,  2443 => 771,  2435 => 765,  2430 => 762,  2424 => 759,  2419 => 757,  2412 => 753,  2408 => 751,  2406 => 750,  2400 => 747,  2396 => 746,  2393 => 745,  2388 => 742,  2380 => 739,  2378 => 738,  2377 => 737,  2376 => 736,  2374 => 735,  2370 => 734,  2367 => 732,  2365 => 731,  2359 => 729,  2357 => 728,  2355 => 726,  2352 => 724,  2348 => 723,  2340 => 719,  2334 => 717,  2332 => 716,  2328 => 715,  2324 => 710,  2322 => 709,  2315 => 708,  2313 => 707,  2311 => 706,  2307 => 705,  2302 => 701,  2300 => 700,  2296 => 699,  2294 => 698,  2291 => 696,  2289 => 695,  2285 => 694,  2283 => 693,  2281 => 692,  2279 => 691,  2275 => 690,  2270 => 687,  2265 => 684,  2263 => 683,  2261 => 682,  2259 => 681,  2245 => 680,  2242 => 679,  2238 => 677,  2236 => 676,  2234 => 674,  2232 => 672,  2217 => 671,  2215 => 670,  2212 => 669,  2209 => 668,  2206 => 667,  2203 => 666,  2200 => 665,  2197 => 664,  2194 => 663,  2191 => 662,  2188 => 661,  2185 => 660,  2182 => 659,  2180 => 658,  2176 => 657,  2172 => 654,  2168 => 653,  2164 => 650,  2160 => 649,  2156 => 646,  2154 => 645,  2150 => 643,  2141 => 634,  2124 => 631,  2120 => 630,  2116 => 629,  2113 => 628,  2096 => 627,  2090 => 623,  2086 => 622,  2082 => 621,  2074 => 616,  2068 => 613,  2063 => 612,  2059 => 611,  2048 => 607,  2046 => 606,  2042 => 605,  2040 => 604,  2036 => 603,  2032 => 600,  2030 => 580,  2024 => 596,  2010 => 595,  2002 => 594,  1998 => 592,  1993 => 591,  1989 => 590,  1985 => 589,  1981 => 588,  1977 => 587,  1972 => 586,  1969 => 585,  1952 => 584,  1948 => 583,  1928 => 582,  1925 => 581,  1922 => 580,  1918 => 579,  1914 => 554,  1911 => 576,  1904 => 572,  1898 => 569,  1894 => 568,  1889 => 566,  1885 => 564,  1883 => 563,  1878 => 561,  1872 => 558,  1868 => 557,  1864 => 555,  1861 => 554,  1857 => 553,  1853 => 537,  1848 => 548,  1843 => 546,  1838 => 545,  1836 => 544,  1832 => 543,  1826 => 540,  1822 => 538,  1819 => 537,  1815 => 536,  1811 => 522,  1806 => 532,  1788 => 525,  1785 => 524,  1782 => 523,  1779 => 522,  1775 => 521,  1771 => 518,  1766 => 515,  1757 => 512,  1752 => 510,  1749 => 509,  1745 => 508,  1741 => 507,  1735 => 504,  1730 => 502,  1722 => 496,  1720 => 495,  1717 => 494,  1708 => 491,  1704 => 490,  1701 => 489,  1698 => 488,  1695 => 487,  1693 => 486,  1690 => 485,  1687 => 484,  1684 => 483,  1680 => 482,  1675 => 480,  1671 => 479,  1667 => 476,  1662 => 473,  1651 => 471,  1647 => 470,  1643 => 469,  1637 => 466,  1632 => 464,  1624 => 458,  1622 => 457,  1619 => 456,  1603 => 454,  1601 => 453,  1598 => 451,  1595 => 450,  1593 => 449,  1590 => 448,  1587 => 447,  1584 => 446,  1567 => 445,  1562 => 443,  1558 => 442,  1554 => 439,  1551 => 437,  1549 => 436,  1545 => 435,  1539 => 431,  1530 => 428,  1526 => 427,  1505 => 426,  1501 => 425,  1497 => 423,  1493 => 421,  1483 => 417,  1473 => 416,  1470 => 415,  1466 => 414,  1463 => 413,  1461 => 412,  1457 => 411,  1452 => 410,  1448 => 409,  1444 => 406,  1440 => 404,  1423 => 402,  1420 => 401,  1403 => 400,  1400 => 399,  1397 => 398,  1393 => 395,  1387 => 393,  1385 => 392,  1381 => 391,  1373 => 390,  1369 => 388,  1365 => 385,  1359 => 383,  1356 => 382,  1351 => 380,  1346 => 378,  1344 => 377,  1336 => 376,  1332 => 374,  1329 => 373,  1327 => 372,  1324 => 371,  1320 => 370,  1315 => 366,  1298 => 364,  1281 => 363,  1278 => 362,  1272 => 360,  1268 => 359,  1263 => 355,  1257 => 352,  1256 => 351,  1255 => 350,  1254 => 349,  1250 => 348,  1246 => 347,  1243 => 345,  1237 => 342,  1236 => 341,  1235 => 340,  1234 => 339,  1230 => 338,  1228 => 337,  1226 => 336,  1222 => 335,  1218 => 332,  1216 => 331,  1212 => 330,  1206 => 327,  1204 => 326,  1200 => 325,  1195 => 322,  1191 => 321,  1187 => 320,  1181 => 319,  1178 => 318,  1175 => 317,  1172 => 316,  1169 => 315,  1166 => 314,  1163 => 313,  1160 => 312,  1157 => 311,  1155 => 310,  1152 => 309,  1149 => 308,  1147 => 307,  1143 => 306,  1139 => 303,  1137 => 302,  1133 => 301,  1129 => 298,  1125 => 297,  1123 => 296,  1119 => 295,  1113 => 290,  1110 => 289,  1102 => 288,  1097 => 286,  1095 => 285,  1093 => 284,  1090 => 282,  1088 => 281,  1084 => 280,  1078 => 275,  1076 => 274,  1074 => 272,  1073 => 271,  1072 => 270,  1071 => 269,  1066 => 267,  1064 => 266,  1062 => 265,  1059 => 263,  1057 => 262,  1053 => 261,  1049 => 258,  1045 => 257,  1043 => 256,  1039 => 255,  1034 => 251,  1032 => 250,  1030 => 249,  1028 => 248,  1026 => 247,  1022 => 246,  1020 => 245,  1017 => 243,  1015 => 242,  1011 => 241,  1004 => 235,  1002 => 234,  1000 => 233,  996 => 232,  992 => 229,  988 => 227,  982 => 224,  979 => 223,  977 => 222,  975 => 221,  969 => 218,  966 => 217,  963 => 216,  961 => 215,  958 => 214,  954 => 213,  949 => 210,  947 => 209,  945 => 208,  943 => 207,  939 => 206,  931 => 200,  929 => 199,  924 => 197,  922 => 196,  919 => 195,  916 => 194,  913 => 193,  910 => 192,  908 => 191,  905 => 190,  900 => 188,  895 => 187,  892 => 186,  890 => 185,  885 => 184,  881 => 182,  879 => 181,  862 => 180,  860 => 179,  856 => 175,  853 => 172,  852 => 171,  851 => 170,  849 => 169,  846 => 168,  843 => 166,  840 => 165,  837 => 163,  835 => 162,  833 => 161,  829 => 160,  824 => 140,  818 => 153,  815 => 152,  812 => 151,  809 => 150,  806 => 149,  803 => 148,  800 => 147,  797 => 146,  794 => 145,  791 => 144,  788 => 143,  786 => 142,  783 => 141,  780 => 140,  778 => 139,  774 => 138,  767 => 134,  762 => 133,  759 => 132,  756 => 131,  752 => 130,  745 => 126,  740 => 125,  737 => 124,  734 => 123,  730 => 122,  724 => 114,  722 => 113,  718 => 111,  716 => 110,  714 => 109,  712 => 107,  710 => 106,  708 => 105,  706 => 103,  704 => 102,  702 => 101,  691 => 100,  687 => 99,  683 => 94,  679 => 93,  677 => 92,  673 => 91,  667 => 88,  661 => 85,  656 => 84,  654 => 83,  652 => 82,  648 => 81,  644 => 78,  640 => 77,  636 => 76,  632 => 73,  629 => 72,  626 => 71,  623 => 70,  621 => 69,  617 => 68,  610 => 65,  607 => 64,  604 => 63,  601 => 62,  598 => 61,  595 => 60,  592 => 59,  588 => 58,  584 => 1606,  582 => 1566,  579 => 1565,  577 => 1555,  574 => 1554,  572 => 1511,  570 => 1471,  568 => 1420,  566 => 1406,  563 => 1405,  561 => 1400,  558 => 1399,  556 => 1386,  553 => 1385,  551 => 1380,  548 => 1379,  546 => 1363,  543 => 1362,  541 => 1350,  538 => 1349,  536 => 1336,  533 => 1335,  531 => 1330,  528 => 1329,  526 => 1322,  523 => 1321,  521 => 1292,  518 => 1291,  516 => 1284,  514 => 1251,  512 => 1245,  510 => 1239,  508 => 1222,  505 => 1221,  503 => 1218,  501 => 1204,  499 => 1191,  496 => 1190,  494 => 1185,  491 => 1184,  489 => 1179,  486 => 1178,  484 => 1169,  481 => 1168,  479 => 1161,  476 => 1160,  474 => 1153,  472 => 1143,  470 => 1133,  468 => 1128,  465 => 1127,  463 => 1123,  460 => 1122,  458 => 1094,  455 => 1093,  453 => 1068,  450 => 1067,  448 => 1048,  445 => 1047,  443 => 1031,  440 => 1030,  438 => 998,  435 => 997,  433 => 973,  430 => 972,  428 => 964,  425 => 963,  423 => 927,  420 => 926,  418 => 903,  415 => 901,  413 => 849,  410 => 848,  408 => 812,  405 => 811,  402 => 809,  400 => 790,  397 => 789,  395 => 723,  392 => 722,  390 => 715,  387 => 714,  384 => 712,  382 => 705,  379 => 704,  377 => 690,  374 => 689,  372 => 657,  369 => 656,  367 => 653,  364 => 652,  362 => 649,  359 => 648,  357 => 643,  354 => 642,  351 => 640,  349 => 611,  347 => 603,  345 => 579,  342 => 578,  340 => 553,  337 => 552,  335 => 536,  332 => 535,  330 => 521,  327 => 520,  325 => 479,  322 => 478,  320 => 442,  317 => 441,  315 => 435,  312 => 434,  310 => 409,  307 => 408,  305 => 370,  302 => 369,  300 => 359,  297 => 358,  295 => 335,  292 => 334,  290 => 330,  287 => 329,  285 => 325,  282 => 324,  280 => 306,  277 => 305,  275 => 301,  273 => 295,  271 => 280,  268 => 279,  266 => 261,  264 => 255,  262 => 241,  259 => 240,  257 => 232,  254 => 231,  252 => 213,  249 => 212,  247 => 206,  244 => 205,  242 => 160,  239 => 157,  237 => 138,  234 => 137,  232 => 130,  229 => 129,  227 => 122,  224 => 117,  222 => 99,  219 => 98,  217 => 91,  215 => 81,  213 => 76,  211 => 68,  209 => 58,  206 => 57,  203 => 55,  200 => 53,  197 => 46,  194 => 34,  191 => 25,  77 => 52,  70 => 51,  63 => 50,  56 => 49,  49 => 48,  30 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\TwigTemplateForm\\prestashop_ui_kit_base.html.twig");
    }
}
