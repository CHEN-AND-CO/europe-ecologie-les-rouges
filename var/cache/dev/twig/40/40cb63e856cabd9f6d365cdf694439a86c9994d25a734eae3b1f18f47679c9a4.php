<?php

/* @FrontOffice/header.html */
class __TwigTemplate_6cbfcd2e4977bd74861dd91f70c87d3d694d610dddb40b6d16dc06aa0af0b39a extends Twig_Template
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
        $__internal_014f512235f6fcaf338eac8fde60e6f16f57319e32cb24f496f3371f08c59f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_014f512235f6fcaf338eac8fde60e6f16f57319e32cb24f496f3371f08c59f4a->enter($__internal_014f512235f6fcaf338eac8fde60e6f16f57319e32cb24f496f3371f08c59f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FrontOffice/header.html"));

        // line 1
        echo "<!--
Copyright (C) 2018 Kévin Le Torc'h

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->
<header class=\"page-header container\">
    <div id=\"main-title\">
        <h1>ERR - Comptabilisez vos trajets écologiques</h1>
    </div>

    <ul class=\"hnav\">
        <li>
            <a href=\"/\">Accueil</a>
        </li>
        <li>
            <a href=\"/\">Liste</a>
        </li>
        <li>
            <a href=\"/\">Edition</a>
        </li>
    </ul>
</header>";
        
        $__internal_014f512235f6fcaf338eac8fde60e6f16f57319e32cb24f496f3371f08c59f4a->leave($__internal_014f512235f6fcaf338eac8fde60e6f16f57319e32cb24f496f3371f08c59f4a_prof);

    }

    public function getTemplateName()
    {
        return "@FrontOffice/header.html";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--
Copyright (C) 2018 Kévin Le Torc'h

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->
<header class=\"page-header container\">
    <div id=\"main-title\">
        <h1>ERR - Comptabilisez vos trajets écologiques</h1>
    </div>

    <ul class=\"hnav\">
        <li>
            <a href=\"/\">Accueil</a>
        </li>
        <li>
            <a href=\"/\">Liste</a>
        </li>
        <li>
            <a href=\"/\">Edition</a>
        </li>
    </ul>
</header>", "@FrontOffice/header.html", "/home/kevin/Projets/symfony/europe-ecologie-les-rouges/src/FrontOfficeBundle/Resources/views/header.html");
    }
}
