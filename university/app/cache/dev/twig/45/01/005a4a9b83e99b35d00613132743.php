<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_4501005a4a9b83e99b35d00613132743 extends Twig_Template
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
        // line 1
        if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
            echo "</a>
    ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 6
        echo "<div class=\"sf-toolbar-block\">
     <div class=\"sf-toolbar-icon\">";
        // line 7
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "")) : ("")), "html", null, true);
        echo "</div>
     <div class=\"sf-toolbar-info\">";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  356 => 328,  339 => 316,  295 => 275,  77 => 28,  65 => 24,  24 => 3,  19 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  337 => 103,  322 => 101,  314 => 99,  305 => 95,  294 => 90,  285 => 89,  268 => 85,  264 => 84,  252 => 80,  247 => 78,  214 => 69,  171 => 61,  169 => 60,  132 => 51,  128 => 49,  107 => 36,  93 => 28,  71 => 17,  183 => 70,  177 => 65,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  78 => 21,  209 => 82,  193 => 73,  149 => 51,  133 => 42,  103 => 37,  95 => 34,  86 => 24,  57 => 11,  48 => 8,  51 => 10,  34 => 5,  31 => 4,  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  745 => 476,  742 => 475,  723 => 473,  706 => 472,  702 => 470,  698 => 469,  694 => 468,  690 => 467,  686 => 466,  682 => 465,  678 => 464,  675 => 463,  673 => 462,  656 => 461,  645 => 460,  630 => 455,  625 => 453,  621 => 452,  618 => 451,  616 => 450,  602 => 449,  565 => 414,  547 => 411,  530 => 410,  527 => 409,  525 => 408,  520 => 406,  515 => 404,  244 => 136,  199 => 67,  196 => 92,  188 => 90,  182 => 66,  173 => 63,  68 => 30,  62 => 27,  28 => 3,  357 => 123,  344 => 318,  341 => 105,  332 => 116,  327 => 114,  324 => 113,  318 => 111,  306 => 107,  297 => 276,  291 => 102,  263 => 95,  258 => 81,  243 => 92,  231 => 83,  224 => 71,  212 => 78,  202 => 77,  190 => 76,  187 => 70,  174 => 65,  143 => 56,  136 => 71,  122 => 43,  117 => 39,  112 => 35,  104 => 32,  85 => 25,  75 => 23,  58 => 25,  44 => 10,  161 => 63,  158 => 80,  154 => 54,  151 => 57,  140 => 55,  125 => 44,  121 => 50,  118 => 49,  100 => 39,  87 => 41,  49 => 14,  46 => 7,  27 => 4,  91 => 37,  88 => 25,  63 => 18,  389 => 160,  386 => 159,  378 => 157,  371 => 156,  367 => 155,  363 => 126,  358 => 151,  353 => 121,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  321 => 112,  309 => 97,  307 => 128,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  288 => 101,  283 => 88,  281 => 114,  276 => 111,  274 => 97,  269 => 107,  265 => 96,  259 => 103,  255 => 93,  253 => 100,  235 => 74,  232 => 88,  227 => 86,  222 => 83,  210 => 77,  208 => 68,  189 => 71,  184 => 63,  175 => 65,  170 => 84,  166 => 54,  163 => 82,  155 => 47,  152 => 46,  144 => 53,  127 => 35,  109 => 47,  94 => 38,  82 => 22,  76 => 34,  61 => 13,  39 => 10,  36 => 7,  79 => 21,  72 => 18,  69 => 17,  54 => 10,  47 => 9,  42 => 7,  40 => 8,  37 => 10,  22 => 2,  164 => 59,  157 => 56,  145 => 46,  139 => 45,  131 => 42,  120 => 40,  115 => 39,  111 => 37,  108 => 37,  106 => 36,  101 => 32,  98 => 31,  92 => 29,  83 => 25,  80 => 24,  74 => 22,  66 => 20,  60 => 18,  55 => 16,  52 => 15,  50 => 14,  41 => 8,  32 => 6,  29 => 5,  462 => 202,  453 => 151,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  387 => 122,  380 => 158,  373 => 156,  361 => 152,  355 => 106,  351 => 120,  348 => 140,  342 => 317,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 110,  312 => 98,  303 => 106,  300 => 105,  298 => 91,  289 => 113,  286 => 112,  278 => 86,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 97,  246 => 32,  241 => 77,  233 => 87,  229 => 73,  226 => 84,  220 => 70,  216 => 79,  213 => 78,  207 => 75,  203 => 78,  200 => 72,  197 => 69,  194 => 68,  191 => 67,  185 => 74,  181 => 65,  178 => 66,  176 => 64,  172 => 64,  168 => 66,  165 => 64,  162 => 57,  156 => 58,  153 => 77,  150 => 55,  147 => 58,  141 => 51,  134 => 54,  130 => 41,  123 => 41,  119 => 42,  116 => 36,  113 => 48,  105 => 25,  102 => 43,  99 => 30,  96 => 39,  90 => 42,  84 => 35,  81 => 29,  73 => 27,  70 => 26,  67 => 15,  64 => 14,  59 => 16,  53 => 15,  45 => 8,  43 => 11,  38 => 6,  35 => 5,  33 => 6,  30 => 3,);
    }
}
