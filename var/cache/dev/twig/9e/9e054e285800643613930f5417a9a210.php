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

/* proj/cleancode.html.twig */
class __TwigTemplate_f51a0f051472a49814761406d7dc68fb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/cleancode.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/cleancode.html.twig"));

        $this->parent = $this->loadTemplate("projbase.html.twig", "proj/cleancode.html.twig", 1);
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

        echo "Clean code";
        
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
        echo "
";
        // line 7
        $___internal_parse_0_ = ('' === $tmp = "Clean code
======

Vad ??r snygg kod? ??r bra kod snygg, och ??r snygg kod bra? Vad ??r snygg kod?

F??r mig s?? ??r snygg kod l??ttl??slig och l??ttf??rst??elig. Koncepten \"bra\" och \"snygg\" ??r dock inte samma, d?? det finns snygg kod som inte fungerar, och bra kod som inte ??r snygg. D??remot s?? tror jag att kod som ??r bra oftast ??r snygg.

Till exempel:
Att dra ner p?? komplexiteten genom att dela upp stora funktioner till mindre funktioner enligt Single-responsibility principen hj??lper ??ven till att f?? funktioner att bli enklare att testa och enklare att f??rst??, fels??ka, och ??teranv??nda. Kod som ??r mindre komplex ??r b??ttre kod ??n kod som ??r komplex, och mindre funktioner ??r snyggare, s?? h??r g??r bra och snygg kod hand i hand. D??remot s?? kan det ibland vara sv??rt att lyckas dela upp st??rre funktioner till mindre, och d?? kan man beh??va l??gga ner lite tid p?? att omstrukturera sin kod.

Att anv??nda linters och mess detectors hj??lper ocks?? till att f?? en snygg och fin kod. Koden blir renare och struktureras efter en kodstruktur som g??r det enklare f??r andra som ??r vana med samma struktur att hitta och f??rst?? delar av ens kod. Personen som ska underh??lla koden eller beh??ver f??rst?? den kan mycket v??l vara en sj??lv om n??gra veckor. Beroende p?? varningen s?? kan den tillfixade koden ??ven blir b??ttre, d?? den kanske k??rs snabbare eller inte k??rs alls om det inte beh??vs.

Baserat p?? dessa tv?? exempel s?? vill jag s??ga att kod som ??r snygg f??r det mesta ??r bra, och vice versa. Men det finns s?? klart exempel som pekar ??t andra h??llet. Om en klass blir f??r komplex s?? vill man kanske dela upp den till tv??, men om alla funktionerna i klassen h??r tillsammans s?? m??ste man v??lja mellan att ha en komplex klass, eller tv?? klasser som ??r n??ra kopplade. Allts?? ett h??gre m??tv??rde f??r koppling, och en l??g kohesion. Det g??r det sv??rare att f?? en bra ??verblick ??ver vilka funktioner som finns och vad de g??r, f??r nu s?? har man tv?? klasser som inneh??ller v??ldigt lika saker. Man f??r v??lja mellan att ha sv??rt att se helheten, eller sv??rt att se saker p?? detaljniv??. En tredje l??sning kan vara att skriva om sin kod p?? djupet, s?? att det ??r mer rimligt att ha flera mindre klasser ??n en stor.

Kodduplikation ??r ett problem till som kan l??sas genom att ha mindre funktioner. Om varje funktion endast g??r en sak, s?? kan den ??teranv??ndas till flera saker. S?? ist??llet f??r att ha en stor funktion som k??r samma kod flera g??nger baserat p?? en if-sats eller liknande, s?? kan man ha att den k??r en funktion som inneh??ller den koden. P?? det s??ttet s?? sparar man plats/tecken, kan ??teranv??nda funktionen, och f??r l??ttare en ??verblick ??ver vilka funktioner man har och vad de g??r. Koden blir b??de snyggare och b??ttre. Det negativa ??r att det kan l??tt bli extra mycket kod, vilket ??kar storleken och komplexiteten, s?? man m??ste ??verv??ga vad som ??r b??st f??r varje individuell situation.

Personligen s?? tycker jag att det ??r bra att ha en snygg kod, men det ??r b??ttre att ha en fungerande men ful kod ??n en kod som ??r snygg och inte fungerar. Nu s?? t??nker jag ??nd?? att koden man diskuterar ??r f??rv??ntad att fungera, och i s?? fall s?? ??r det alltid bra med en fin kod. En fin kod l??r vara enklare att underh??lla och bygga ut p??, vilket jag tycker k??nns som en v??ldigt viktig grej. Det ??r ocks?? enklare att f?? en ??verblick och en f??rst??else n??r en kod ??r snygg och anv??ndarv??nlig.

Jag tror att det kan ta l??ngre tid att f?? till en snygg kod, p?? samma s??tt som att det kan ta l??ngre tid att f?? spagettikod att inte l??ngre vara spagettikod. Sj??lv s?? brukar jag l??tt hamna i att man skriver en stor del av koden i en funktion, d?? man inte visste vilka funktioner man ville ha fr??n b??rjan. Som exempel kan vi ta koden f??r den h??r sidan. Jag skapade funktioner och klasser f??r allt som jag visste skulle beh??vas (till exempel kort och kortlek) och n??r jag hade en sorts ???ram??? s?? fyllde jag i den med sj??lva koden. Delar av den koden blev mer komplex ??n jag hade t??nkt mig, s?? jag fick flytta ut den till sina egna funktioner. Sj??lva flytten r??knar jag till tiden det tar att f?? en snygg kod, f??r den fungerade redan innan, men blev b??ttre efter.
Min slutsats ??r att s?? l??nge koden fungerar s?? fungerar den, men den ??r b??ttre b??de fr??n en kvalitetssynpunkt och fr??n en l??tt-att-f??rst?? vinkel om den ??r ???snygg???. Snygghet f??r mig ??r hur f??rst??elig, underh??llsv??nlig, och snabb koden ??r. Ju \"enklare\" funktionerna ??r, detso l??ttare ??r det ocks?? att testa dem.
") ? '' : new Markup($tmp, $this->env->getCharset());
        echo $this->env->getRuntime('Twig\Extra\Markdown\MarkdownRuntime')->convert($___internal_parse_0_);
        // line 29
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "proj/cleancode.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 29,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"projbase.html.twig\" %}

{% block title %}Clean code{% endblock %}

{% block content %}

{% apply markdown_to_html %}
Clean code
======

Vad ??r snygg kod? ??r bra kod snygg, och ??r snygg kod bra? Vad ??r snygg kod?

F??r mig s?? ??r snygg kod l??ttl??slig och l??ttf??rst??elig. Koncepten \"bra\" och \"snygg\" ??r dock inte samma, d?? det finns snygg kod som inte fungerar, och bra kod som inte ??r snygg. D??remot s?? tror jag att kod som ??r bra oftast ??r snygg.

Till exempel:
Att dra ner p?? komplexiteten genom att dela upp stora funktioner till mindre funktioner enligt Single-responsibility principen hj??lper ??ven till att f?? funktioner att bli enklare att testa och enklare att f??rst??, fels??ka, och ??teranv??nda. Kod som ??r mindre komplex ??r b??ttre kod ??n kod som ??r komplex, och mindre funktioner ??r snyggare, s?? h??r g??r bra och snygg kod hand i hand. D??remot s?? kan det ibland vara sv??rt att lyckas dela upp st??rre funktioner till mindre, och d?? kan man beh??va l??gga ner lite tid p?? att omstrukturera sin kod.

Att anv??nda linters och mess detectors hj??lper ocks?? till att f?? en snygg och fin kod. Koden blir renare och struktureras efter en kodstruktur som g??r det enklare f??r andra som ??r vana med samma struktur att hitta och f??rst?? delar av ens kod. Personen som ska underh??lla koden eller beh??ver f??rst?? den kan mycket v??l vara en sj??lv om n??gra veckor. Beroende p?? varningen s?? kan den tillfixade koden ??ven blir b??ttre, d?? den kanske k??rs snabbare eller inte k??rs alls om det inte beh??vs.

Baserat p?? dessa tv?? exempel s?? vill jag s??ga att kod som ??r snygg f??r det mesta ??r bra, och vice versa. Men det finns s?? klart exempel som pekar ??t andra h??llet. Om en klass blir f??r komplex s?? vill man kanske dela upp den till tv??, men om alla funktionerna i klassen h??r tillsammans s?? m??ste man v??lja mellan att ha en komplex klass, eller tv?? klasser som ??r n??ra kopplade. Allts?? ett h??gre m??tv??rde f??r koppling, och en l??g kohesion. Det g??r det sv??rare att f?? en bra ??verblick ??ver vilka funktioner som finns och vad de g??r, f??r nu s?? har man tv?? klasser som inneh??ller v??ldigt lika saker. Man f??r v??lja mellan att ha sv??rt att se helheten, eller sv??rt att se saker p?? detaljniv??. En tredje l??sning kan vara att skriva om sin kod p?? djupet, s?? att det ??r mer rimligt att ha flera mindre klasser ??n en stor.

Kodduplikation ??r ett problem till som kan l??sas genom att ha mindre funktioner. Om varje funktion endast g??r en sak, s?? kan den ??teranv??ndas till flera saker. S?? ist??llet f??r att ha en stor funktion som k??r samma kod flera g??nger baserat p?? en if-sats eller liknande, s?? kan man ha att den k??r en funktion som inneh??ller den koden. P?? det s??ttet s?? sparar man plats/tecken, kan ??teranv??nda funktionen, och f??r l??ttare en ??verblick ??ver vilka funktioner man har och vad de g??r. Koden blir b??de snyggare och b??ttre. Det negativa ??r att det kan l??tt bli extra mycket kod, vilket ??kar storleken och komplexiteten, s?? man m??ste ??verv??ga vad som ??r b??st f??r varje individuell situation.

Personligen s?? tycker jag att det ??r bra att ha en snygg kod, men det ??r b??ttre att ha en fungerande men ful kod ??n en kod som ??r snygg och inte fungerar. Nu s?? t??nker jag ??nd?? att koden man diskuterar ??r f??rv??ntad att fungera, och i s?? fall s?? ??r det alltid bra med en fin kod. En fin kod l??r vara enklare att underh??lla och bygga ut p??, vilket jag tycker k??nns som en v??ldigt viktig grej. Det ??r ocks?? enklare att f?? en ??verblick och en f??rst??else n??r en kod ??r snygg och anv??ndarv??nlig.

Jag tror att det kan ta l??ngre tid att f?? till en snygg kod, p?? samma s??tt som att det kan ta l??ngre tid att f?? spagettikod att inte l??ngre vara spagettikod. Sj??lv s?? brukar jag l??tt hamna i att man skriver en stor del av koden i en funktion, d?? man inte visste vilka funktioner man ville ha fr??n b??rjan. Som exempel kan vi ta koden f??r den h??r sidan. Jag skapade funktioner och klasser f??r allt som jag visste skulle beh??vas (till exempel kort och kortlek) och n??r jag hade en sorts ???ram??? s?? fyllde jag i den med sj??lva koden. Delar av den koden blev mer komplex ??n jag hade t??nkt mig, s?? jag fick flytta ut den till sina egna funktioner. Sj??lva flytten r??knar jag till tiden det tar att f?? en snygg kod, f??r den fungerade redan innan, men blev b??ttre efter.
Min slutsats ??r att s?? l??nge koden fungerar s?? fungerar den, men den ??r b??ttre b??de fr??n en kvalitetssynpunkt och fr??n en l??tt-att-f??rst?? vinkel om den ??r ???snygg???. Snygghet f??r mig ??r hur f??rst??elig, underh??llsv??nlig, och snabb koden ??r. Ju \"enklare\" funktionerna ??r, detso l??ttare ??r det ocks?? att testa dem.
{% endapply %}

{% endblock %}", "proj/cleancode.html.twig", "C:\\Users\\Emelie\\dbwebb\\dbwebb-kurser\\mvc\\me\\report\\templates\\proj\\cleancode.html.twig");
    }
}
