@extends('layouts.app', ['class' => 'home'])

@section('content')
    <header>
        <nav>
            <ul class="has-text-centered">
                <li><a href="#welcome">Welcome</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                {{--<li><a href="#blog">Blog</a></li>--}}
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="banner">
        <div class="parallax-window" data-image-src="{{ asset('/img/heading.jpg') }}">
            <div class="title-container has-text-centered">
                <h2 class="title is-4">Hi, I'm</h2>
                <h1 class="title is-1">nxu</h1>
            </div>
        </div>
    </section>

    <section class="intro" id="welcome">
        <div class="container">
            <div class="columns">
                <div class="column has-text-right avatar-column">
                    <span class="avatar">
                        <img src="/img/nxu.jpg" alt="nxu">
                    </span>
                </div>

                <div class="column is-1 filler-column">&nbsp;</div>

                <div class="column is-7 has-text-left intro-text-column">
                    <h2 class="title is-1">Welcome</h2>

                    <p>
                        I'm nxu, short for Zsolt Fekete.
                        <br>
                        I am a {{ \Carbon\Carbon::create(1993, 04, 22)->age }} years old backend-focused full-stack web developer.
                        <br>
                        I love clean code. My all-time favorite is the Laravel Framework.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="skills" id="skills">
        <h2 class="title is-1 has-text-centered">
            Skills
        </h2>

        <div class="container has-text-centered">
            <div class="skill laravel">
                <div class="skill-text">
                    <span class="skill-title">
                        Laravel
                    </span>

                    <span class="skill-description">
                        & Lumen <br> <br>
                        <q>The PHP Framework for Web Artisans</q>
                    </span>
                </div>
            </div>

            <div class="skill php">
                <div class="skill-text">
                    <span class="skill-title">
                        PHP
                    </span>

                    <span class="skill-description">
                        ... the right way <br> <br>
                        SOLID; PSR <br>
                        Composer <br>
                        PHPUnit
                    </span>
                </div>
            </div>

            <div class="skill html5">
                <div class="skill-text">
                    <span class="skill-title">
                        HTML 5
                    </span>

                    <span class="skill-description">

                    </span>
                </div>
            </div>

            <div class="skill javascript">
                <div class="skill-text">
                    <span class="skill-title">
                        JavaScript
                    </span>

                    <span class="skill-description">
                        Vue, jQuery <br>
                        ES6 <br>
                        Node / NPM / Yarn <br>
                        Webpack, Gulp
                    </span>
                </div>
            </div>

            <div class="skill css">
                <div class="skill-text">
                    <span class="skill-title">
                        CSS 3
                    </span>

                    <span class="skill-description">
                        SCSS / LESS <br>
                        Bootstrap, Bulma <br>
                        Animations
                    </span>
                </div>
            </div>

            <div class="skill git">
                <div class="skill-text">
                    <span class="skill-title">
                        Git
                    </span>

                    <span class="skill-description">
                        Branching <br>
                        Merge, Rebase <br>
                        GitHub, GitLab
                    </span>
                </div>
            </div>

            <div class="skill linux">
                <div class="skill-text">
                    <span class="skill-title">
                        Linux
                    </span>

                    <span class="skill-description">
                        Ubuntu Server <br>
                        Nginx, PHP, MySQL <br>
                        Memcached, Redis
                    </span>
                </div>
            </div>

            <div class="skill security">
                <div class="skill-text">
                    <span class="skill-title">
                        Security
                    </span>

                    <span class="skill-description">
                        OWASP <br>
                        AES, RSA, HMAC <br>
                        OpenSSL, NaCl
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section class="projects" id="projects">
        <h2 class="title is-1 has-text-centered">
            Projects
        </h2>

        <div class="container">
            <div class="tile-container">
                <div class="tile is-ancestor">
                    <div class="tile is-vertical is-8">
                        <div class="tile">
                            <div class="tile is-parent is-vertical">
                                <article class="tile is-child laravel-barion">
                                    <p class="title">Laravel-Barion</p>

                                    <p>
                                        This is my first Composer package published on Packagist.
                                    </p>

                                    <p>
                                        It is a basic wrapper around the API of the Barion payment provider.
                                    </p>

                                    <p>
                                        <i class="fa fa-fw fa-github"></i>
                                        <a href="https://github.com/laravelhungary/laravel-barion" target="_blank">
                                            See on GitHub
                                        </a>
                                    </p>
                                </article>
                                <article class="tile is-child menetrend">
                                    <p class="title">Menetrend.org</p>

                                    <p>
                                        The official bus schedule site of Hungary used to suck (it is a lot better now).
                                    </p>

                                    <p>
                                        I made an attempt to create a minimalistic, responsive alternative.
                                    </p>

                                    <p>
                                        <i class="fa fa-fw fa-github"></i>
                                        <a href="https://github.com/nXu/nxu-menetrend" target="_blank">
                                            See on GitHub
                                        </a>

                                        <span class="separator">&middot;</span>

                                        <i class="fa fa-fw fa-link"></i>
                                        <a href="https://menetrend.org" target="_blank">
                                            Visit the site
                                        </a>
                                    </p>
                                </article>
                            </div>
                            <div class="tile is-parent">
                                <article class="tile is-child feki">
                                    <p class="title">My Job</p>

                                    <p>
                                        I currently work at a fantastic company called Feki Webstudio.
                                        I am mainly responsible for the upgrade of our legacy back-end
                                        to a modern, Laravel based system.
                                    </p>

                                    <p>
                                        We create a lot of amazing websites:
                                    </p>

                                    <ul>
                                        <li>Smaller business sites</li>
                                        <li>Webshops</li>
                                        <li>News portals</li>
                                        <li>Larger scale web applications</li>
                                        <li>And a lot more</li>
                                    </ul>

                                    <p>
                                        <i class="fa fa-fw fa-link"></i>
                                        <a href="http://www.fekiwebstudio.hu/hu/referenciak.html" target="_blank">
                                            Check out our projects
                                        </a>
                                    </p>
                                </article>
                            </div>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child flk">
                                <p class="title">Fertorakosi-Loveszklub.hu</p>

                                <p>
                                    A Laravel based website for our local shooting club with responsive front-end.
                                </p>

                                <p>
                                    <i class="fa fa-fw fa-github"></i>
                                    <a href="https://github.com/fertorakosi-loveszklub/flk-honlap-3" target="_blank">
                                        See on GitHub
                                    </a>

                                    <span class="separator">&middot;</span>

                                    <i class="fa fa-fw fa-link"></i>
                                    <a href="https://www.fertorakosi-loveszklub.hu" target="_blank">
                                        Visit the site
                                    </a>
                                </p>
                            </article>
                        </div>
                    </div>
                    <div class="tile is-parent is-vertical">
                        <article class="tile is-child indavideo">
                            <p class="title">Indavideo Downloader</p>

                            <p>
                                Indavideo.hu is Hungary's biggest video streaming site.
                            </p>

                            <p>
                                This is a service that lets users download mp4 videos directly.
                                It has an old, legacy codebase and is to be updated soon.
                            </p>

                            <p>
                                <i class="fa fa-fw fa-github"></i>
                                <a href="https://github.com/nXu/indadl" target="_blank">
                                    See on GitHub
                                </a>

                                <span class="separator">&middot;</span>

                                <i class="fa fa-fw fa-link"></i>
                                <a href="https://indavideo.nxu.hu" target="_blank">
                                    Visit the site
                                </a>
                            </p>
                        </article>
                        <article class="tile is-child nbf">
                            <p class="title">nbrainfuck</p>

                            <p>
                                This is an IDE (written in C#, using WPF) for brainfuck development.
                            </p>

                            <p>
                                No, seriously. This is really a brainfuck IDE with step-by-step debugging,
                                multiple I/O management and Brainloller import / export.
                            </p>

                            <p>
                                <i class="fa fa-fw fa-github"></i>
                                <a href="https://github.com/nXu/nbrainfuck" target="_blank">
                                    See on GitHub
                                </a>
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </div>

        <div class="container has-text-centered more-info">
            <a href="https://github.com/nXu" target="_blank">
                <i class="fa fa-fw fa-github"></i>
                <span>My GitHub</span>
            </a>

            <br>

            <a href="http://stackoverflow.com/users/1353677/nxu" target="_blank">
                <img src="https://stackoverflow.com/users/flair/1353677.png" width="208" height="58" alt="profile for nXu at Stack Overflow, Q&amp;A for professional and enthusiast programmers" title="profile for nXu at Stack Overflow, Q&amp;A for professional and enthusiast programmers">
            </a>
        </div>
    </section>

    <section class="contact" id="contact">
        <h2 class="title is-1 has-text-centered">Contact</h2>

        <div class="container has-text-centered">
            <a href="mailto:nxu@nxu.hu">
                nxu@nxu.hu
            </a>
        </div>
    </section>

    <footer class="has-text-centered">
        <p>
            &copy; {{ date('Y') }} nxu
        </p>
    </footer>
@endsection
