<?php

function Login()
{
    return <<<HTML
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-sm p-4" style="width: 350px;">
            <h4 class="text-center mb-4">Login</h4>
            <form>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password">
                </div>
                <button type="submit" class="btn btn-primary w-100 mb-3">Sign In</button>
                <a href="/register">Register</a>
            </form>
        </div>
    </div>
    HTML;
}
