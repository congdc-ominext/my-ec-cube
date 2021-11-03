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

/* @admin/Setting/System/member.twig */
class __TwigTemplate_a3ebdb682203625d75695e7959e86d9aecedb0105fd5ef441ee63c864910170c extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["menus"] = [0 => "setting", 1 => "system", 2 => "member"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "Form/bootstrap_4_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/System/member.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.member_management"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system"), "html", null, true);
    }

    // line 20
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <script>
        \$('.action-down, .action-up').on('click', function(e) {
            var self = \$(this),
                current = \$(this).parents('tr');
            \$('body').append(\$('<div class=\"modal-backdrop show\"></div>'));
            \$.ajax({
                url: self.attr('href'),
                method: self.data('method'),
            }).done(function() {
                if (self.hasClass('action-down')) {
                    current.next().after(current);
                } else {
                    current.prev().before(current);
                }
            }).always(function() {
                \$('.modal-backdrop').remove();
                \$('.action-up, .action-down').removeClass('disabled');
                \$('.action-up').first().addClass('disabled');
                \$('.action-down').last().addClass('disabled');
            });

            return false;
        });
    </script>
";
    }

    // line 47
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div id=\"ex-member-new\" class=\"d-block mb-3\">
                    <a class=\"btn btn-ec-regular\" href=\"";
        // line 52
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_system_member_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration__new"), "html", null, true);
        echo "</a>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <form name=\"form1\" id=\"form1\" method=\"post\" action=\"\">
                            <table class=\"table table-sm\">
                                <thead>
                                <tr>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                        ";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.member.name"), "html", null, true);
        echo "
                                    </th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                        ";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.member.department"), "html", null, true);
        echo "
                                    </th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                        ";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.authority"), "html", null, true);
        echo "
                                    </th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                        ";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.member.work"), "html", null, true);
        echo "
                                    </th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                        ";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.member.two_factor_auth_enabled"), "html", null, true);
        echo "
                                    </th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\"></th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Members"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["Member"]) {
            // line 80
            echo "                                    <tr id=\"ex-member-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Member"], "id", [], "any", false, false, false, 80), "html", null, true);
            echo "\">
                                        <td class=\"align-middle text-center pl-3\">
                                            ";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Member"], "name", [], "any", false, false, false, 82), "html", null, true);
            echo "
                                        </td>
                                        <td class=\"align-middle text-center\">
                                            ";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Member"], "department", [], "any", false, false, false, 85), "html", null, true);
            echo "
                                        </td>
                                        <td class=\"align-middle text-center\">
                                            ";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Member"], "Authority", [], "any", false, false, false, 88), "name", [], "any", false, false, false, 88), "html", null, true);
            echo "
                                        </td>
                                        <td class=\"align-middle text-center\">
                                            ";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Member"], "Work", [], "any", false, false, false, 91), "name", [], "any", false, false, false, 91), "html", null, true);
            echo "
                                        </td>
                                        <td class=\"align-middle text-center\">
                                            ";
            // line 94
            if (twig_get_attribute($this->env, $this->source, $context["Member"], "two_factor_auth_enabled", [], "any", false, false, false, 94)) {
                // line 95
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.enabled"), "html", null, true);
                echo "
                                                <span data-tooltip=\"true\" data-placement=\"top\" data-original-title=\"";
                // line 96
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["Member"], "two_factor_auth_key", [], "any", false, false, false, 96)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.member.two_factor_auth_completed")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.member.two_factor_auth_incompleted"))), "html", null, true);
                // line 98
                echo "\">
                                                    <i class=\"fa fa-check fa-lg ";
                // line 99
                echo ((twig_get_attribute($this->env, $this->source, $context["Member"], "two_factor_auth_key", [], "any", false, false, false, 99)) ? ("text-success") : ("text-danger"));
                echo "\"
                                                       aria-hidden=\"true\"></i>
                                                </span>
                                            </span>
                                            ";
            } else {
                // line 104
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.disabled"), "html", null, true);
                echo "
                                            ";
            }
            // line 106
            echo "                                        </td>
                                        <td class=\"align-middle pr-3\">
                                            <div class=\"text-right\">
                                                <div class=\"px-1 d-inline-block\">
                                                    <a class=\"btn btn-ec-actionIcon action-edit\"
                                                       href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_system_member_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Member"], "id", [], "any", false, false, false, 111)]), "html", null, true);
            echo "\"
                                                       data-tooltip=\"true\"
                                                       data-placement=\"top\"
                                                       data-original-title=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
            echo "\">
                                                        <i class=\"fa fa-pencil fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"px-1 d-inline-block\">
                                                    <a class=\"btn btn-ec-actionIcon action-up ";
            // line 119
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 119)) {
                echo " disabled ";
            }
            echo "\"
                                                       href=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_system_member_up", ["id" => twig_get_attribute($this->env, $this->source, $context["Member"], "id", [], "any", false, false, false, 120)]), "html", null, true);
            echo "\"
                                                       data-tooltip=\"true\"
                                                       data-method=\"put\"
                                                       data-placement=\"top\"
                                                       data-original-title=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.up"), "html", null, true);
            echo "\">
                                                        <i class=\"fa fa-arrow-up fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"px-1 d-inline-block\">
                                                    <a class=\"btn btn-ec-actionIcon action-down ";
            // line 129
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 129)) {
                echo " disabled ";
            }
            echo "\"
                                                       href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_system_member_down", ["id" => twig_get_attribute($this->env, $this->source, $context["Member"], "id", [], "any", false, false, false, 130)]), "html", null, true);
            echo "\"
                                                       data-tooltip=\"true\"
                                                       data-method=\"put\"
                                                       data-placement=\"top\"
                                                       data-original-title=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.down"), "html", null, true);
            echo "\">
                                                        <i class=\"fa fa-arrow-down fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"px-1 d-inline-block\">
                                                    ";
            // line 139
            if ((twig_get_attribute($this->env, $this->source, $context["Member"], "id", [], "any", false, false, false, 139) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 139), "id", [], "any", false, false, false, 139))) {
                // line 140
                echo "                                                        <a class=\"btn btn-ec-actionIcon action-delete mr-2 disabled\"
                                                            data-tooltip=\"true\" data-placement=\"top\"
                                                            title=\"";
                // line 142
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                            <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                        </a>
                                                    ";
            } else {
                // line 146
                echo "                                                        <div class=\"d-inline-block mr-2\" data-tooltip=\"true\" data-placement=\"top\"
                                                             title=\"";
                // line 147
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                            <a class=\"btn btn-ec-actionIcon action-delete\"
                                                               data-toggle=\"modal\"
                                                               data-target=\"#member_delete_";
                // line 150
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Member"], "id", [], "any", false, false, false, 150), "html", null, true);
                echo "\">
                                                                <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                            </a>
                                                        </div>
                                                        <div class=\"modal fade\" id=\"member_delete_";
                // line 154
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Member"], "id", [], "any", false, false, false, 154), "html", null, true);
                echo "\" tabindex=\"-1\"
                                                             role=\"dialog\"
                                                             aria-labelledby=\"member_delete_";
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Member"], "id", [], "any", false, false, false, 156), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                    <div class=\"modal-header\">
                                                                        <h5 class=\"modal-title font-weight-bold\">
                                                                            ";
                // line 161
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.member.delete__confirm_title"), "html", null, true);
                echo "</h5>
                                                                        <button class=\"close\" type=\"button\"
                                                                                data-dismiss=\"modal\"
                                                                                aria-label=\"Close\"><span
                                                                                    aria-hidden=\"true\">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class=\"modal-body text-left\">
                                                                        <p class=\"text-left\">
                                                                            ";
                // line 170
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.member.delete__confirm_message"), "html", null, true);
                echo "</p>
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">";
                // line 173
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "
                                                                        </button>
                                                                        <a class=\"btn btn-ec-delete\"
                                                                           href=\"";
                // line 176
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_system_member_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Member"], "id", [], "any", false, false, false, 176)]), "html", null, true);
                echo "\"
                                                                                ";
                // line 177
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo "
                                                                           data-method=\"delete\" data-confirm=\"false\">
                                                                            ";
                // line 179
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
            }
            // line 186
            echo "                                                </div>
                                            </div>
                                        </td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Setting/System/member.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 191,  378 => 186,  368 => 179,  363 => 177,  359 => 176,  353 => 173,  347 => 170,  335 => 161,  327 => 156,  322 => 154,  315 => 150,  309 => 147,  306 => 146,  299 => 142,  295 => 140,  293 => 139,  285 => 134,  278 => 130,  272 => 129,  264 => 124,  257 => 120,  251 => 119,  243 => 114,  237 => 111,  230 => 106,  224 => 104,  216 => 99,  213 => 98,  211 => 96,  206 => 95,  204 => 94,  198 => 91,  192 => 88,  186 => 85,  180 => 82,  174 => 80,  157 => 79,  148 => 73,  142 => 70,  136 => 67,  130 => 64,  124 => 61,  110 => 52,  104 => 48,  100 => 47,  72 => 21,  68 => 20,  61 => 16,  54 => 15,  49 => 11,  47 => 18,  45 => 13,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Setting/System/member.twig", "C:\\xampp\\htdocs\\ec-cube\\src\\Eccube\\Resource\\template\\admin\\Setting\\System\\member.twig");
    }
}
