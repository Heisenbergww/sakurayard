<?php

/* @overview/index.twig */
class __TwigTemplate_d8acce624ea967f3913cd291880bc32390c62356eda17822c7221a1426ab4c0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("grid-gallery.twig");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "grid-gallery.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "
    <nav id=\"supsystic-breadcrumbs\" class=\"supsystic-breadcrumbs\">
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery by Supsystic")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overview")), "html", null, true);
        echo "</a>
    </nav>

";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"supsystic-overview\">
        <div class=\"half-page-left\">
            ";
        // line 20
        echo "            <h3>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Step-by-step Tutorial")), "html", null, true);
        echo "</h3>
            <div>              
                <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "promo", 1 => "showTutorial"), "method"), "html", null, true);
        echo "\" class=\"button button-primary button-hero\">
                    <i class=\"fa fa-info-circle\"></i>
                    ";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Begin Step-by-step Tutorial")), "html", null, true);
        echo "
                </a>
            </div>
            <div class=\"clear\"></div>

            <h3>FAQ and Documentation</h3>
            <div class=\"faq-list\">
                <div class=\"faq-title\">
                    <i class=\"fa fa-info-circle\"></i>
                    Gallery plugin installation
                    <div class=\"description\" hidden>
                        One more advantage of responsive grid gallery WordPress plugin is an easy installation. To install it, you should make three following steps:</br>
                        1. Download Supsystic Gallery WordPress plugin.</br>
                        2. Upload to your WordPress plugins directory.</br>
                        3. Activate and enjoy.
                    </div>
                </div>
                <div class=\"faq-title\">
                    <i class=\"fa fa-info-circle\"></i>
                    Gallery doesn’t load on the front end. If the loading gallery icon just keeps playing but never loads the gallery.
                    <div class=\"description\" hidden>
                        Most likely there are conflicts with your theme or other plugins. Please contact us through our <a href=\"//supsystic.com/contact-us/ target=\"_blank\">internal support</a>. We will check what is wrong and will help you to solve the problem.
                    </div>
                </div>
                <div class=\"faq-title\">
                    <i class=\"fa fa-info-circle\"></i>
                    How to change the position of photos in gallery?

                    <div class=\"description\" hidden>
                        To change the position of photos just drag them manually on the Images List and click save.  Also there you can sort the images by add date, create date, size, name and tags.
                    </div>
                </div>
\t\t\t\t<div class=\"faq-title\">
                    <i class=\"fa fa-info-circle\"></i>
                    What is Gallery Loader?

                    <div class=\"description\" hidden>
                        This is a new option of Photo Gallery by Supsystic, which can be found on the Main tab settings. With its help you can choose funny loader icons to entertain your users while they are waiting. Also you can set the color for your icon or disable this option at all, if you don’t need it.
\t\t\t\t\t\tLearn more about it in <a href=\"//supsystic.com/main-settings/ target=\"_blank\">Main Settings.</a>
                    </div>
                </div>
                <div style=\"clear: both;\"></div>
                <a href=\"http://supsystic.com/plugins/photo-gallery/?utm_source=plugin&utm_medium=faq&utm_campaign=gallery#faq\" class=\"button button-primary button-hero\">
                    <i class=\"fa fa-info-circle\"></i>
                    Check all FAQs
                </a>
                <div style=\"clear: both;\"></div>
            </div>

            <div class=\"video\">
                <h3>Video tutorial</h3>
                <iframe type=\"text/html\"
                        width=\"80%\"
                        height=\"240px\"
                        src=\"http://www.youtube.com/embed/5bkjrlV14CE\"
                        frameborder=\"0\">
                </iframe>
            </div>

            <div class=\"server-settings\">
                <h3>Server Settings</h3>
                <ul class=\"settings-list\">
                    ";
        // line 86
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["serverSettings"]) ? $context["serverSettings"] : null));
        foreach ($context['_seq'] as $context["title"] => $context["element"]) {
            // line 87
            echo "                        <li class=\"settings-line\" style=\"float: none;\">
                            <div class=\"settings-title\">";
            // line 88
            echo twig_escape_filter($this->env, trim((isset($context["title"]) ? $context["title"] : null)), "html", null, true);
            echo ":</div>
                            <span>";
            // line 89
            echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["element"]) ? $context["element"] : null), "value")), "html", null, true);
            echo "</span>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['title'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                </ul>
            </div>
        </div>
        <div class=\"half-page-right\">
            <h3>News</h3>
            <div class=\"supsystic-overview-news\">
                ";
        // line 98
        echo (isset($context["news"]) ? $context["news"] : null);
        echo "
            </div>
            <p style=\"padding-bottom: 20px; border-bottom: 1px solid rgba(164, 170, 172, 0.28);\">
                <a href=\"http://supsystic.com/plugins/photo-gallery/\" class=\"button button-primary button-hero\">
                    <i class=\"fa fa-info-circle\"></i>
                    All news
                </a>
            </p>

            <div class=\"overview-contact-form\">
                <h3>Contact form</h3>
                ";
        // line 110
        echo "                ";
        $context["form"] = $this->env->loadTemplate("@core/form.twig");
        // line 111
        echo "
                ";
        // line 112
        echo $context["form"]->getopen("post", $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "overview", 1 => "sendMail"), "method"), array("id" => "form-settings", "style" => "max-width: 428px;", "_wpnonce" => (isset($context["_wpnonce"]) ? $context["_wpnonce"] : null)));
        echo "

                <table class=\"contact-form-table\" style=\"width: 100%;\">
                    <thead>

                    ";
        // line 117
        echo $context["form"]->getrow((call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Name")) . " *"), $context["form"]->gettext("name", $this->getAttribute((isset($context["contactForm"]) ? $context["contactForm"] : null), "name"), array("required" => "")));
        // line 118
        echo "

                    ";
        // line 120
        echo $context["form"]->getrow((call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Email")) . " *"), $context["form"]->gettext("email", $this->getAttribute((isset($context["contactForm"]) ? $context["contactForm"] : null), "email"), array("required" => "")));
        // line 121
        echo "

                    ";
        // line 123
        echo $context["form"]->getrow((call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Website")) . " *"), $context["form"]->gettext("website", $this->getAttribute((isset($context["contactForm"]) ? $context["contactForm"] : null), "website"), array("required" => "")));
        // line 124
        echo "

                    ";
        // line 126
        echo $context["form"]->getrow((call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Subject")) . " *"), $context["form"]->gettext("subject", "", array("required" => "")));
        // line 127
        echo "

                    <tr>
                        <th scope=\"row\">
                            <label for=\"select-question\">";
        // line 131
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Topic")), "html", null, true);
        echo "</label>
                        </th>
                        <td>
                            <select id=\"select-question\" name=\"question\">
                                <option value=\"plugin_options\">
                                    ";
        // line 136
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Plugin options")), "html", null, true);
        echo "
                                </option>
                                <option value=\"bug\">
                                    ";
        // line 139
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Report a bug")), "html", null, true);
        echo "
                                </option>
                                <option value=\"functionallity\">
                                    ";
        // line 142
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Require a new functionallity")), "html", null, true);
        echo "
                                </option>
                                <option value=\"other\">
                                    ";
        // line 145
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Other")), "html", null, true);
        echo "
                                </option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th scope=\"row\" style=\"vertical-align: top;\">
                            <label for=\"mail-text\">";
        // line 153
        echo twig_escape_filter($this->env, (call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Message")) . " *"), "html", null, true);
        echo "</label>
                        </th>
                        <td>
                            <textarea id=\"mail-text\" name=\"message\" cols=\"50\" rows=\"3\" placeholder=\"";
        // line 156
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hello Supsystic Team!")), "html", null, true);
        echo "\" required=\"\"></textarea>
                        </td>
                    </tr>

                    </thead>
                </table>

                <button id=\"send-mail\" type=\"submit\" class=\"button button-primary button-hero\">
                    <i class=\"fa fa-upload\"></i>
                    Send email
                </button>

                <div class=\"required-notification\" style=\"color: red; float: left;\" hidden>Fields with * are required to fill</div>
                ";
        // line 169
        echo $context["form"]->getclose();
        echo "
            </div>
        </div>
        <div id=\"contact-form-dialog\" hidden>
            <div class=\"on-error\" style=\"display:none\">
                <p>";
        // line 174
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Some errors occurred while sending mail please send your message trough this contact form:")), "html", null, true);
        echo "</p>
                <p><a href=\"http://supsystic.com/plugins/photo-gallery/#contact\" target=\"_blank\">http://supsystic.com/plugins/photo-gallery/#contact</a></p>
            </div>
            <div class=\"message\"></div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@overview/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 174,  277 => 169,  261 => 156,  255 => 153,  244 => 145,  238 => 142,  232 => 139,  226 => 136,  218 => 131,  212 => 127,  210 => 126,  206 => 124,  204 => 123,  200 => 121,  198 => 120,  194 => 118,  192 => 117,  184 => 112,  181 => 111,  178 => 110,  164 => 98,  156 => 92,  147 => 89,  143 => 88,  140 => 87,  136 => 86,  71 => 24,  66 => 22,  60 => 20,  56 => 14,  53 => 13,  43 => 8,  36 => 6,  32 => 4,  29 => 3,);
    }
}
