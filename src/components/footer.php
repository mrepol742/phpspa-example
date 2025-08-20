<?php

include_once './components/ListItem.php';

function Footer()
{
    $Year = date('Y');

    return <<<HTML
        <footer class="bg-dark text-white py-4 mt-auto">
            <div class="container text-center">
                <p class="mb-1">&copy; {$Year} Your Company Name. All rights reserved.</p>
    
                <ul class="list-inline mb-0">
                    <ListItem children='Home' to='#' />
                    <ListItem children='About' to='#' />
                    <ListItem children='Contact' to='#' />
                </ul>
            </div>
        </footer>
    HTML;
}
