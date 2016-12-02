<?php

/* @galleries/shortcode/gallery.twig */
class __TwigTemplate_28d79f3218db1e8c8a40eb3662c355c9a9f9715c7f19d3c983b2b8bb0a400ad2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'gallery_before' => array($this, 'block_gallery_before'),
            'gallery_attributes' => array($this, 'block_gallery_attributes'),
            'photos_before' => array($this, 'block_photos_before'),
            'photos_attributes' => array($this, 'block_photos_attributes'),
            'photos' => array($this, 'block_photos'),
            'photos_after' => array($this, 'block_photos_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["style"] = $this->env->loadTemplate("@galleries/shortcode/style.twig");
        // line 2
        echo "
";
        // line 3
        if ((array_key_exists("gallery", $context) && (!twig_test_empty((isset($context["gallery"]) ? $context["gallery"] : null))))) {
            // line 4
            echo "\t";
            $this->displayBlock('gallery_before', $context, $blocks);
            // line 14
            echo "
\t<section
\t\t";
            // line 16
            $this->displayBlock('gallery_attributes', $context, $blocks);
            // line 182
            echo ">

\t\t";
            // line 184
            if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "preload"), "enabled") == "true") || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "preload"), "enabled") == null))) {
                // line 185
                echo "\t\t\t";
                if (((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "preload"), "icon_name") == "default") || ($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") != true)) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "preload"), "enabled") == null))) {
                    // line 186
                    echo "\t\t\t\t<div class=\"gallery-loading\">
\t\t\t\t\t<div class=\"blocks\">
\t\t\t\t\t\t<div class=\"block\"></div>
\t\t\t\t\t\t<div class=\"block\"></div>
\t\t\t\t\t\t<div class=\"block\"></div>
\t\t\t\t\t\t<div class=\"block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
                } else {
                    // line 195
                    echo "\t\t\t\t<div class=\"gallery-loading\">
\t\t\t\t\t<div class=\"la-";
                    // line 196
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "preload"), "icon_name"), "html", null, true);
                    echo "\" style=\"color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "preload"), "background"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t";
                    // line 197
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "preload"), "icon_items")));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 198
                        echo "\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 200
                    echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
                }
                // line 203
                echo "\t\t";
            }
            // line 204
            echo "
\t\t";
            // line 205
            $this->displayBlock('photos_before', $context, $blocks);
            // line 207
            echo "
\t\t";
            // line 208
            if ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing"), "enabled")) {
                // line 209
                echo "            <div id=\"social-share-html\" style=\"display:none;\">
                ";
                // line 210
                echo $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing"), "html");
                echo "
                ";
                // line 212
                echo "            </div>
        ";
            }
            // line 214
            echo "
        <div id=\"gallery-sharing-top\"></div>
\t\t<section
\t\t\t";
            // line 217
            $this->displayBlock('photos_attributes', $context, $blocks);
            // line 220
            echo ">

\t\t\t";
            // line 222
            $this->displayBlock('photos', $context, $blocks);
            // line 229
            echo "
\t\t\t<div class=\"grid-gallery-clearfix\"></div>
\t\t</section>
        <div id=\"gallery-sharing-bottom\"></div>

\t\t<div class=\"grid-gallery-clearfix\"></div>

\t\t";
            // line 236
            $this->displayBlock('photos_after', $context, $blocks);
            // line 238
            echo "\t</section>

\t<style>
\t\t#cboxLoadedContent iframe { margin: 0; padding: 0;}
\t</style>
\t
\t<!-- Gallery by Supsystic plugin ";
            // line 244
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "getConfig", array(), "method"), "get", array(0 => "plugin_version"), "method"), "html", null, true);
            echo "  ";
            if (($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == true)) {
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "getConfig", array(), "method"), "get", array(0 => "pro_plugin_version"), "method"), "html", null, true);
            }
            echo " -->
";
        }
    }

    // line 4
    public function block_gallery_before($context, array $blocks = array())
    {
        // line 5
        echo "\t\t";
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "true"))) {
            // line 6
            echo "\t\t\t<style>
\t\t\t\t #grid-gallery-";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
            echo " .";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "effect"), "html", null, true);
            echo " .hi-icon { color: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "color"), "html", null, true);
            echo " !important; background: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "background"), "html", null, true);
            echo " !important; }
\t\t\t\t #grid-gallery-";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
            echo " .";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "effect"), "html", null, true);
            echo " .hi-icon:hover { color: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "hover_color"), "html", null, true);
            echo " !important; background: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "background_hover"), "html", null, true);
            echo " !important; }
\t\t\t\t #grid-gallery-";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
            echo " .hi-icon { width: ";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "size") * 2), "html", null, true);
            echo "px !important; height: ";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "size") * 2), "html", null, true);
            echo "px !important; }
\t\t\t\t #grid-gallery-";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
            echo " .hi-icon:before { font-size: ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "size"), 16)) : (16)), "html", null, true);
            echo "px !important; line-height: ";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "size") * 2), "html", null, true);
            echo "px !important; }
\t\t\t</style>
\t\t";
        }
        // line 13
        echo "\t";
    }

    // line 16
    public function block_gallery_attributes($context, array $blocks = array())
    {
        // line 17
        echo "\t\t\tid=\"grid-gallery-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
        echo "\"
\t\t\tdata-title=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "title"), "html", null, true);
        echo "\"
\t\t\tdata-grid-type=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid"), "html", null, true);
        echo "\"
\t\t\tdata-offset=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "distance"), "html", null, true);
        echo "\"
\t\t\tdata-area-position=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "position"), "html", null, true);
        echo "\"
\t\t\t";
        // line 22
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == "2")) {
            // line 23
            echo "\t\t\tdata-width=\"auto\"
\t\t\t\t";
        } else {
            // line 25
            echo "\t\t\t\t\tdata-width=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width"), "html", null, true);
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width_unit") == 1)) {
                echo "%";
            }
            echo "\"
\t\t\t";
        }
        // line 27
        echo "\t\t\tdata-icons=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled"), "html", null, true);
        echo "\"
\t\t\tdata-preloader = \"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "preload"), "enabled"), "html", null, true);
        echo "\"
\t\t\tdata-width=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width"), "html", null, true);
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width_unit") == 1)) {
            echo "%";
        }
        echo "\"
\t\t\tdata-height=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height"), "html", null, true);
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height_unit") == 1)) {
            echo "%";
        }
        echo "\"
\t\t\tdata-padding=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "padding"), "html", null, true);
        echo "\"
\t\t\tdata-quicksand = \"";
        // line 32
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "quicksand"), "enabled") == "1")) {
            echo "enabled";
        } else {
            echo "disabled";
        }
        echo "\"
\t\t\tdata-quicksand-duration = \"";
        // line 33
        if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "quicksand"), "duration")))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "quicksand"), "duration"), "html", null, true);
        } else {
            echo "none";
        }
        echo "\"
\t\t\t\t";
        // line 34
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "enabled", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "enabled") == "false"))) {
            // line 35
            echo "\t\t\t\t\tdata-popup-type = \"disable\"
\t\t\t\t";
        } else {
            // line 37
            echo "\t\t\t\t\tdata-popup-theme = ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "theme"), "html", null, true);
            echo "
\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t";
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type") == "0") && ((isset($context["mobile"]) ? $context["mobile"] : null) != "true"))) {
            // line 40
            echo "\t\t\t\t\tdata-popup-type =\"colorbox\"
\t\t\t\t\tdata-popup-fadeOut = \"";
            // line 41
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "fadeOut", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "fadeOut"), 300)) : (300)), "html", null, true);
            echo "\"
\t\t\t\t";
        }
        // line 43
        echo "\t\t\t\t";
        if (((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type") == "1") && ((isset($context["mobile"]) ? $context["mobile"] : null) != "true")) && ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "enabled"), "true")) : ("true")) == "true"))) {
            // line 44
            echo "\t\t\t\t\tdata-popup-type = \"pretty-photo\"
\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t";
        if (((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type") == "2") && ((isset($context["mobile"]) ? $context["mobile"] : null) != "true")) && ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "enabled"), "true")) : ("true")) == "true"))) {
            // line 47
            echo "\t\t\t\t\tdata-popup-type = \"photobox\"
\t\t\t\t";
        }
        // line 49
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == "3")) {
            // line 50
            echo "\t\t\t\t\tdata-columns-number = ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general"), "columns"), "number"), "html", null, true);
            echo "
\t\t\t\t";
        }
        // line 52
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "captions") == "on")) {
            // line 53
            echo "\t\t\t\t\tdata-popup-captions = 'hide'
\t\t\t\t";
        }
        // line 55
        echo "
\t\t\t\tdata-popup-image-text = \"";
        // line 56
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "imageText", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "imageText"), "title")) : ("title")), "html", null, true);
        echo "\"

\t\t\t\t";
        // line 58
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "popupwidth") == "")) {
            echo " 
\t\t\t\t\tdata-popup-widthsize = \"auto\" 
\t\t\t\t";
        } else {
            // line 60
            echo " 
\t\t\t\t\tdata-popup-widthsize = \"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "popupwidth"), "html", null, true);
            echo "\" 
\t\t\t\t";
        }
        // line 63
        echo "
\t\t\t\t";
        // line 64
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "popupheight") == "")) {
            echo " 
\t\t\t\t\tdata-popup-heightsize = \"auto\" 
\t\t\t\t";
        } else {
            // line 66
            echo " 
\t\t\t\t\tdata-popup-heightsize = \"";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "popupheight"), "html", null, true);
            echo "\" 
\t\t\t\t";
        }
        // line 69
        echo "
\t\t\t";
        // line 70
        $context["popup_i18n_words"] = array("close" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("close")), "next" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("next")), "previous" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("previous")), "start_slideshow" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("start slideshow")), "stop_slideshow" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("stop slideshow")), "image" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("image")), "of" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("of")));
        // line 71
        echo "\t\t\tdata-popup-i18n-words = \"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["popup_i18n_words"]) ? $context["popup_i18n_words"] : null)), "html", null, true);
        echo "\"

            data-popup-slideshow = \"";
        // line 73
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshow", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshow"), "false")) : ("false")), "html", null, true);
        echo "\"
\t\t\tdata-popup-slideshow-speed = \"";
        // line 74
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshowSpeed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshowSpeed"), 2500)) : (2500)), "html", null, true);
        echo "\"
\t\t\tdata-popup-hoverstop = \"";
        // line 75
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "popupHoverStop", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "popupHoverStop"), "false")) : ("false")), "html", null, true);
        echo "\"
\t\t\tdata-popup-slideshow-auto = \"";
        // line 76
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshowAuto", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshowAuto"), "false")) : ("false")), "html", null, true);
        echo "\"
\t\t\tdata-popup-background = \"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "background"), "html", null, true);
        echo "\"
\t\t\tdata-popup-transparency = \"";
        // line 78
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "transparency"), 30)) : (30)), "html", null, true);
        echo "\"
\t\t\tdata-fullscreen=\"";
        // line 79
        echo (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "fullscreen")) ? ("true") : ("false"));
        echo "\"
\t\t\tdata-hide-tooltip=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "tooltip"), "html", null, true);
        echo "\"
\t\t\tdata-caption-font-family=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "font_family"), "html", null, true);
        echo "\"
\t\t\tdata-caption-text-size=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size"), "html", null, true);
        echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size_unit"), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
        echo "\"
\t\t\tdata-caption-mobile=\"";
        // line 83
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "isMobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "isMobile"), "false")) : ("false")), "html", null, true);
        echo "\"
\t\t\t";
        // line 84
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect") == "polaroid")) {
            // line 85
            echo "\t\t\t\tdata-polaroid-animation=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation"), "true")) : ("true")), "html", null, true);
            echo "\"
\t\t\t\tdata-polaroid-scattering=\"";
            // line 86
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering"), "true")) : ("true")), "html", null, true);
            echo "\"
\t\t\t\tdata-polaroid-frame-width=\"";
            // line 87
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth"), 20)) : (20)), "html", null, true);
            echo "\"
\t\t\t";
        }
        // line 89
        echo "\t\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == "3")) {
            // line 90
            echo "\t\t\t\tdata-responsive-colums=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns"), "")) : (""))), "html", null, true);
            echo "\"
\t\t\t";
        }
        // line 92
        echo "\t\t\tdata-caption-font-family=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "font_family"), "html", null, true);
        echo "\"
\t\t\t";
        // line 93
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "horizontalScroll", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "horizontalScroll"), "enabled") == "true"))) {
            // line 94
            echo "\t\t\t\tdata-horizontal-scroll=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "horizontalScroll")), "html", null, true);
            echo "\"
\t\t\t";
        }
        // line 96
        echo "
            ";
        // line 97
        $context["imageSharingButPos"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing"), "imageSharing"), "buttonsPosition");
        // line 98
        echo "            ";
        $context["imageSharingWrapperClass"] = ((isset($context["imageSharingButPos"]) ? $context["imageSharingButPos"] : null) . " ");
        // line 99
        echo "            ";
        if ((((isset($context["imageSharingButPos"]) ? $context["imageSharingButPos"] : null) == "top") || ((isset($context["imageSharingButPos"]) ? $context["imageSharingButPos"] : null) == "bottom"))) {
            // line 100
            echo "                ";
            $context["imageSharingWrapperClass"] = ((isset($context["imageSharingWrapperClass"]) ? $context["imageSharingWrapperClass"] : null) . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing"), "imageSharing"), "buttonsAlignHorizontal"));
            // line 101
            echo "            ";
        } else {
            // line 102
            echo "                    ";
            $context["imageSharingWrapperClass"] = (((isset($context["imageSharingWrapperClass"]) ? $context["imageSharingWrapperClass"] : null) . "vertical ") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing"), "imageSharing"), "buttonsAlignVertical"));
            // line 104
            echo "            ";
        }
        // line 105
        echo "
            ";
        // line 116
        echo "
            ";
        // line 117
        $context["socialSharing"] = array("enabled" => $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing"), "enabled"), "gallerySharing" => array("enabled" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing"), "gallerySharing"), "enabled"), "position" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing"), "gallerySharing"), "buttonsPosition")), "imageSharing" => array("enabled" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing"), "imageSharing"), "enabled"), "wrapperClass" => $this->getAttribute($this, "getSocialSharingWrapperClass", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing"), "imageSharing"), "buttonsPosition"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing"), "imageSharing"), "buttonsAlignHorizontal"), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing"), "imageSharing"), "buttonsAlignVertical")), "method")), "popupSharing" => array("enabled" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing"), "popupImageSharing"), "enabled"), "wrapperClass" => $this->getAttribute($this, "getSocialSharingWrapperClass", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing"), "popupImageSharing"), "buttonsPosition"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing"), "popupImageSharing"), "buttonsAlignHorizontal"), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing"), "popupImageSharing"), "buttonsAlignVertical")), "method")));
        // line 142
        echo "\t\t\tdata-social-sharing = \"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["socialSharing"]) ? $context["socialSharing"] : null)), "html", null, true);
        echo "\"

\t\t\tclass=\"grid-gallery
\t\t\t\t";
        // line 145
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == "1")) {
            // line 146
            echo "\t\t\t\t\tgrid-gallery-fluid-height
\t\t\t\t";
        } else {
            // line 148
            echo "\t\t\t\t\tgrid-gallery-fixed
\t\t\t\t";
        }
        // line 150
        echo "
\t\t\t\t";
        // line 151
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbs"), "enable") == "1")) {
            // line 152
            echo "\t\t\t\t\tgrid-gallery-thumbs
\t\t\t\t";
        }
        // line 154
        echo "
\t\t\t\t";
        // line 155
        if ((($this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "getConfig", array(), "method"), "get", array(0 => "optimizations"), "method") == 1) && ($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == false))) {
            // line 156
            echo "\t\t\t\t\t\toptimizations
\t\t\t\t";
        }
        // line 158
        echo "
\t\t\t\t";
        // line 159
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "openByLink") == "on")) {
            // line 160
            echo "\t\t\t\t    hidden-item
                ";
        }
        // line 162
        echo "
\t\t\t\t";
        // line 163
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "displayFirstPhoto") == "on")) {
            // line 164
            echo "\t\t\t\t    one-photo
                ";
        }
        // line 166
        echo "                \"
\t\t\tstyle=\"
\t\t\t\twidth:";
        // line 168
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "width") . strtr($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "width_unit"), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";
\t\t\t\theight:";
        // line 169
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array(), "any", false, true), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array(), "any", false, true), "height"), "auto")) : ("auto")), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 170
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "height") != "auto") && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "height") != null))) {
            echo "px ";
        }
        echo ";
\t\t\t\t";
        // line 171
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "position") == "1") || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "position") == "left"))) {
            // line 172
            echo "\t\t\t\t\tfloat: left;
\t\t\t\t";
        }
        // line 174
        echo "\t\t\t\t";
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "position") == "2") || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "position") == "right"))) {
            // line 175
            echo "\t\t\t\t\tfloat:right;
\t\t\t\t";
        }
        // line 177
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "position") == "center")) {
            // line 178
            echo "\t\t\t\tmargin-left:auto;
\t\t\t\tmargin-right:auto;
\t\t\t\t";
        }
        // line 181
        echo "\t\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "fullscreen"), "enabled")) {
            echo "position: fixed; z-index: 9999999; top: 0; left: 0; background-color: white;";
        } else {
            echo "position:relative;";
        }
        echo "\"
\t\t";
    }

    // line 205
    public function block_photos_before($context, array $blocks = array())
    {
        // line 206
        echo "\t\t";
    }

    // line 217
    public function block_photos_attributes($context, array $blocks = array())
    {
        // line 218
        echo "\t\t\t\tid=\"photos-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
        echo "\"
\t\t\t\tclass=\"grid-gallery-photos\"
\t\t\t";
    }

    // line 222
    public function block_photos($context, array $blocks = array())
    {
        // line 223
        echo "\t\t\t    ";
        $context["i"] = 0;
        // line 224
        echo "\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "photos"));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 225
            echo "\t\t\t\t\t";
            $this->env->loadTemplate("@galleries/shortcode/helpers.twig")->display(array("gallery" => (isset($context["gallery"]) ? $context["gallery"] : null), "photo" => (isset($context["photo"]) ? $context["photo"] : null), "settings" => (isset($context["settings"]) ? $context["settings"] : null), "index" => (isset($context["i"]) ? $context["i"] : null)));
            // line 226
            echo "\t\t\t\t    ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 227
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        echo "\t\t\t";
    }

    // line 236
    public function block_photos_after($context, array $blocks = array())
    {
        // line 237
        echo "\t\t";
    }

    // line 106
    public function getgetSocialSharingWrapperClass($_position = null, $_horizontalAlign = null, $_verticalAlign = null)
    {
        $context = $this->env->mergeGlobals(array(
            "position" => $_position,
            "horizontalAlign" => $_horizontalAlign,
            "verticalAlign" => $_verticalAlign,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 107
            echo "                ";
            $context["class"] = ((isset($context["position"]) ? $context["position"] : null) . " ");
            // line 108
            echo "                ";
            if ((((isset($context["position"]) ? $context["position"] : null) == "top") || ((isset($context["position"]) ? $context["position"] : null) == "bottom"))) {
                // line 109
                echo "                    ";
                $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . (isset($context["horizontalAlign"]) ? $context["horizontalAlign"] : null));
                // line 110
                echo "                ";
            } else {
                // line 111
                echo "                        ";
                $context["class"] = (((isset($context["class"]) ? $context["class"] : null) . "vertical ") . (isset($context["verticalAlign"]) ? $context["verticalAlign"] : null));
                // line 113
                echo "                ";
            }
            // line 114
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "
            ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@galleries/shortcode/gallery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  690 => 114,  687 => 113,  684 => 111,  681 => 110,  678 => 109,  675 => 108,  672 => 107,  659 => 106,  655 => 237,  652 => 236,  648 => 228,  642 => 227,  639 => 226,  636 => 225,  631 => 224,  628 => 223,  625 => 222,  617 => 218,  614 => 217,  610 => 206,  607 => 205,  596 => 181,  591 => 178,  588 => 177,  584 => 175,  581 => 174,  577 => 172,  575 => 171,  569 => 170,  565 => 169,  561 => 168,  557 => 166,  553 => 164,  551 => 163,  548 => 162,  544 => 160,  542 => 159,  539 => 158,  535 => 156,  533 => 155,  530 => 154,  526 => 152,  524 => 151,  521 => 150,  517 => 148,  513 => 146,  511 => 145,  504 => 142,  502 => 117,  499 => 116,  496 => 105,  493 => 104,  490 => 102,  487 => 101,  484 => 100,  481 => 99,  478 => 98,  476 => 97,  473 => 96,  467 => 94,  465 => 93,  460 => 92,  454 => 90,  451 => 89,  446 => 87,  442 => 86,  437 => 85,  435 => 84,  431 => 83,  426 => 82,  422 => 81,  418 => 80,  414 => 79,  410 => 78,  406 => 77,  402 => 76,  398 => 75,  394 => 74,  390 => 73,  384 => 71,  382 => 70,  379 => 69,  374 => 67,  371 => 66,  365 => 64,  362 => 63,  357 => 61,  354 => 60,  348 => 58,  343 => 56,  340 => 55,  336 => 53,  333 => 52,  327 => 50,  324 => 49,  320 => 47,  317 => 46,  313 => 44,  310 => 43,  305 => 41,  302 => 40,  299 => 39,  293 => 37,  289 => 35,  287 => 34,  279 => 33,  271 => 32,  267 => 31,  260 => 30,  253 => 29,  249 => 28,  244 => 27,  235 => 25,  231 => 23,  229 => 22,  225 => 21,  221 => 20,  217 => 19,  213 => 18,  208 => 17,  205 => 16,  201 => 13,  191 => 10,  183 => 9,  173 => 8,  163 => 7,  160 => 6,  157 => 5,  154 => 4,  142 => 244,  134 => 238,  132 => 236,  123 => 229,  121 => 222,  117 => 220,  115 => 217,  110 => 214,  106 => 212,  102 => 210,  99 => 209,  97 => 208,  94 => 207,  92 => 205,  89 => 204,  86 => 203,  81 => 200,  74 => 198,  70 => 197,  64 => 196,  61 => 195,  50 => 186,  47 => 185,  45 => 184,  41 => 182,  39 => 16,  35 => 14,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }
}
