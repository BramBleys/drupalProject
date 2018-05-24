<?php

/* modules/custom/ice_cream/templates/flavors.html.twig */
class __TwigTemplate_4e8f93a9dd79d5128aae5365b9a380ac01955b38f88bac018410b451bcd35915 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div class=\"ice_cream-links\">
  <a href=\"/ice_cream/form\" class=\"ice_cream\" data-choice=\"ice_cream\">
   Ice cream
  </a>
  <a href=\"/waffle/form\" class=\"waffle\" data-choice=\"waffle\">
  Waffles
  </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/ice_cream/templates/flavors.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/custom/ice_cream/templates/flavors.html.twig", "/home/drupal8/Projects/drupal-8.5.3/modules/custom/ice_cream/templates/flavors.html.twig");
    }
}
