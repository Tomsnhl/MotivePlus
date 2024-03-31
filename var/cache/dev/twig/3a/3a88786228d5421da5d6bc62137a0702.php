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

/* cover_letter/index.html.twig */
class __TwigTemplate_0ce0e8682067abc2cdef2b9d65906ee6 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cover_letter/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cover_letter/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cover_letter/index.html.twig", 1);
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

        echo "Générer une lettre de motivation";
        
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
        echo "<!-- Hire Us -->
<div class=\"max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto\">
  <div class=\"max-w-xl mx-auto\">
    <div class=\"text-center\">
      <h1 class=\"text-3xl font-bold text-gray-800 sm:text-4xl dark:text-white\">
        Prêt à générer votre lettre de motivation avec AI ?
      </h1>
      <p class=\"mt-1 text-gray-600 dark:text-gray-400\">
        Remplissez le formulaire et nous générerons une lettre de motivation personnalisée pour vous.
      </p>
    </div>

    <div class=\"mt-12\">
      <!-- Form -->
      ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start');
        echo "
        <div class=\"grid gap-4 lg:gap-6\">
          <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6\">
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), 'row', ["attr" => ["class" => "py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600", "placeholder" => "Votre nom"]]);
        echo "
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "prenom", [], "any", false, false, false, 24), 'row', ["attr" => ["class" => "py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600", "placeholder" => "Votre prénom"]]);
        echo "
          </div>

          <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6\">
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "diplome", [], "any", false, false, false, 28), 'row', ["attr" => ["class" => "py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600", "placeholder" => "Votre Diplome"]]);
        echo "
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "experience", [], "any", false, false, false, 29), 'row', ["attr" => ["class" => "py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600", "placeholder" => "Votre Experience"]]);
        echo "
          </div>
          <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "entreprise", [], "any", false, false, false, 32), 'row', ["attr" => ["class" => "py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600", "placeholder" => "L'entreprise visée"]]);
        echo "
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "poste", [], "any", false, false, false, 33), 'row', ["attr" => ["class" => "py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600", "placeholder" => "Le poste visé"]]);
        echo "
          </div>

          ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "annonce", [], "any", false, false, false, 36), 'row', ["attr" => ["class" => "py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600", "placeholder" => "Détails de l'annonce emploi visée", "rows" => "4"]]);
        echo "

          ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "_token", [], "any", false, false, false, 38), 'row');
        echo "
        <div class=\"mt-6 grid\">
          <button type=\"submit\" class=\"w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-white hover:bg-purple-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600\" style=\"background-color: #C12DC0; hover:bg-purple-700;\">Générer ma lettre</button>
        </div>
            ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
    </div>
  </div>
</div>

<!-- Modal de chargement avec Tailwind CSS -->
<div id=\"loadingModal\" class=\"fixed inset-0 bg-gray-800 bg-opacity-75 flex justify-center items-center hidden\" aria-labelledby=\"modalTitle\" role=\"dialog\" aria-modal=\"true\">
  <div class=\"relative p-5 border w-96 shadow-lg rounded-lg bg-white flex flex-col items-center\">
    <!-- Icône de chargement personnalisée -->
    <div class=\"loader ease-linear rounded-full border-8 border-t-8 border-gray-200 h-12 w-12 mb-4\"></div>
    <h3 class=\"text-lg font-medium text-gray-900\" id=\"modalTitle\">Génération en cours...</h3>
    <p class=\"text-sm text-gray-500 mt-2\">Votre lettre de motivation est en cours de génération, veuillez patienter.</p>
  </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "<script>
document.addEventListener(\"DOMContentLoaded\", function() {
  const form = document.querySelector(\"form\");
  const loadingModal = document.getElementById(\"loadingModal\");

  form.addEventListener(\"submit\", function() {
    // Affiche le modal de chargement
    loadingModal.classList.remove(\"hidden\");
    // Pas besoin de cacher le modal ici, car la page va être rechargée/redirigée
  });
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "cover_letter/index.html.twig";
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
        return array (  189 => 59,  179 => 58,  154 => 42,  147 => 38,  142 => 36,  136 => 33,  132 => 32,  126 => 29,  122 => 28,  115 => 24,  111 => 23,  105 => 20,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Générer une lettre de motivation{% endblock %}

{% block body %}
<!-- Hire Us -->
<div class=\"max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto\">
  <div class=\"max-w-xl mx-auto\">
    <div class=\"text-center\">
      <h1 class=\"text-3xl font-bold text-gray-800 sm:text-4xl dark:text-white\">
        Prêt à générer votre lettre de motivation avec AI ?
      </h1>
      <p class=\"mt-1 text-gray-600 dark:text-gray-400\">
        Remplissez le formulaire et nous générerons une lettre de motivation personnalisée pour vous.
      </p>
    </div>

    <div class=\"mt-12\">
      <!-- Form -->
      {{ form_start(form) }}
        <div class=\"grid gap-4 lg:gap-6\">
          <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6\">
            {{ form_row(form.nom, {'attr': {'class': 'py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600', 'placeholder': 'Votre nom'}}) }}
            {{ form_row(form.prenom, {'attr': {'class': 'py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600', 'placeholder': 'Votre prénom'}}) }}
          </div>

          <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6\">
            {{ form_row(form.diplome, {'attr': {'class': 'py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600', 'placeholder': 'Votre Diplome'}}) }}
            {{ form_row(form.experience, {'attr': {'class': 'py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600', 'placeholder': 'Votre Experience'}}) }}
          </div>
          <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6\">
            {{ form_row(form.entreprise, {'attr': {'class': 'py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600', 'placeholder': 'L\\'entreprise visée'}}) }}
            {{ form_row(form.poste, {'attr': {'class': 'py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600', 'placeholder': 'Le poste visé'}}) }}
          </div>

          {{ form_row(form.annonce, {'attr': {'class': 'py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600', 'placeholder': 'Détails de l\\'annonce emploi visée', 'rows': '4'}}) }}

          {{ form_row(form._token) }}
        <div class=\"mt-6 grid\">
          <button type=\"submit\" class=\"w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-white hover:bg-purple-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600\" style=\"background-color: #C12DC0; hover:bg-purple-700;\">Générer ma lettre</button>
        </div>
            {{ form_end(form, {'render_rest': false}) }}
    </div>
  </div>
</div>

<!-- Modal de chargement avec Tailwind CSS -->
<div id=\"loadingModal\" class=\"fixed inset-0 bg-gray-800 bg-opacity-75 flex justify-center items-center hidden\" aria-labelledby=\"modalTitle\" role=\"dialog\" aria-modal=\"true\">
  <div class=\"relative p-5 border w-96 shadow-lg rounded-lg bg-white flex flex-col items-center\">
    <!-- Icône de chargement personnalisée -->
    <div class=\"loader ease-linear rounded-full border-8 border-t-8 border-gray-200 h-12 w-12 mb-4\"></div>
    <h3 class=\"text-lg font-medium text-gray-900\" id=\"modalTitle\">Génération en cours...</h3>
    <p class=\"text-sm text-gray-500 mt-2\">Votre lettre de motivation est en cours de génération, veuillez patienter.</p>
  </div>
</div>
{% endblock %}

{% block javascripts %}
<script>
document.addEventListener(\"DOMContentLoaded\", function() {
  const form = document.querySelector(\"form\");
  const loadingModal = document.getElementById(\"loadingModal\");

  form.addEventListener(\"submit\", function() {
    // Affiche le modal de chargement
    loadingModal.classList.remove(\"hidden\");
    // Pas besoin de cacher le modal ici, car la page va être rechargée/redirigée
  });
});
</script>
{% endblock %}

", "cover_letter/index.html.twig", "C:\\wamp64\\www\\MotivPlus\\templates\\cover_letter\\index.html.twig");
    }
}
