<?php

/* @galleries/view.twig */
class __TwigTemplate_1f36e032456537a1f933d0b08c3bd67a0ef3546b9f3d8ca52d1eb90d5235a917 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("grid-gallery.twig");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'iconsEffects' => array($this, 'block_iconsEffects'),
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
        echo "    <nav id=\"supsystic-breadcrumbs\" class=\"supsystic-breadcrumbs\">
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery by Supsystic")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Galleries")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"))), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "title"), "html", null, true);
        echo "</a>
    </nav>

    <section class=\"supsystic-bar\" id=\"single-gallery-toolbar\">
        <ul class=\"supsystic-bar-controls\">
            ";
        // line 15
        echo "            ";
        // line 28
        echo "
            <li title=\"";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Upload new images")), "html", null, true);
        echo "\">
                <button class=\"button button-primary gallery import-to-gallery\">
                    <i class=\"fa fa-fw fa-upload\"></i>
                    ";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add Images")), "html", null, true);
        echo "
                </button>
            </li>

            <li>
                <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "settings", 2 => array("gallery_id" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"))), "method"), "html", null, true);
        echo "\"
                   class=\"button\">
                    <i class=\"fa fa-fw fa-cogs\"></i>
                    ";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Properties")), "html", null, true);
        echo "
                </a>
            </li>

            <li>
                <a target=\"_blank\"
                   href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "preview", 2 => array("gallery_id" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"))), "method"), "html", null, true);
        echo "\"
                   class=\"button\" data-button=\"preview\">
                    <i class=\"fa fa-fw fa-eye\"></i>
                    ";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preview")), "html", null, true);
        echo "
                </a>
            </li>

            <li class=\"separator\">|</li>

            ";
        // line 60
        echo "
            <li>
                <button class=\"button\" data-button=\"remove\" disabled>
                    <i class=\"fa fa-fw fa-trash-o\"></i>
                    ";
        // line 64
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Delete Image")), "html", null, true);
        echo "
                </button>
            </li>

            <li class=\"separator\">|</li>

            <li style=\"float: right\">
                <button class=\"button button-primary\" data-button=\"sortbtn\">
                    <i class=\"fa fa-fw fa-check\"></i>
                    Ok
                </button>
            </li>

            <li title=\"";
        // line 77
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sort To: ")), "html", null, true);
        echo "\" style=\"float: right;\">
                ";
        // line 78
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sort To: ")), "html", null, true);
        echo "
                <select name=\"sortto\" style=\"height: 34px;\">
                    <option value=\"asc\" ";
        // line 80
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort"), "sortto") == "asc")) {
            echo "selected";
        }
        echo ">Asc</option>
                    <option value=\"desc\" ";
        // line 81
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort"), "sortto") == "desc")) {
            echo "selected";
        }
        echo ">Desc</option>
                </select>
            </li>

            <li title=\"";
        // line 85
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sort By: ")), "html", null, true);
        echo "\" style=\"float: right;\">
                ";
        // line 86
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sort By: ")), "html", null, true);
        echo "
                <select name=\"sortby\" style=\"height: 34px;\">
                    <option value=\"postion\" ";
        // line 88
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort"), "sortby") == "position")) {
            echo "selected";
        }
        echo ">Position</option>
                    <option value=\"adate\" ";
        // line 89
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort"), "sortby") == "adate")) {
            echo "selected";
        }
        echo ">Add date</option>
                    <option value=\"date\" ";
        // line 90
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort"), "sortby") == "date")) {
            echo "selected";
        }
        echo ">Create date</option>
                    <option value=\"size\" ";
        // line 91
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort"), "sortby") == "size")) {
            echo "selected";
        }
        echo ">Size</option>
                    <option value=\"name\" ";
        // line 92
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort"), "sortby") == "name")) {
            echo "selected";
        }
        echo ">Name</option>
                    ";
        // line 93
        if (($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == true)) {
            echo "<option value=\"tags\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort"), "sortby") == "tags")) {
                echo "selected";
            }
            echo ">Tags</option>";
        }
        // line 94
        echo "                </select>
            </li>

            ";
        // line 114
        echo "        </ul>
    </section>


    <section class=\"supsystic-bar\" id=\"images-gallery-toolbar\" style=\"padding-right: 15px;\">
        <ul class=\"supsystic-bar-controls\">
        ";
        // line 120
        if (($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == true)) {
            // line 121
            echo "            <li>
                <select name=\"bulkactions\" style=\"height: 34px;\">
                    ";
            // line 123
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "tags")) > 0)) {
                // line 124
                echo "                        <option value=\"add\">Add Category</option>
                    ";
            }
            // line 126
            echo "                    <option value=\"newcat\">Create New Category</option>
                    ";
            // line 127
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "tags")) > 0)) {
                // line 128
                echo "                        <option value=\"delcat\">Delete Category</option>
                    ";
            }
            // line 130
            echo "                </select>
            </li>

            <li>
                ";
            // line 134
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "tags")) > 0)) {
                // line 135
                echo "                    <select name=\"catactions\" style=\"height: 34px;\">
                        ";
                // line 136
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "tags"));
                foreach ($context['_seq'] as $context["value"] => $context["title"]) {
                    // line 137
                    echo "                            <option value=\"";
                    echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                    echo "</option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['title'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 139
                echo "                        <option value=\"allcat\" style=\"display:none;\">All Categories</option>
                    </select>
                ";
            }
            // line 142
            echo "                <input type=\"text\" name=\"newTag\" ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "tags")) != 0)) {
                echo " style=\"display:none; height:34px; width: 150px;\" ";
            } else {
                echo " style=\"width: 150px; height:34px;\" ";
            }
            echo "value=\"\" placeholder=\"Category name...\">
            </li>

            <li>
                <button class=\"button button-primary\" data-button=\"allimagetags\">
                    <i class=\"fa fa-fw fa-check\"></i>
                    ";
            // line 148
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Apply")), "html", null, true);
            echo "
                </button>
            </li>

        ";
        }
        // line 153
        echo "            <li style=\"float:right\">
                <input id=\"find-by-caption\" type=\"text\" style=\"height:34px; width: 200px;\" placeholder=\"";
        // line 154
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Search")), "html", null, true);
        echo "\">
            </li>
        </ul>
    </section>


";
    }

    // line 162
    public function block_content($context, array $blocks = array())
    {
        // line 163
        echo "    ";
        $context["importTypes"] = $this->env->loadTemplate("@galleries/shortcode/import.twig");
        // line 164
        echo "
    ";
        // line 165
        if (((!array_key_exists("gallery", $context)) || (null === (isset($context["gallery"]) ? $context["gallery"] : null)))) {
            // line 166
            echo "        <p>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("The gallery is does not exists")), "html", null, true);
            echo "</p>
    ";
        } else {
            // line 168
            echo "        ";
            if (twig_test_empty($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "photos"))) {
                // line 169
                echo "            <h2 style=\"text-align: center; color: #bfbfbf; margin: 50px 0 25px 0;\">
                <span style=\"margin-bottom: 20px; display: block;\">
                    ";
                // line 171
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Currently this gallery has no images")), "html", null, true);
                echo "
                </span>
                ";
                // line 173
                echo $context["importTypes"]->getshow("1000", $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"));
                echo "
            </h2>
        ";
            } else {
                // line 176
                echo "            ";
                $context["view"] = $this->env->loadTemplate("@ui/type.twig");
                // line 177
                echo "            ";
                $context["entity"] = array("images" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "photos"));
                // line 178
                echo "            ";
                $context["sliderSettings"] = (isset($context["settings"]) ? $context["settings"] : null);
                // line 179
                echo "
            ";
                // line 180
                if (((isset($context["viewType"]) ? $context["viewType"] : null) == "block")) {
                    // line 181
                    echo "                ";
                    echo $context["view"]->getblock_view((isset($context["entity"]) ? $context["entity"] : null));
                    echo "
            ";
                }
                // line 183
                echo "
            ";
                // line 184
                if (((isset($context["viewType"]) ? $context["viewType"] : null) == "list")) {
                    // line 185
                    echo "                ";
                    echo $context["view"]->getlist_view((isset($context["entity"]) ? $context["entity"] : null), (isset($context["sliderSettings"]) ? $context["sliderSettings"] : null), $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"));
                    echo "
            ";
                }
                // line 187
                echo "        ";
            }
            // line 188
            echo "    ";
        }
        // line 189
        echo "
    <div id=\"importDialog\" title=\"";
        // line 190
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select source to import from")), "html", null, true);
        echo "\" style=\"display: none;\">
        ";
        // line 191
        echo $context["importTypes"]->getshow(400, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"));
        echo "
    </div>

    <div id=\"linkedImagesDialog\" title=\"";
        // line 194
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Linked Images")), "html", null, true);
        echo "\" style=\"display:none;\">
        <div class=\"linked-images-action-buttons\">
            <button class=\"button add\">";
        // line 196
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add images")), "html", null, true);
        echo "</button>
            <button class=\"button remove\">";
        // line 197
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Remove selected")), "html", null, true);
        echo "</button>
        </div>
        <div class=\"linked-attachments-list\">
            
        </div>
        <div class=\"loading-container\">
            <i class=\"fa fa-spinner fa-spin fa-2x\"></i>
        </div>
    </div>

    <div id=\"effectDialog\" title=\"";
        // line 207
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select overlay effect")), "html", null, true);
        echo "\" style=\"display:none;\">
        <div id=\"effectsPreview\" style=\"margin-top: 10px;\">
            ";
        // line 209
        $context["effects"] = array("none" => "None", "center" => "Middle", "quarter-appear" => "Appear", "quarter-slide-up" => "Quarter Slide Up", "quarter-slide-side" => "Quarter Slide Side", "quarter-fall-in" => "Quarter Fall in", "quarter-two-step" => "Quarter Two-step", "quarter-zoom" => "Quarter Caption Zoom", "cover-fade" => "Cover Fade", "cover-push-right" => "Cover Push Right", "revolving-door-left" => "Revolving Door Left", "revolving-door-right" => "Revolving Door Right", "revolving-door-top" => "Revolving Door Top", "revolving-door-bottom" => "Revolving Door Bottom", "cover-slide-top" => "Cover Slide Top", "offset" => "Caption Offset", "guillotine-reverse" => "Guillotine Reverse", "half-slide" => "Half Slide", "sqkwoosh" => "Sqkwoosh", "tunnel" => "Tunnel", "direction-aware" => "Direction Aware", "phophorus-rotate" => "Phophorus Rotate", "phophorus-offset" => "Phophorus Offset", "phophorus-scale" => "Phophorus Scale", "cube" => "Cube", "polaroid" => "Polaroid", "3d-cube" => "3D Cube");
        // line 238
        echo "            ";
        $context["iconsWithCaptionsEffects"] = array("icons" => "Default", "icons-scale" => "Scale", "icons-sodium-left" => "Sodium Left", "icons-sodium-top" => "Sodium Top", "icons-nitrogen-top" => "Nitrogen Top");
        // line 245
        echo "            ";
        ob_start();
        // line 246
        echo "                border-radius: ";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "radius") . strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "radius_unit"), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";
                ";
        // line 247
        if ((($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") && $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true)) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "true"))) {
            // line 248
            echo "                    ";
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "overlay_enabled") == "true")) {
                // line 249
                echo "                        background-color:";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_color", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_color"), "#3498db")) : ("#3498db")), "html", null, true);
                echo ";
                    ";
            }
            // line 251
            echo "                ";
        } else {
            // line 252
            echo "                    color:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "foreground"), "html", null, true);
            echo ";
                    background-color:";
            // line 253
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "background"), "html", null, true);
            echo ";
                    font-size:";
            // line 254
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size"), "html", null, true);
            echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size_unit"), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";
                    ";
            // line 255
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_align") != 3)) {
                // line 256
                echo "                        text-align:";
                echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_align"), array(0 => "left", 1 => "right", 2 => "center")), "html", null, true);
                echo ";
                    ";
            }
            // line 258
            echo "                    ";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect") == "none") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "enabled") == "false"))) {
                // line 259
                echo "                        ";
                // line 260
                echo "                        bottom:0;
                    ";
            }
            // line 262
            echo "                ";
        }
        // line 263
        echo "            ";
        $context["figcaptionStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 264
        echo "
            ";
        // line 265
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "settings"), "icons"), "enabled") == "false")) {
            // line 266
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["effects"]) ? $context["effects"] : null));
            foreach ($context['_seq'] as $context["type"] => $context["name"]) {
                // line 267
                echo "                    ";
                if (((isset($context["type"]) ? $context["type"] : null) == "direction-aware")) {
                    // line 268
                    echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                    echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                    echo "\">
                            <div class=\"box\">
                                <div class=\"box__right\">Right ? Left</div>
                                <div class=\"box__left\">Left ? Right</div>
                                <div class=\"box__top\">Top ? Bottom</div>
                                <div class=\"box__bottom\">Bottom ? Top</div>
                                <div class=\"box__center\">
                                </div>
                                <img data-src=\"holder.js/150x150?theme=industrial&text=";
                    // line 276
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                    echo "\" class=\"dialog-image\">
                            </div>
                            <div class=\"select-element\">
                                ";
                    // line 279
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                    echo "
                            </div>
                        </figure>
                    ";
                } elseif (((isset($context["type"]) ? $context["type"] : null) == "3d-cube")) {
                    // line 283
                    echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                    echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                    echo "\">
                            <div class=\"box-3d-cube-scene\" style=\"perspective: 300px;-webkit-perspective: 300px\">
                                <div class=\"box-3d-cube\"
                                     style=\"
                                         transform-origin:50% 50% -75px;
                                         -ms-transform-origin: 50% 50% -75px;
                                         -webkit-transform-origin: 50% 50% -75px;
                                         width:150px; height:150px
                                     \"
                                >
                                    <div class=\"face front\" style=\"width:150px; height:150px\">
                                        <img data-src=\"holder.js/150x150?theme=industrial&text=";
                    // line 294
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                    echo "\" class=\"dialog-image\">
                                    </div>
                                    <div style=\"";
                    // line 296
                    echo twig_escape_filter($this->env, trim((isset($context["figcaptionStyle"]) ? $context["figcaptionStyle"] : null)), "html", null, true);
                    echo "width:150px; height:150px\" class=\"face back\">
                                        <div class=\"grid-gallery-figcaption-wrap\">
                                            <span>";
                    // line 298
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                    echo "</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"select-element\">
                                ";
                    // line 304
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                    echo "
                            </div>
                        </figure>
                    ";
                } else {
                    // line 308
                    echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                    echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                    echo "\">
                            <img data-src=\"holder.js/150x150?theme=industrial&text=";
                    // line 309
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                    echo "\" class=\"dialog-image\">
                            <figcaption style=\"";
                    // line 310
                    echo twig_escape_filter($this->env, trim((isset($context["figcaptionStyle"]) ? $context["figcaptionStyle"] : null)), "html", null, true);
                    echo "\">
                                <div class=\"grid-gallery-figcaption-wrap\">
                                    <span>";
                    // line 312
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                    echo "</span>
                                </div>
                            </figcaption>
                            <div class=\"select-element\">
                                ";
                    // line 316
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                    echo "
                            </div>
                        </figure>
                    ";
                }
                // line 320
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 321
            echo "                <div class=\"grid-gallery-clearfix\" style=\"clear: both;\"></div>
            ";
        } else {
            // line 323
            echo "                <div class=\"captions-effect-with-icons\" data-confirm=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("This effect requires icons be enabled. Enable Icons?")), "html", null, true);
            echo "\">
                    <h3>Captions effects with icons</h3>
                    ";
            // line 325
            $this->displayBlock('iconsEffects', $context, $blocks);
            // line 349
            echo "                </div>
            ";
        }
        // line 351
        echo "        </div>
        <style>
            .hi-icon { 
                color: ";
        // line 354
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "color"), "html", null, true);
        echo " !important; 
                background: ";
        // line 355
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "background"), "html", null, true);
        echo " !important; 
            }
            .hi-icon:hover { 
                color: ";
        // line 358
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "hover_color"), "html", null, true);
        echo " !important; 
                background: ";
        // line 359
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "background_hover"), "html", null, true);
        echo " !important; 
            }
            .hi-icon { 
                width: ";
        // line 362
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "size") * 2), "html", null, true);
        echo "px !important; 
                height: ";
        // line 363
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "size") * 2), "html", null, true);
        echo "px !important; 
            }
            .hi-icon:before { 
                font-size: ";
        // line 366
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "size"), 16)) : (16)), "html", null, true);
        echo "px !important; 
                line-height: ";
        // line 367
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "size") * 2), "html", null, true);
        echo "px !important; 
            }
        </style>
    </div>
";
    }

    // line 325
    public function block_iconsEffects($context, array $blocks = array())
    {
        // line 326
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["iconsWithCaptionsEffects"]) ? $context["iconsWithCaptionsEffects"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 327
            echo "                            <figure class=\"grid-gallery-caption\" data-type=\"icons\" data-grid-gallery-type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\">
                                <img data-src=\"holder.js/150x150?theme=industrial&text=";
            // line 328
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" class=\"dialog-image\"/>
                                <figcaption style=\"";
            // line 329
            echo twig_escape_filter($this->env, trim((isset($context["figcaptionStyle"]) ? $context["figcaptionStyle"] : null)), "html", null, true);
            echo "\">
                                    <div class=\"hi-icon-wrap\" style=\"width: 48px; height: 48px; margin-top: 30%; position:relative;\">
                                        <a href=\"#\" class=\"hi-icon icon-link\" style=\"border:1px solid #ccc; border-radius:50%;margin:auto;position:absolute;left:0;right:0;top: 0;bottom: 0;\">
                                        </a>
                                    </div>
                                </figcaption>
                                <div class=\"caption-with-";
            // line 335
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\">
                                    <div style=\"display: table; height:100%; width:100%;\">
                                        <span style=\"padding: 10px;display:table-cell;font-size:";
            // line 337
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size"), "html", null, true);
            echo "
                                        vertical-align:";
            // line 338
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "position"), "html", null, true);
            echo ";\">
                                            Caption
                                        </span>
                                    </div>
                                </div>
                                <div class=\"select-element\">
                                    ";
            // line 344
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "
                                </div>
                            </figure>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 348
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "@galleries/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  710 => 348,  700 => 344,  691 => 338,  687 => 337,  682 => 335,  673 => 329,  669 => 328,  664 => 327,  659 => 326,  656 => 325,  647 => 367,  643 => 366,  637 => 363,  633 => 362,  627 => 359,  623 => 358,  617 => 355,  613 => 354,  608 => 351,  604 => 349,  602 => 325,  596 => 323,  592 => 321,  586 => 320,  579 => 316,  572 => 312,  567 => 310,  563 => 309,  558 => 308,  551 => 304,  542 => 298,  537 => 296,  532 => 294,  517 => 283,  510 => 279,  504 => 276,  492 => 268,  489 => 267,  484 => 266,  482 => 265,  479 => 264,  476 => 263,  473 => 262,  469 => 260,  467 => 259,  464 => 258,  458 => 256,  456 => 255,  451 => 254,  447 => 253,  442 => 252,  439 => 251,  433 => 249,  430 => 248,  428 => 247,  423 => 246,  420 => 245,  417 => 238,  415 => 209,  410 => 207,  397 => 197,  393 => 196,  388 => 194,  382 => 191,  378 => 190,  375 => 189,  372 => 188,  369 => 187,  363 => 185,  361 => 184,  358 => 183,  352 => 181,  350 => 180,  347 => 179,  344 => 178,  341 => 177,  338 => 176,  332 => 173,  327 => 171,  323 => 169,  320 => 168,  314 => 166,  312 => 165,  309 => 164,  306 => 163,  303 => 162,  292 => 154,  289 => 153,  281 => 148,  267 => 142,  262 => 139,  251 => 137,  247 => 136,  244 => 135,  242 => 134,  236 => 130,  232 => 128,  230 => 127,  227 => 126,  223 => 124,  221 => 123,  217 => 121,  215 => 120,  207 => 114,  202 => 94,  194 => 93,  188 => 92,  182 => 91,  176 => 90,  170 => 89,  164 => 88,  159 => 86,  155 => 85,  146 => 81,  140 => 80,  135 => 78,  131 => 77,  115 => 64,  109 => 60,  100 => 49,  94 => 46,  85 => 40,  79 => 37,  71 => 32,  65 => 29,  62 => 28,  60 => 15,  50 => 9,  43 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
