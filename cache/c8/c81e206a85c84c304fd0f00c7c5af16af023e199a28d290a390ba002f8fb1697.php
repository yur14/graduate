<?php

/* Main\index.twig */
class __TwigTemplate_7ed3d54126611ab8cebbf39bcfbaf58ed54fbae8a1677bade524cbd242e569d4 extends Twig_Template
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
        echo "<header>
    <h1>";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true);
        echo "</h1>
</header>
<div class=\"button\"><a class=\"button\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["thisHost"]) ? $context["thisHost"] : null), "html", null, true);
        echo "?/main/question\">Задать вопрос</a></div>
<section class=\"cd-faq\">
    <ul class=\"cd-faq-categories\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 8
            echo "            ";
            if (($this->getAttribute($context["category"], "id", array(), "array") == $this->getAttribute(twig_first($this->env, (isset($context["categories"]) ? $context["categories"] : null)), "id", array(), "array"))) {
                // line 9
                echo "                <li><a class=\"selected\" href=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array(), "array"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array(), "array"), "html", null, true);
                echo "</a></li>
            ";
            } else {
                // line 11
                echo "                <li><a href=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array(), "array"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array(), "array"), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 13
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </ul> <!-- cd-faq-categories -->
    <div class=\"cd-faq-items\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 17
            echo "            <ul id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array(), "array"), "html", null, true);
            echo "\" class=\"cd-faq-group\">
                <li class=\"cd-faq-title\"><h2>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array(), "array"), "html", null, true);
            echo "</h2></li>
                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 20
                echo "                    ";
                if (($this->getAttribute($context["question"], "hidden", array(), "array") == 0)) {
                    // line 21
                    echo "                    ";
                    if (($this->getAttribute($context["question"], "category", array(), "array") == $this->getAttribute($context["category"], "id", array(), "array"))) {
                        // line 22
                        echo "                        <li>
                            <a class=\"cd-faq-trigger\" href=\"#0\">";
                        // line 23
                        echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "question", array(), "array"), "html", null, true);
                        echo "</a>
                            <div class=\"cd-faq-content\">
                                <p>";
                        // line 25
                        echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "answers", array(), "array"), "html", null, true);
                        echo "</p>
                            </div> <!-- cd-faq-content -->
                        </li>
                    ";
                    }
                    // line 29
                    echo "                    ";
                }
                // line 30
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "            </ul> <!-- cd-faq-group -->
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </div> <!-- cd-faq-items -->
    <a href=\"#0\" class=\"cd-close-panel\">Close</a>
</section> <!-- cd-faq -->
<div style=\"height: 500px\"></div>
<script src=\"js/jquery-2.1.1.js\"></script>
<script src=\"js/jquery.mobile.custom.min.js\"></script>
<script src=\"js/main.js\"></script> <!-- Resource jQuery -->
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "Main\\index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 33,  113 => 31,  107 => 30,  104 => 29,  97 => 25,  92 => 23,  89 => 22,  86 => 21,  83 => 20,  79 => 19,  75 => 18,  70 => 17,  66 => 16,  62 => 14,  56 => 13,  48 => 11,  40 => 9,  37 => 8,  33 => 7,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Main\\index.twig", "C:\\OpenServer\\domains\\graduate\\content\\Main\\index.twig");
    }
}
