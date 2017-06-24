<?php

/* Admin\login.twig */
class __TwigTemplate_7465b5d3de42ae9bd9f7ff3a71860e0bea4351b3bf106e66ac3e81292a8d2b44 extends Twig_Template
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
        echo "<div class=\"container\">
    <h1>";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true);
        echo "</h1>
    <p style=\"color: #dd4444\">";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo "</p>
    <form method=\"POST\">
        <p>
            <lable id=\"login\">Логин:</lable>
            <br/>
            <input id=\"login\" type=\"text\" name=\"loginLog\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "loginLog", array(), "array"), "html", null, true);
        echo "\">
        </p>
        <p>
            <lable id=\"password\">Пароль:</lable>
            <br/>
            <input id=\"password\" type=\"password\" name=\"passwordLog\">
        </p>
        <p>
            <input type=\"submit\" name=\"goLogin\" value=\"Войти\">
        </p>
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "Admin\\login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Admin\\login.twig", "C:\\OpenServer\\domains\\graduate\\content\\Admin\\login.twig");
    }
}
