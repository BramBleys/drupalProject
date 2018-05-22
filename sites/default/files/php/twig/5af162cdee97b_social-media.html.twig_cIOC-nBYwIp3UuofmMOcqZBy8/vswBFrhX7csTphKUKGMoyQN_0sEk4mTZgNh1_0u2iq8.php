<?php

/* modules/custom/thomas_more_social_media/templates/social-media.html.twig */
class __TwigTemplate_81e68a81660971245d35aaffdc07b9c07199eac0fe661115d7c7a6e488e4164c extends Twig_Template
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
        echo "<div class=\"social-media\">
    <a href=\"https://www.facebook.com/Intracto/\" class=\"facebook\" target=\"_blank\">
        <i class=\"fab fa-3x fa-facebook\"></i>
    </a>
    <a href=\"https://plus.google.com/+Intractodigitalagency\" class=\"google-plus\" target=\"_blank\">
        <i class=\"fab fa-3x fa-google-plus\"></i>
    </a>
    <a href=\"https://twitter.com/intracto\" class=\"twitter\" target=\"_blank\">
        <i class=\"fab fa-3x fa-twitter\"></i>
    </a>
    <a href=\"https://www.linkedin.com/company/intracto-group-nv\" class=\"linkedin\" target=\"_blank\">
        <i class=\"fab fa-3x fa-linkedin\"></i>
    </a>
    <a href=\"https://foursquare.com/v/intracto/4bd72250637ba593b45cf970\" class=\"foursquare\" target=\"_blank\">
        <i class=\"fab fa-3x fa-foursquare\"></i>
    </a>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/thomas_more_social_media/templates/social-media.html.twig";
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
        return new Twig_Source("", "modules/custom/thomas_more_social_media/templates/social-media.html.twig", "/home/drupal8/Projects/drupal-8.5.3/modules/custom/thomas_more_social_media/templates/social-media.html.twig");
    }
}
