<?php

use function Component\HTMLAttrInArrayToString;

function NavItem($children, $to, $isActive = false, ...$attributes)
{
    $attributes = HTMLAttrInArrayToString($attributes);
    $activeClass = $isActive ? ' active' : '';

    return <<<HTML
        <li class="nav-item">
            <Component.Link class="nav-link{$activeClass}" to="{$to}"{$attributes}>
                {$children}
            </Component.Link>
        </li>
    HTML;
}

function Navbar()
{
    return <<<HTML
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <Component.Link children="Navbar" class="navbar-brand" to="#" />

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <NavItem children="Home" to="#" isActive="1" aria-current="page" />
                    <NavItem children="Link" to="#" />

                    <li class="nav-item dropdown">
                        <Component.Link class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </Component.Link>
                        <ul class="dropdown-menu">
                            <li><Component.Link children="Action" class="dropdown-item" to="#" /></li>
                            <li><Component.Link children="Another action" class="dropdown-item" to="#" /></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><Component.Link children="Something else here" class="dropdown-item" to="#" /></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <Component.Link children="Disabled" class="nav-link disabled" aria-disabled="true" />
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
HTML;
}
