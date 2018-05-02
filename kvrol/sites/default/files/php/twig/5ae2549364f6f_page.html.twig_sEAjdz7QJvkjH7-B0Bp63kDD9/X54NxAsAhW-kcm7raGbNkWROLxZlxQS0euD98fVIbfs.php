<?php

/* themes/gmx/templates/layout/page.html.twig */
class __TwigTemplate_764af4b5467909a2107811121f60cec65c1c439c063b9a7b9dd18b6b396db727 extends Twig_Template
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
        $tags = array("if" => 11);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">



<!-- Header and Navbar -->
<header class=\"main-header\">
  <!--Start: Branding and Menu -->
  <div class=\"container\">
    <div class=\"row\">
        ";
        // line 11
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 12
            echo "        <div class=\"col-xs-6 col-md-3\">
          ";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
        </div>
        ";
        }
        // line 16
        echo "        <!-- Navigation -->
        ";
        // line 17
        if ($this->getAttribute(($context["page"] ?? null), "menu", array())) {
            // line 18
            echo "          <div class=\"col-xs-6 col-md-9\">
            ";
            // line 19
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "menu", array()), "html", null, true));
            echo " 
          </div>
        ";
        }
        // line 22
        echo "        <!--End Navigation -->
    </div>
  </div>


  <!-- Start: Banner -->
    ";
        // line 28
        if ($this->getAttribute(($context["page"] ?? null), "welcome_banner_text", array())) {
            // line 29
            echo "      <div class=\"container\">
        <div class=\"banner\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "welcome_banner_text", array()), "html", null, true));
            echo "
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 39
        echo "  <!-- End: Banner -->

      <div class=\"redes\">
        <a href=\"https://www.facebook.com/karolesteban\"><img src=\"/themes/gmx/images/facebook.png\"/></a>
        <a href=\"https://www.youtube.com/user/kesteban\"><img class=\"rs\" src=\"/themes/gmx/images/youtube.png\"/></a>
        <a href=\"https://www.instagram.com/karol_esteban\"><img class=\"rs\" src=\"/themes/gmx/images/instagram.png\"/></a>
      </div>

  <!--Start: Highlighted -->
    ";
        // line 48
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 49
            echo "      <div class=\"highlighted\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 53
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 59
        echo "  <!--End: Highlighted -->

</header>
<!--End Header & Navbar -->


      <!--- Start content -->
      ";
        // line 66
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 67
            echo "        <div class=\"container-fluid\">
          <div class=\"row\">
              ";
            // line 69
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 73
        echo "      <!---End content -->




<!--Start: Footer -->
  <div class=\"footer\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-9\">
          ";
        // line 83
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footera", array()), "html", null, true));
        echo "
        </div>
        <div class=\"col-md-3\">
          ";
        // line 86
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footerb", array()), "html", null, true));
        echo "
        </div>
      </div>
    </div>
  </div>
<!--End: Footer -->

  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/gmx/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 86,  167 => 83,  155 => 73,  148 => 69,  144 => 67,  142 => 66,  133 => 59,  124 => 53,  118 => 49,  116 => 48,  105 => 39,  96 => 33,  90 => 29,  88 => 28,  80 => 22,  74 => 19,  71 => 18,  69 => 17,  66 => 16,  60 => 13,  57 => 12,  55 => 11,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gmx/templates/layout/page.html.twig", "/home/gmxcl/_kvrol.com/kvrol/themes/gmx/templates/layout/page.html.twig");
    }
}
