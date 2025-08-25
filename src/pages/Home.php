<?php

function Lists($children)
{
    return "<li class=\"list-group-item\">{$children}</li>";
}

function Home()
{
    return <<<HTML
        <div class="container">
            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Welcome to the Home Page</h1>
                    <p class="col-md-8 fs-4">This is a simple homepage example using Bootstrap 5. You can use this as a starting point for your PHP SPA project.</p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h2>Feature One</h2>
                    <p>Quickly build modern web apps with PHP and Bootstrap 5.</p>
                </div>
                <div class="col-md-4">
                    <h2>Feature Two</h2>
                    <p>Reusable components and responsive layouts out of the box.</p>
                </div>
                <div class="col-md-4">
                    <h2>Feature Three</h2>
                    <p>Easy to customize and extend for your needs.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Latest News
                        </div>
                        <ul class="list-group list-group-flush">
                            <Lists>PHP SPA v1.0 released!</Lists>
                            <Lists>Bootstrap 5 integration complete.</Lists>
                            <Lists>New documentation available.</Lists>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <form>
                        <h4 class="mb-3">Subscribe for Updates</h4>
                        <div class="mb-3">
                            <label for="emailInput" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="emailInput" placeholder="name@example.com">
                        </div>
                        <button type="submit" class="btn btn-success">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    HTML;
}
