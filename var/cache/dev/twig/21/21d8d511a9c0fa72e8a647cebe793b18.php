<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_c6ee40467eaf009d727fdb2d3edd5ed8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomeController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }

    .fade-in {
      opacity: 0;
      animation: fadeIn 2s ease-out forwards;
    }
    
    @keyframes fadeIn {
      to {
        opacity: 1;
      }
    }
    
</style>
<!-- Hero -->
<div class=\"max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 fade-in\">
  <div class=\"mt-8 grid gap-4 lg:grid-cols-2 md:gap-8 xl:gap-20 items-center\">
    <div>
      <!-- Titre et texte -->
      <h1 class=\"text-3xl text-center font-bold text-gray-800 sm:text-4xl lg:text-6xl dark:text-white\">
        Une Lettre de Motivation Parfaite avec <span style=\"color: #C12DC0;\">IA</span>
      </h1>
      <p class=\"mt-3 text-center text-lg text-gray-800 dark:text-gray-400\">
        Que vous soyez un jeune diplômé, un professionnel expérimenté ou en transition de carrière, notre générateur de lettres de motivation est fait pour vous.
      </p>
      <!-- Bouton -->
      <div class=\"mt-7 text-center\">
        <a class=\"py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg text-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 launch-button\" style=\"background-color: #C12DC0;\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cover_letter_new");
        echo "\">
          Lancez-vous
          <svg class=\"w-4 h-4\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m9 18 6-6-6-6\"/></svg>
        </a>
      </div>
      
    </div>
    <!-- Image -->
    <div class=\"relative mt-4 lg:mt-0 text-center\">
      <img class=\"w-3/4 sm:w-full mx-auto rounded-md\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/main.jpg"), "html", null, true);
        echo "\" alt=\"Image Description\">
    </div>
    
  </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  131 => 44,  119 => 35,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }

    .fade-in {
      opacity: 0;
      animation: fadeIn 2s ease-out forwards;
    }
    
    @keyframes fadeIn {
      to {
        opacity: 1;
      }
    }
    
</style>
<!-- Hero -->
<div class=\"max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 fade-in\">
  <div class=\"mt-8 grid gap-4 lg:grid-cols-2 md:gap-8 xl:gap-20 items-center\">
    <div>
      <!-- Titre et texte -->
      <h1 class=\"text-3xl text-center font-bold text-gray-800 sm:text-4xl lg:text-6xl dark:text-white\">
        Une Lettre de Motivation Parfaite avec <span style=\"color: #C12DC0;\">IA</span>
      </h1>
      <p class=\"mt-3 text-center text-lg text-gray-800 dark:text-gray-400\">
        Que vous soyez un jeune diplômé, un professionnel expérimenté ou en transition de carrière, notre générateur de lettres de motivation est fait pour vous.
      </p>
      <!-- Bouton -->
      <div class=\"mt-7 text-center\">
        <a class=\"py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg text-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 launch-button\" style=\"background-color: #C12DC0;\" href=\"{{ path('cover_letter_new') }}\">
          Lancez-vous
          <svg class=\"w-4 h-4\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m9 18 6-6-6-6\"/></svg>
        </a>
      </div>
      
    </div>
    <!-- Image -->
    <div class=\"relative mt-4 lg:mt-0 text-center\">
      <img class=\"w-3/4 sm:w-full mx-auto rounded-md\" src=\"{{ asset('build/images/main.jpg') }}\" alt=\"Image Description\">
    </div>
    
  </div>
</div>
{% endblock %}", "home/index.html.twig", "C:\\wamp64\\www\\MotivPlus\\templates\\home\\index.html.twig");
    }
}
