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

/* @EasyAdmin/crud/detail.html.twig */
class __TwigTemplate_a6e434d6f53b5209f2807f6b79ab12cdc03c5ea32338d72ad28601c1bde9ab1f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'main' => [$this, 'block_main'],
            'detail_fields' => [$this, 'block_detail_fields'],
            'detail_field' => [$this, 'block_detail_field'],
            'delete_form' => [$this, 'block_delete_form'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 3), "@EasyAdmin/crud/detail.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $context["__internal_78b3fd8c5fdb18f12ba653cf577cb6909870cee880a2aec03ee97d1eb3c57d84"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "translationDomain", [], "any", false, false, false, 5);
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ((("ea-detail-" . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 7)) . "-") . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 7)), "html", null, true);
    }

    // line 8
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ("ea-detail ea-detail-" . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 8)), "html", null, true);
    }

    // line 10
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        ob_start(function () { return ''; });
        // line 12
        $context["default_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 12), "defaultPageTitle", [0 => "detail", 1 => twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "instance", [], "any", false, false, false, 12)], "method", false, false, false, 12), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 12), "translationParameters", [], "any", false, false, false, 12), "EasyAdminBundle");
        // line 13
        echo "        ";
        $context["custom_title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 13), "customPageTitle", [0 => "detail", 1 => twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "instance", [], "any", false, false, false, 13)], "method", false, false, false, 13);
        // line 14
        echo "        ";
        echo (((null === ($context["custom_title"] ?? null))) ? (($context["default_title"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["custom_title"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 14), "translationParameters", [], "any", false, false, false, 14),         // line 5
($context["__internal_78b3fd8c5fdb18f12ba653cf577cb6909870cee880a2aec03ee97d1eb3c57d84"] ?? null))));
        $___internal_c5ca7f93c5a2450c89a97128d7ab9c937cf63a134adb42c03bdb0afce02840e9_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        echo twig_spaceless($___internal_c5ca7f93c5a2450c89a97128d7ab9c937cf63a134adb42c03bdb0afce02840e9_);
    }

    // line 18
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 20
            echo "        ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 20), ["action" => $context["action"]], false);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 24
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "";
    }

    // line 26
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
        $this->displayBlock('detail_fields', $context, $blocks);
        // line 61
        echo "
    ";
        // line 62
        $this->displayBlock('delete_form', $context, $blocks);
    }

    // line 27
    public function block_detail_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "        ";
        $context["row_number"] = 0;
        // line 29
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "fields", [], "any", false, false, false, 29));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 30
            echo "            ";
            $context["is_decoration_field"] = twig_in_filter("field-form_panel", twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 30));
            // line 31
            echo "
            ";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 32) &&  !($context["is_decoration_field"] ?? null))) {
                // line 33
                echo "                ";
                $context["row_number"] = 0;
                // line 34
                echo "                ";
                echo twig_call_macro($macros["_self"], "macro_open_empty_content_panel", [$context["field"]], 34, $context, $this->getSourceContext());
                echo "
            ";
            }
            // line 36
            echo "
            ";
            // line 37
            if (($context["is_decoration_field"] ?? null)) {
                // line 38
                echo "                ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 38)) {
                    // line 39
                    echo "                    ";
                    echo twig_call_macro($macros["_self"], "macro_close_content_panel", [], 39, $context, $this->getSourceContext());
                    echo "
                ";
                }
                // line 41
                echo "
                ";
                // line 42
                $context["row_number"] = 0;
                // line 43
                echo "                ";
                if ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 43)) && twig_test_empty(twig_get_attribute($this->env, $this->source, $context["field"], "help", [], "any", false, false, false, 43)))) {
                    // line 44
                    echo "                    ";
                    echo twig_call_macro($macros["_self"], "macro_open_empty_content_panel", [$context["field"]], 44, $context, $this->getSourceContext());
                    echo "
                ";
                } else {
                    // line 46
                    echo "                    ";
                    echo twig_call_macro($macros["_self"], "macro_open_content_panel_with_header", [$context["field"]], 46, $context, $this->getSourceContext());
                    echo "
                ";
                }
                // line 48
                echo "            ";
            }
            // line 49
            echo "
            ";
            // line 50
            $this->displayBlock('detail_field', $context, $blocks);
            // line 55
            echo "
            ";
            // line 56
            $context["row_number"] = ((($context["is_decoration_field"] ?? null)) ? (($context["row_number"] ?? null)) : ((($context["row_number"] ?? null) + 1)));
            // line 57
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
        ";
        // line 59
        echo twig_call_macro($macros["_self"], "macro_close_content_panel", [], 59, $context, $this->getSourceContext());
        echo "
    ";
    }

    // line 50
    public function block_detail_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "                ";
        if ( !($context["is_decoration_field"] ?? null)) {
            // line 52
            echo "                    ";
            echo twig_call_macro($macros["_self"], "macro_render_field", [($context["entity"] ?? null), ($context["field"] ?? null), ($context["row_number"] ?? null)], 52, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 54
        echo "            ";
    }

    // line 62
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", ["entity_id" => twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 63)], false);
        echo "
    ";
    }

    // line 67
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                const formAction = \$(this).attr('formaction');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').attr('action', formAction).trigger('submit');
                    });
            });
        });
    </script>
";
    }

    // line 86
    public function macro_open_empty_content_panel($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 87
            echo "
<div class=\"";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 88), "html", null, true);
            echo "\">
    <div class=\"content-panel\">
        <div class=\"content-panel-body without-header without-footer without-padding\">
            <dl class=\"datalist\">
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 94
    public function macro_close_content_panel(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 95
            echo "            </dl>
        </div>
    </div>
</div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 101
    public function macro_open_content_panel_with_header($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 102
            echo "    ";
            $context["collapsible"] = twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOption", [0 => "collapsible"], "method", false, false, false, 102);
            // line 103
            echo "    ";
            $context["collapsed"] = twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOption", [0 => "collapsed"], "method", false, false, false, 103);
            // line 104
            echo "    <div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 104), "html", null, true);
            echo "\">
        <div class=\"content-panel\">
            <div class=\"content-panel-header ";
            // line 106
            echo ((($context["collapsible"] ?? null)) ? ("collapsible") : (""));
            echo " ";
            echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 106))) ? ("with-help") : (""));
            echo "\">
                ";
            // line 107
            if (($context["collapsible"] ?? null)) {
                // line 108
                echo "                    <a href=\"#content-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 108), "html", null, true);
                echo "\" data-toggle=\"collapse\" class=\"content-panel-collapse ";
                echo ((($context["collapsed"] ?? null)) ? ("collapsed") : (""));
                echo "\" aria-expanded=\"";
                echo ((($context["collapsed"] ?? null)) ? ("false") : ("true"));
                echo "\" aria-controls=\"content-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 108), "html", null, true);
                echo "\">
                        <i class=\"fas fw fa-chevron-right collapse-icon\"></i>
                ";
            }
            // line 111
            echo "
                        ";
            // line 112
            if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOption", [0 => "icon"], "method", false, false, false, 112)) {
                // line 113
                echo "                            <i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOption", [0 => "icon"], "method", false, false, false, 113), "html", null, true);
                echo "\"></i>
                        ";
            }
            // line 115
            echo "                        ";
            echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 115);
            echo "

                ";
            // line 117
            if (($context["collapsible"] ?? null)) {
                // line 118
                echo "                    </a>
                ";
            }
            // line 120
            echo "
                ";
            // line 121
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 121))) {
                // line 122
                echo "                    <div class=\"content-panel-header-help\">";
                echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 122);
                echo "</div>
                ";
            }
            // line 124
            echo "            </div>

            <div id=\"content-";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 126), "html", null, true);
            echo "\" class=\"content-panel-body without-footer without-padding ";
            echo ((($context["collapsible"] ?? null)) ? ("collapse") : (""));
            echo " ";
            echo (( !($context["collapsed"] ?? null)) ? ("show") : (""));
            echo "\">
                <dl class=\"datalist\">
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 130
    public function macro_render_field($__entity__ = null, $__field__ = null, $__row_number__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "field" => $__field__,
            "row_number" => $__row_number__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 131
            echo "    <div class=\"data-row ";
            echo (((($context["row_number"] ?? null) % 2 == 0)) ? ("with-background") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 131), "html", null, true);
            echo "\">
        <dd>
            ";
            // line 133
            echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 133);
            echo "

            ";
            // line 135
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 135))) {
                // line 136
                echo "                <span class=\"data-help\">
                    <i class=\"far fa-question-circle\" data-toggle=\"tooltip\" title=\"";
                // line 137
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 137), "html_attr");
                echo "\"></i>
                </span>
            ";
            }
            // line 140
            echo "        </dd>
        <dt>
            ";
            // line 142
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "templatePath", [], "any", false, false, false, 142), ["field" => ($context["field"] ?? null), "entity" => ($context["entity"] ?? null)], false);
            echo "
        </dt>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  497 => 142,  493 => 140,  487 => 137,  484 => 136,  482 => 135,  477 => 133,  469 => 131,  454 => 130,  438 => 126,  434 => 124,  428 => 122,  426 => 121,  423 => 120,  419 => 118,  417 => 117,  411 => 115,  405 => 113,  403 => 112,  400 => 111,  387 => 108,  385 => 107,  379 => 106,  373 => 104,  370 => 103,  367 => 102,  354 => 101,  341 => 95,  329 => 94,  315 => 88,  312 => 87,  299 => 86,  277 => 68,  273 => 67,  266 => 63,  262 => 62,  258 => 54,  252 => 52,  249 => 51,  245 => 50,  239 => 59,  236 => 58,  222 => 57,  220 => 56,  217 => 55,  215 => 50,  212 => 49,  209 => 48,  203 => 46,  197 => 44,  194 => 43,  192 => 42,  189 => 41,  183 => 39,  180 => 38,  178 => 37,  175 => 36,  169 => 34,  166 => 33,  164 => 32,  161 => 31,  158 => 30,  140 => 29,  137 => 28,  133 => 27,  129 => 62,  126 => 61,  123 => 27,  119 => 26,  112 => 24,  101 => 20,  96 => 19,  92 => 18,  88 => 11,  85 => 5,  83 => 14,  80 => 13,  78 => 12,  76 => 11,  72 => 10,  65 => 8,  58 => 7,  54 => 3,  52 => 5,  45 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/detail.html.twig", "/var/www/html/portfolio/macronfact/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/detail.html.twig");
    }
}
