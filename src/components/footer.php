<?php

function Footer()
{
    $Year = date('Y');

    return <<<HTML
    <footer class="bg-dark text-white py-4 mt-auto">
    <div class="container text-center">
        <p class="mb-1">&copy; {$Year} Your Company Name. All rights reserved.</p>
        <ul class="list-inline mb-0">
            <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">Home</a></li>
            <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">About</a></li>
            <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">Contact</a></li>
        </ul>
    </div>
    </footer>
    HTML;
}
