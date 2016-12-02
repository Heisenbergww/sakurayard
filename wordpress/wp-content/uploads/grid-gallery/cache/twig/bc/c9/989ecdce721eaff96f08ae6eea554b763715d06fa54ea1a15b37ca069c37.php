<?php

/* @core/form.twig */
class __TwigTemplate_bcc9989ecdce721eaff96f08ae6eea554b763715d06fa54ea1a15b37ca069c37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        echo "
";
        // line 9
        echo "
";
        // line 20
        echo "
";
        // line 51
        echo "
";
        // line 74
        echo "
";
        // line 86
        echo "
";
        // line 92
        echo "
";
        // line 98
        echo "
";
        // line 108
        echo "
";
        // line 114
        echo "
";
        // line 120
        echo "
";
        // line 126
        echo "
";
        // line 132
        echo "
";
        // line 138
        echo "
";
        // line 148
        echo "
";
        // line 156
        echo "
";
        // line 164
        echo "
";
        // line 170
        echo "
";
        // line 174
        echo "
";
    }

    // line 1
    public function getopen($_method = null, $_action = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "method" => $_method,
            "action" => $_action,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <form method=\"";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : null)), "html", null, true);
            echo "\" ";
            if ((!twig_test_empty((isset($context["action"]) ? $context["action"] : null)))) {
                echo "action=\"";
                echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
                echo "\"";
            }
            // line 3
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 6
    public function getclose()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 7
            echo "    </form>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 10
    public function getshow_tooltip($_id = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $_id,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "    ";
            // line 12
            echo "    ";
            $context["title"] = $this->getAttribute((isset($context["tooltips"]) ? $context["tooltips"] : null), (isset($context["id"]) ? $context["id"] : null), array(), "array");
            // line 13
            echo "
    ";
            // line 14
            if ((!twig_test_empty((isset($context["title"]) ? $context["title"] : null)))) {
                // line 15
                echo "        <i class=\"fa fa-";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["tooltips_icon"]) ? $context["tooltips_icon"] : null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tooltips_icon"]) ? $context["tooltips_icon"] : null), "icon"), "question")) : ("question")), "html", null, true);
                echo " supsystic-tooltip\"
           title=\"";
                // line 16
                echo (isset($context["title"]) ? $context["title"] : null);
                echo "\"
           style=\"";
                // line 17
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tooltips_icon"]) ? $context["tooltips_icon"] : null), "style"));
                foreach ($context['_seq'] as $context["property"] => $context["value"]) {
                    echo twig_escape_filter($this->env, trim((isset($context["property"]) ? $context["property"] : null)), "html", null, true);
                    echo ":";
                    echo twig_escape_filter($this->env, trim((isset($context["value"]) ? $context["value"] : null)), "html", null, true);
                    echo ";";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['property'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\"></i>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 21
    public function getrow($_label = null, $_element = null, $_id = null, $_titleRow = null, $_row_id = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $_label,
            "element" => $_element,
            "id" => $_id,
            "titleRow" => $_titleRow,
            "row_id" => $_row_id,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 22
            echo "    ";
            $context["form"] = $this;
            // line 23
            echo "    
    ";
            // line 24
            if ((!twig_test_empty((isset($context["row_id"]) ? $context["row_id"] : null)))) {
                // line 25
                echo "    <tr id=\"";
                echo twig_escape_filter($this->env, (isset($context["row_id"]) ? $context["row_id"] : null), "html", null, true);
                echo "\">
    ";
            } else {
                // line 27
                echo "    <tr>
    ";
            }
            // line 29
            echo "        <th scope=\"row\">
            ";
            // line 30
            if ((!twig_test_empty((isset($context["titleRow"]) ? $context["titleRow"] : null)))) {
                // line 31
                echo "                <h3 style=\"margin: 0 !important;\">
                    ";
                // line 32
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "
                    ";
                // line 33
                echo $context["form"]->getshow_tooltip((isset($context["id"]) ? $context["id"] : null));
                echo "
                </h3>
            ";
            } else {
                // line 36
                echo "                <label ";
                if ((!twig_test_empty((isset($context["id"]) ? $context["id"] : null)))) {
                    echo "id=\"label-";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\" for=\"";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\"";
                }
                echo ">
                    ";
                // line 37
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "
                    ";
                // line 38
                echo $context["form"]->getshow_tooltip((isset($context["id"]) ? $context["id"] : null));
                echo "
                </label>
            ";
            }
            // line 41
            echo "        </th>
        ";
            // line 42
            if ((!twig_test_empty((isset($context["id"]) ? $context["id"] : null)))) {
                // line 43
                echo "        <td id=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\">
        ";
            } else {
                // line 45
                echo "        <td>
        ";
            }
            // line 47
            echo "            ";
            echo (isset($context["element"]) ? $context["element"] : null);
            echo "
        </td>
    </tr>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 52
    public function getrowpro($_label = null, $_link = null, $_id = null, $_element = null, $_titleRow = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $_label,
            "link" => $_link,
            "id" => $_id,
            "element" => $_element,
            "titleRow" => $_titleRow,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 53
            echo "    ";
            $context["form"] = $this;
            // line 54
            echo "    
    <tr>
        <th scope=\"row\">
            ";
            // line 57
            if ((!twig_test_empty((isset($context["titleRow"]) ? $context["titleRow"] : null)))) {
                // line 58
                echo "                <h3 style=\"margin: 0 !important;\">
                    ";
                // line 59
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "
                    ";
                // line 60
                echo $context["form"]->getshow_tooltip((isset($context["id"]) ? $context["id"] : null));
                echo "
                </h3>
            ";
            } else {
                // line 63
                echo "                <label ";
                if ((!twig_test_empty((isset($context["id"]) ? $context["id"] : null)))) {
                    echo "id=\"label-";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\" for=\"";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\"";
                }
                echo ">
                    ";
                // line 64
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "
                    ";
                // line 65
                echo $context["form"]->getshow_tooltip((isset($context["id"]) ? $context["id"] : null));
                echo "
                </label>
            ";
            }
            // line 68
            echo "            <br>
            <label><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array((isset($context["link"]) ? $context["link"] : null))), "html", null, true);
            echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
        </th>
        <td>";
            // line 71
            echo (isset($context["element"]) ? $context["element"] : null);
            echo "</td>
    </tr>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 75
    public function getinput($_type = "text", $_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $_type,
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 76
            echo "    <input type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"
    ";
            // line 77
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attribute"] => $context["val"]) {
                // line 78
                echo "        ";
                if (twig_test_iterable((isset($context["val"]) ? $context["val"] : null))) {
                    // line 79
                    echo "            ";
                    echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                    echo "=\"";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["val"]) ? $context["val"] : null));
                    foreach ($context['_seq'] as $context["attr"] => $context["param"]) {
                        echo twig_escape_filter($this->env, (isset($context["attr"]) ? $context["attr"] : null), "html", null, true);
                        echo ":";
                        echo twig_escape_filter($this->env, (isset($context["param"]) ? $context["param"] : null), "html", null, true);
                        echo ";";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attr'], $context['param'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "\"
        ";
                } else {
                    // line 81
                    echo "            ";
                    echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
                    echo "\"
        ";
                }
                // line 83
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "    />
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 87
    public function gettext($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 88
            echo "    ";
            $context["form"] = $this;
            // line 89
            echo "
    ";
            // line 90
            echo $context["form"]->getinput("text", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 93
    public function getpassword($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 94
            echo "    ";
            $context["form"] = $this;
            // line 95
            echo "
    ";
            // line 96
            echo $context["form"]->getinput("password", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 99
    public function getbutton($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 100
            echo "    ";
            $context["form"] = $this;
            // line 101
            echo "
    ";
            // line 102
            if ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array(), "any", true, true)) {
                // line 103
                echo "        ";
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : null), array("class" => ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class") . " button button-primary")));
                // line 104
                echo "    ";
            }
            // line 105
            echo "
    ";
            // line 106
            echo $context["form"]->getinput("button", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 109
    public function getcheckbox($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 110
            echo "    ";
            $context["form"] = $this;
            // line 111
            echo "
    ";
            // line 112
            echo $context["form"]->getinput("checkbox", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 115
    public function getfile($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 116
            echo "    ";
            $context["form"] = $this;
            // line 117
            echo "
    ";
            // line 118
            echo $context["form"]->getinput("file", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 121
    public function gethidden($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 122
            echo "    ";
            $context["form"] = $this;
            // line 123
            echo "
    ";
            // line 124
            echo $context["form"]->getinput("hidden", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 127
    public function getradio($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 128
            echo "    ";
            $context["form"] = $this;
            // line 129
            echo "
    ";
            // line 130
            echo $context["form"]->getinput("radio", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 133
    public function getcolor($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 134
            echo "    ";
            $context["form"] = $this;
            // line 135
            echo "
    ";
            // line 136
            echo $context["form"]->getinput("color", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 139
    public function getsubmit($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 140
            echo "    ";
            $context["form"] = $this;
            // line 141
            echo "
    ";
            // line 142
            if ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array(), "any", true, true)) {
                // line 143
                echo "        ";
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : null), array("class" => ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class") . " button button-primary")));
                // line 144
                echo "    ";
            }
            // line 145
            echo "
    ";
            // line 146
            echo $context["form"]->getinput("submit", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 149
    public function getselect($_name = null, $_options = null, $_selected = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "options" => $_options,
            "selected" => $_selected,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 150
            echo "    <select name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 151
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["value"] => $context["text"]) {
                // line 152
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" name = \"";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["text"]) ? $context["text"] : null)), "html", null, true);
                echo "\" ";
                if (((isset($context["selected"]) ? $context["selected"] : null) == (isset($context["value"]) ? $context["value"] : null))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
                echo "</option>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "    </select>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 157
    public function getselectv($_name = null, $_options = null, $_selected = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "options" => $_options,
            "selected" => $_selected,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 158
            echo "    <select name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 159
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
                // line 160
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
                echo "\" name = \"";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["text"]) ? $context["text"] : null)), "html", null, true);
                echo "\" ";
                if (((isset($context["selected"]) ? $context["selected"] : null) == (isset($context["text"]) ? $context["text"] : null))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
                echo "</option>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "    </select>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 165
    public function getspan($_name = null, $_text = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "text" => $_text,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 166
            echo "    <span name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
        ";
            // line 167
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["text"]) ? $context["text"] : null)), "html", null, true);
            echo "
    </span>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 171
    public function getselected($_actual = null, $_expected = null)
    {
        $context = $this->env->mergeGlobals(array(
            "actual" => $_actual,
            "expected" => $_expected,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 172
            echo "    ";
            if (((isset($context["actual"]) ? $context["actual"] : null) == (isset($context["expected"]) ? $context["expected"] : null))) {
                echo "selected=\"selected\"";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 175
    public function getlabel($_label = null, $_for = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $_label,
            "for" => $_for,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 176
            echo "    <label for=\"";
            echo twig_escape_filter($this->env, (isset($context["for"]) ? $context["for"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</label>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@core/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  977 => 176,  965 => 175,  951 => 172,  939 => 171,  925 => 167,  908 => 166,  895 => 165,  883 => 162,  866 => 160,  862 => 159,  845 => 158,  831 => 157,  819 => 154,  802 => 152,  798 => 151,  781 => 150,  767 => 149,  754 => 146,  751 => 145,  748 => 144,  745 => 143,  743 => 142,  740 => 141,  737 => 140,  724 => 139,  711 => 136,  708 => 135,  705 => 134,  692 => 133,  679 => 130,  676 => 129,  673 => 128,  660 => 127,  647 => 124,  644 => 123,  641 => 122,  628 => 121,  615 => 118,  612 => 117,  609 => 116,  596 => 115,  583 => 112,  580 => 111,  577 => 110,  564 => 109,  551 => 106,  548 => 105,  545 => 104,  542 => 103,  540 => 102,  537 => 101,  534 => 100,  521 => 99,  508 => 96,  505 => 95,  502 => 94,  489 => 93,  476 => 90,  473 => 89,  470 => 88,  457 => 87,  445 => 84,  439 => 83,  431 => 81,  413 => 79,  410 => 78,  406 => 77,  397 => 76,  383 => 75,  369 => 71,  364 => 69,  361 => 68,  355 => 65,  351 => 64,  340 => 63,  334 => 60,  330 => 59,  327 => 58,  325 => 57,  320 => 54,  317 => 53,  302 => 52,  286 => 47,  282 => 45,  276 => 43,  274 => 42,  271 => 41,  265 => 38,  250 => 36,  240 => 32,  237 => 31,  235 => 30,  228 => 27,  222 => 25,  220 => 24,  217 => 23,  175 => 17,  171 => 16,  166 => 15,  161 => 13,  158 => 12,  133 => 7,  124 => 6,  100 => 3,  91 => 2,  78 => 1,  70 => 170,  67 => 164,  64 => 156,  61 => 148,  58 => 138,  55 => 132,  52 => 126,  49 => 120,  46 => 114,  37 => 92,  31 => 74,  28 => 51,  22 => 9,  19 => 5,  224 => 140,  219 => 125,  214 => 22,  209 => 122,  202 => 13,  199 => 21,  189 => 141,  187 => 140,  180 => 136,  176 => 135,  165 => 126,  163 => 125,  160 => 124,  157 => 123,  155 => 122,  150 => 119,  145 => 10,  142 => 63,  137 => 55,  130 => 51,  125 => 49,  118 => 48,  116 => 47,  109 => 43,  104 => 41,  98 => 40,  90 => 35,  85 => 33,  79 => 32,  73 => 174,  68 => 27,  62 => 26,  51 => 21,  45 => 20,  40 => 98,  38 => 12,  34 => 86,  25 => 20,  285 => 174,  277 => 169,  261 => 37,  255 => 153,  244 => 33,  238 => 142,  232 => 29,  226 => 136,  218 => 131,  212 => 127,  210 => 126,  206 => 124,  204 => 123,  200 => 121,  198 => 120,  194 => 9,  192 => 117,  184 => 112,  181 => 111,  178 => 110,  164 => 14,  156 => 11,  147 => 110,  143 => 88,  140 => 57,  136 => 86,  71 => 24,  66 => 22,  60 => 20,  56 => 23,  53 => 13,  43 => 108,  36 => 6,  32 => 9,  29 => 8,);
    }
}
