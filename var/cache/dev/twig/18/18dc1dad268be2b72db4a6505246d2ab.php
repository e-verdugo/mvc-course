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

/* proj/about.html.twig */
class __TwigTemplate_e82e3804ad7b22ff9f1f53be2d1cc5bc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "projbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/about.html.twig"));

        $this->parent = $this->loadTemplate("projbase.html.twig", "proj/about.html.twig", 1);
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

        echo "Om";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<h1>Om den h??r sidan</h1>
<p>V??lkommen till min about-sida f??r mitt projekt. Jag har valt att skapa ett spel d??r man kan spela Plump, ett kortspel.</p>

<br>

<h4>Spelregler</h4>
<p>M??let med spelet ??r att inte \"plumpa\", utan att f?? po??ng varje runda. F??r att f?? po??ng s?? m??ste man ta lika m??nga stick som man satsar p?? att man ska ta i b??jan, och f??r att ta ett stick s?? m??ste du ha det h??gsta kortet, eller trumf. Man b??rjar med 10 kort var, och sen k??r man 9, 8, etc. tills man kommer till ett. D??refter k??r man fr??n ett till tio. Efter varje utdelning av korten s?? tas det ??versta av de kvarvarande korten och l??ggs upp. Denns f??rg ??r nu trumf. Nu satsar man kort, alla p?? en g??ng. Den spelare som satsat mest b??rjar. Den f??r l??gga ut vad den vill, och alla andra spelare m??ste f??lja f??rg. Har man inte f??rgen m??ste man l??gga trumf. Ess i trumf g??r inte att kl??, eftersom den ??r v??rd mest.</p>

<br>

<h4>Kodkvalitet</h4>
<p>Jag har fokuserat p?? att f?? ner komplexiteten p?? vissa delar av min kod, speciellt i Play-klassen. D??r har jag delat upp en funktion endRound till tv??. Efter det s?? gick komplexiteten i den klassen ner ganska rej??lt. Jag kom inte lika l??ngt med komplexiteten f??r routen plump, d??remot. Vissa delar har jag lyckats g??ra om till funktioner som jag har lagt in i den klass som var n??rmast. Till exempel koden f??r att avsluta en runda (endRound i Play, sj??lva spelobjektet), och koden f??r att l??gga till po??ng, stick, och satsningar (score och updateScore, stick och addStick, och betStick och addBetStick, b??da i Player-objekten). F??r att h??lla koll p?? komplexiteten s?? har jag anv??nt phpmetrics och phpmd. Phpmd har inte bara varnat mig f??r \"kladd\" i koden, f??r genom det s?? har jag hittat s??tt att g??ra den mindre komplex. F??r att f?? tips om hur jag ska f?? ner komplexiteten s?? har jag anv??nt <i><a href=\"https://phptherightway.com/#complex_problem\">Php the right way</a></i> som guide. Scrutinizer hade ??ven tips om specifika s??tt att f?? ner komplexiteten f??r olika delar av koden. Jag anv??nde \"decompose conditional\" tipset f??r att f?? ner komplexiteten i layCards.</p>
<p>F??rutom komplexiteten s?? har jag ??ven f??rs??kt se till att ha en bra dokumentation, b??de i sj??lva koden och via phpdoc. D??rf??r har jag skrivit in vad varje metod g??r. Jag har ??ven st??ngt av varninger f??r filerna i Entity-mappen och Repository-mappen d?? det inte finns n??got jag kan g??ra ??t det.</p>
<p>Sist men inte minst s?? har jag ??ven f??rs??kt h??lla en s?? h??g kohesion som m??jligt, och jag tycker att jag har lyckats ganska bra. Det som r??r det som finns i klasserna ligger i klasserna. Jag har lite duplikation, d?? jag ville anv??nda kort-klasserna som bas. Det visade sig att deck-klassen fungerade fint som det var s?? det ??r bara en kopia av min tidigare klass. D?? jag har b??da filerna eftersom jag vill h??lla de tv?? projekten is??r s?? ledde det till en viss duplikation. Det b??sta hade nog egentligen varit att helt enkelt extenda de tidigare klasserna, men d?? jag inte vill ha n??got beroende mellan de alls s?? valde jag att hellre ha duplikationen.</p>

<br>

<h4>L??nkar</h4>
<a href=\"https://github.com/e-verdugo/mvc-course\">Github repo f??r projektet</a> <br>
<a href=\"https://scrutinizer-ci.com/g/e-verdugo/mvc-course/\">Scrutinizer f??r repot</a> <br>
<a href=\"http://www.student.bth.se/~emve21/dbwebb-kurser/mvc/me/report/docs/metrics/\">Rapporten fr??n phpmetrics</a> <br>
<a href=\"http://www.student.bth.se/~emve21/dbwebb-kurser/mvc/me/report/docs/api/\">Dokumentation av phpdoc</a> <br>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "proj/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"projbase.html.twig\" %}

{% block title %}Om{% endblock %}

{% block content %}
<h1>Om den h??r sidan</h1>
<p>V??lkommen till min about-sida f??r mitt projekt. Jag har valt att skapa ett spel d??r man kan spela Plump, ett kortspel.</p>

<br>

<h4>Spelregler</h4>
<p>M??let med spelet ??r att inte \"plumpa\", utan att f?? po??ng varje runda. F??r att f?? po??ng s?? m??ste man ta lika m??nga stick som man satsar p?? att man ska ta i b??jan, och f??r att ta ett stick s?? m??ste du ha det h??gsta kortet, eller trumf. Man b??rjar med 10 kort var, och sen k??r man 9, 8, etc. tills man kommer till ett. D??refter k??r man fr??n ett till tio. Efter varje utdelning av korten s?? tas det ??versta av de kvarvarande korten och l??ggs upp. Denns f??rg ??r nu trumf. Nu satsar man kort, alla p?? en g??ng. Den spelare som satsat mest b??rjar. Den f??r l??gga ut vad den vill, och alla andra spelare m??ste f??lja f??rg. Har man inte f??rgen m??ste man l??gga trumf. Ess i trumf g??r inte att kl??, eftersom den ??r v??rd mest.</p>

<br>

<h4>Kodkvalitet</h4>
<p>Jag har fokuserat p?? att f?? ner komplexiteten p?? vissa delar av min kod, speciellt i Play-klassen. D??r har jag delat upp en funktion endRound till tv??. Efter det s?? gick komplexiteten i den klassen ner ganska rej??lt. Jag kom inte lika l??ngt med komplexiteten f??r routen plump, d??remot. Vissa delar har jag lyckats g??ra om till funktioner som jag har lagt in i den klass som var n??rmast. Till exempel koden f??r att avsluta en runda (endRound i Play, sj??lva spelobjektet), och koden f??r att l??gga till po??ng, stick, och satsningar (score och updateScore, stick och addStick, och betStick och addBetStick, b??da i Player-objekten). F??r att h??lla koll p?? komplexiteten s?? har jag anv??nt phpmetrics och phpmd. Phpmd har inte bara varnat mig f??r \"kladd\" i koden, f??r genom det s?? har jag hittat s??tt att g??ra den mindre komplex. F??r att f?? tips om hur jag ska f?? ner komplexiteten s?? har jag anv??nt <i><a href=\"https://phptherightway.com/#complex_problem\">Php the right way</a></i> som guide. Scrutinizer hade ??ven tips om specifika s??tt att f?? ner komplexiteten f??r olika delar av koden. Jag anv??nde \"decompose conditional\" tipset f??r att f?? ner komplexiteten i layCards.</p>
<p>F??rutom komplexiteten s?? har jag ??ven f??rs??kt se till att ha en bra dokumentation, b??de i sj??lva koden och via phpdoc. D??rf??r har jag skrivit in vad varje metod g??r. Jag har ??ven st??ngt av varninger f??r filerna i Entity-mappen och Repository-mappen d?? det inte finns n??got jag kan g??ra ??t det.</p>
<p>Sist men inte minst s?? har jag ??ven f??rs??kt h??lla en s?? h??g kohesion som m??jligt, och jag tycker att jag har lyckats ganska bra. Det som r??r det som finns i klasserna ligger i klasserna. Jag har lite duplikation, d?? jag ville anv??nda kort-klasserna som bas. Det visade sig att deck-klassen fungerade fint som det var s?? det ??r bara en kopia av min tidigare klass. D?? jag har b??da filerna eftersom jag vill h??lla de tv?? projekten is??r s?? ledde det till en viss duplikation. Det b??sta hade nog egentligen varit att helt enkelt extenda de tidigare klasserna, men d?? jag inte vill ha n??got beroende mellan de alls s?? valde jag att hellre ha duplikationen.</p>

<br>

<h4>L??nkar</h4>
<a href=\"https://github.com/e-verdugo/mvc-course\">Github repo f??r projektet</a> <br>
<a href=\"https://scrutinizer-ci.com/g/e-verdugo/mvc-course/\">Scrutinizer f??r repot</a> <br>
<a href=\"http://www.student.bth.se/~emve21/dbwebb-kurser/mvc/me/report/docs/metrics/\">Rapporten fr??n phpmetrics</a> <br>
<a href=\"http://www.student.bth.se/~emve21/dbwebb-kurser/mvc/me/report/docs/api/\">Dokumentation av phpdoc</a> <br>

{% endblock %}", "proj/about.html.twig", "C:\\Users\\Emelie\\dbwebb\\dbwebb-kurser\\mvc\\me\\report\\templates\\proj\\about.html.twig");
    }
}
