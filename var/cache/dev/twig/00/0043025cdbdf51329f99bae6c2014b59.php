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

/* user/adduser.html.twig */
class __TwigTemplate_0339738e1f33aa700d1ab8ed06453529 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/adduser.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/adduser.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/adduser.html.twig", 1);
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

        echo "Okazio";
        
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
</style>
<div class=\"header\">
    <a href=\"https://okazio-cultura.com/\">
        <img class=\"logo\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo_okazio_RVB 2.png"), "html", null, true);
        echo "\" alt=\"\" style=\"\">
    </a>
    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/File rose-2.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 100px\">
</div>
<div class=\"example-wrapper\">
    <h1>Deviens beta-testeur.euse </h1>
    <div>
        <span> Nous avons besoin de toi pour participer au développement de la nouvelle plateforme Okazio </span>   
    </div>
    <div class=\"form\">
        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start');
        echo "
            <div class=\"form\">
                <div class=\"col-auto m-1\">
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "Email", [], "any", false, false, false, 25), 'widget', ["attr" => ["placeholder" => "Note ton email ici"]]);
        echo "
                </div>
                <div class=\"col-auto m-1\">
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "Enregistrer", [], "any", false, false, false, 28), 'widget');
        echo "
                </div>
            </div>
        ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_end');
        echo "
    </div>
    <div class=\"video\">
        <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ApkxgD0frWQ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
    </div>
        <h3>Découvre l'univers Okazio en vidéo</h3>
    <div class=\"bullet\">
        <div class=\"icon\">
            <div class=\"png\">
                <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-cultura-jubile.png"), "html", null, true);
        echo "\" alt=\"\" height=\"50px\">
            </div>
            <div class=\"text\">Communauté Cultura</div>
        </div>
        <div class=\"icon\">
            <div class=\"png\">
                <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/002-gift-card.png"), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <div class=\"text\">+20% en Cartes cadeaux</div>
        </div>
        <div class=\"icon\">
            <div class=\"png\">
                <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/001-secure-shield.png"), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <div class=\"text\">Plateforme sécurisée</div>
        </div>
    </div>
<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 320\"><path fill=\"#FACD43\" fill-opacity=\"1\" d=\"M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z\"></path></svg>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/adduser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 52,  151 => 46,  142 => 40,  130 => 31,  124 => 28,  118 => 25,  112 => 22,  101 => 14,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Okazio{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<div class=\"header\">
    <a href=\"https://okazio-cultura.com/\">
        <img class=\"logo\" src=\"{{ asset('img/logo_okazio_RVB 2.png') }}\" alt=\"\" style=\"\">
    </a>
    <img src=\"{{ asset('img/File rose-2.png') }}\" alt=\"\" style=\"width: 100px\">
</div>
<div class=\"example-wrapper\">
    <h1>Deviens beta-testeur.euse </h1>
    <div>
        <span> Nous avons besoin de toi pour participer au développement de la nouvelle plateforme Okazio </span>   
    </div>
    <div class=\"form\">
        {{ form_start(form) }}
            <div class=\"form\">
                <div class=\"col-auto m-1\">
                    {{ form_widget(form.Email, {'attr':{'placeholder':'Note ton email ici'}}) }}
                </div>
                <div class=\"col-auto m-1\">
                    {{ form_widget(form.Enregistrer) }}
                </div>
            </div>
        {{ form_end(form) }}
    </div>
    <div class=\"video\">
        <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ApkxgD0frWQ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
    </div>
        <h3>Découvre l'univers Okazio en vidéo</h3>
    <div class=\"bullet\">
        <div class=\"icon\">
            <div class=\"png\">
                <img src=\"{{ asset('img/logo-cultura-jubile.png')}}\" alt=\"\" height=\"50px\">
            </div>
            <div class=\"text\">Communauté Cultura</div>
        </div>
        <div class=\"icon\">
            <div class=\"png\">
                <img src=\"{{ asset('img/002-gift-card.png')}}\" alt=\"\">
            </div>
            <div class=\"text\">+20% en Cartes cadeaux</div>
        </div>
        <div class=\"icon\">
            <div class=\"png\">
                <img src=\"{{ asset('img/001-secure-shield.png')}}\" alt=\"\">
            </div>
            <div class=\"text\">Plateforme sécurisée</div>
        </div>
    </div>
<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 320\"><path fill=\"#FACD43\" fill-opacity=\"1\" d=\"M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z\"></path></svg>
</div>
{% endblock %}
", "user/adduser.html.twig", "/Applications/MAMP/htdocs/cultura-okazio/templates/user/adduser.html.twig");
    }
}
