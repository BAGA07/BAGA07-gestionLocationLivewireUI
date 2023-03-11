<?php

use Illuminate\Support\Str;

function userFullName()
{

    return auth()->user()->prenom . " " . auth()->user()->nom;
}

//Comparaison de la route actuel a la route passer en parametre
function setMenuClass($route, $classe)
{
    $routeActuel = request()->route()->getName();
    if (contains($routeActuel, $route)) {
        return $classe;
    }
}

//Comparaison de la route actuel a la route passer en parametre
function setMenuActive($route)
{
    $routeActuel = request()->route()->getName();
    if ($routeActuel === $route) {
        return "active";
    }
}

function contains($container, $contenu)
{
    return Str::contains($container, $contenu);
}

function getRolesName()
{
    $rolesName = "";
    $i = 0;
    foreach (auth()->user()->roles as $role) {
        $rolesName .= $role->nom;

        if ($i < sizeof(auth()->user()->roles) - 1) {
            $rolesName .= ",";
        }
        $i++;
    }
    return $rolesName;
}
