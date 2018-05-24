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
        echo "<div class=\"social-media js-social-media-links\">
  <a href=\"";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["facebook_url"] ?? null), "html", null, true));
        echo "\" class=\"facebook\" data-network=\"facebook\" target=\"_blank\">
    <i class=\"fab fa-3x fa-facebook\"></i>
    <span class=\"social-media-count\">";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["facebook_count"] ?? null), "html", null, true));
        echo "</span>
  </a>
  <a href=\"";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["google_plus_url"] ?? null), "html", null, true));
        echo "\" class=\"google-plus\" data-network=\"google_plus\" target=\"_blank\">
    <i class=\"fab fa-3x fa-google-plus\"></i>
    <span class=\"social-media-count\">";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["google_plus_count"] ?? null), "html", null, true));
        echo "</span>
  </a>
  <a href=\"";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["twitter_url"] ?? null), "html", null, true));
        echo "\" class=\"twitter\" data-network=\"twitter\" target=\"_blank\">
    <i class=\"fab fa-3x fa-twitter\"></i>
    <span class=\"social-media-count\">";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["twitter_count"] ?? null), "html", null, true));
        echo "</span>
  </a>
  <a href=\"";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["linkedin_url"] ?? null), "html", null, true));
        echo "\" class=\"linkedin\" data-network=\"linkedin\" target=\"_blank\">
    <i class=\"fab fa-3x fa-linkedin\"></i>
    <span class=\"social-media-count\">";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["linkedin_count"] ?? null), "html", null, true));
        echo "</span>
  </a>
  <a href=\"";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["foursquare_url"] ?? null), "html", null, true));
        echo "\" class=\"foursquare\" data-network=\"foursquare\" target=\"_blank\">
    <i class=\"fab fa-3x fa-foursquare\"></i>
    <span class=\"social-media-count\">";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["foursquare_count"] ?? null), "html", null, true));
        echo "</span>
  </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/thomas_more_social_media/templates/social-media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 20,  86 => 18,  81 => 16,  76 => 14,  71 => 12,  66 => 10,  61 => 8,  56 => 6,  51 => 4,  46 => 2,  43 => 1,);
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
