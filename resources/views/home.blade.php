<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        EDParque - Home
    </title>

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="{{ URL::asset('css/home.css') }} " rel="stylesheet" />
</head>

<header class="header">
    <div class="header-content responsive-wrapper">
        <div class="header-logo">
            <a href="#">
                <div>
                    <img src="https://assets.codepen.io/285131/untitled-ui-icon.svg" />
                </div>
                <img src="https://assets.codepen.io/285131/untitled-ui.svg" />
            </a>
        </div>
        <div class="header-navigation">
            <nav class="header-navigation-links">
                <a href="#"> Home </a>
                <a href="#"> Turma </a>
                <a href="#"> Grupos </a>
                <a href="#"> Estudantes </a>
            </nav>
            <div class="header-navigation-actions">
                <a href="#" class="icon-button">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                </a>
                <a href="#" class="icon-button">
                    <i class="fa fa-bell"></i>
                </a>
                <a href="#" class="avatar">
                    <img src="https://uifaces.co/our-content/donated/gPZwCbdS.jpg" alt="" />
                </a>
            </div>
        </div>
        <a href="#" class="button">
            <i class="ph-list-bold"></i>
            <span>Menu</span>
        </a>
    </div>
</header>
<main class="main">
    <div class="responsive-wrapper">
        <div class="main-header">
            <h1>Definições</h1>
            <div class="search">
                <input type="text" placeholder="Procurar" />
                <button type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
        <div class="horizontal-tabs">
            <a href="#" class="active">Os Meus Detalhes</a>
            <a href="#">Perfil</a>
            <a href="#">Notificações</a>
            <a href="#">Segurança e Início de Sessão</a>
        </div>
        <div class="content-header">
            <div class="content-header-intro">
                <h2>Os Meus Detalhes</h2>
                <p>Edita os detalhes da tua conta.</p>
            </div>
            <div class="content-header-actions">
                <a href="#" class="button">
                    <i class="ph-faders-bold"></i>
                </a>
                <a href="#" class="button">
                    <i class="ph-plus-bold"></i>
                    <span>Descarregar dados da Conta</span>
                </a>
            </div>
        </div>
        <div class="content">
            <div class="content-panel">
                <div class="vertical-tabs">
                    <a href="#" class="active">Ver todos</a>
                    <a href="#">Geral</a>
                    <a href="#">Privacidade</a>
                </div>
            </div>
            <div class="content-main">
                <div class="card-grid">
                    <article class="card">
                        <div class="card-header">
                            <div>
                                <span><img src="https://assets.codepen.io/285131/zeplin.svg" /></span>
                                <h3>Zeplin</h3>
                            </div>
                            <label class="toggle">
                                <input type="checkbox" checked>
                                <span></span>
                            </label>
                        </div>
                        <div class="card-body">
                            <p>Collaboration between designers and developers.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#">View integration</a>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card-header">
                            <div>
                                <span><img src="https://assets.codepen.io/285131/github.svg" /></span>
                                <h3>GitHub</h3>
                            </div>
                            <label class="toggle">
                                <input type="checkbox" checked>
                                <span></span>
                            </label>
                        </div>
                        <div class="card-body">
                            <p>Link pull requests and automate workflows.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#">View integration</a>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card-header">
                            <div>
                                <span><img src="https://assets.codepen.io/285131/figma.svg" /></span>
                                <h3>Figma</h3>
                            </div>
                            <label class="toggle">
                                <input type="checkbox" checked>
                                <span></span>
                            </label>
                        </div>
                        <div class="card-body">
                            <p>Embed file previews in projects.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#">View integration</a>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card-header">
                            <div>
                                <span><img src="https://assets.codepen.io/285131/zapier.svg" /></span>
                                <h3>Zapier</h3>
                            </div>
                            <label class="toggle">
                                <input type="checkbox">
                                <span></span>
                            </label>
                        </div>
                        <div class="card-body">
                            <p>Build custom automations and integrations with apps.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#">View integration</a>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card-header">
                            <div>
                                <span><img src="https://assets.codepen.io/285131/notion.svg" /></span>
                                <h3>Notion</h3>
                            </div>
                            <label class="toggle">
                                <input type="checkbox" checked>
                                <span></span>
                            </label>
                        </div>
                        <div class="card-body">
                            <p>Embed notion pages and notes in projects.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#">View integration</a>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card-header">
                            <div>
                                <span><img src="https://assets.codepen.io/285131/slack.svg" /></span>
                                <h3>Slack</h3>
                            </div>
                            <label class="toggle">
                                <input type="checkbox" checked>
                                <span></span>
                            </label>
                        </div>
                        <div class="card-body">
                            <p>Send notifications to channels and create projects.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#">View integration</a>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card-header">
                            <div>
                                <span><img src="https://assets.codepen.io/285131/zendesk.svg" /></span>
                                <h3>Zendesk</h3>
                            </div>
                            <label class="toggle">
                                <input type="checkbox" checked>
                                <span></span>
                            </label>
                        </div>
                        <div class="card-body">
                            <p>Link and automate Zendesk tickets.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#">View integration</a>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card-header">
                            <div>
                                <span><img src="https://assets.codepen.io/285131/jira.svg" /></span>
                                <h3>Atlassian JIRA</h3>
                            </div>
                            <label class="toggle">
                                <input type="checkbox">
                                <span></span>
                            </label>
                        </div>
                        <div class="card-body">
                            <p>Plan, track, and release great software.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#">View integration</a>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card-header">
                            <div>
                                <span><img src="https://assets.codepen.io/285131/dropbox.svg" /></span>
                                <h3>Dropbox</h3>
                            </div>
                            <label class="toggle">
                                <input type="checkbox" checked>
                                <span></span>
                            </label>
                        </div>
                        <div class="card-body">
                            <p>Everything you need for work, all in one place.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#">View integration</a>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card-header">
                            <div>
                                <span><img src="https://assets.codepen.io/285131/google-chrome.svg" /></span>
                                <h3>Google Chrome</h3>
                            </div>
                            <label class="toggle">
                                <input type="checkbox" checked>
                                <span></span>
                            </label>
                        </div>
                        <div class="card-body">
                            <p>Link your Google account to share bookmarks across your entire team.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#">View integration</a>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card-header">
                            <div>
                                <span><img src="https://assets.codepen.io/285131/discord.svg" /></span>
                                <h3>Discord</h3>
                            </div>
                            <label class="toggle">
                                <input type="checkbox" checked>
                                <span></span>
                            </label>
                        </div>
                        <div class="card-body">
                            <p>Keep in touch with your customers without leaving the app.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#">View integration</a>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card-header">
                            <div>
                                <span><img src="https://assets.codepen.io/285131/google-drive.svg" /></span>
                                <h3>Google Drive</h3>
                            </div>
                            <label class="toggle">
                                <input type="checkbox">
                                <span></span>
                            </label>
                        </div>
                        <div class="card-body">
                            <p>Link your Google account to share files across your entire team.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#">View integration</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</main>
