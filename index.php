<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель приложений</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <header class="header">
        <h1 class="title">Домашний хаб</h1>
        <p class="subtitle">
            Добро пожаловать в вашу центральную панель управления. Выберите<br>
            приложение для быстрого доступа.
        </p>
    </header>

    <main class="apps-grid">
        <div class="app-card">
            <div class="app-icon laravel-icon">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                    <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                    <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                </svg>
            </div>
            <h3 class="app-title">Laravel</h3>
            <p class="app-description">
                PHP веб-фреймворк для создания<br>
                современных веб-приложений
            </p>
            <span class="app-address" hidden>http://laravel</span>
            <button class="app-button">Открыть приложение</button>
        </div>

        <div class="app-card">
            <div class="app-icon symfony-icon">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V7" stroke="currentColor" stroke-width="2"/>
                    <path d="M3 7L12 2L21 7L12 12L3 7Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                    <path d="M12 12V22" stroke="currentColor" stroke-width="2"/>
                </svg>
            </div>
            <h3 class="app-title">Symfony</h3>
            <p class="app-description">
                Мощный PHP фреймворк для<br>
                корпоративных приложений
            </p>
            <span class="app-address" hidden>http://symfony</span>
            <button class="app-button">Открыть приложение</button>
        </div>

        <div class="app-card">
            <div class="app-icon ollama-icon">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                    <path d="M12 1V3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <path d="M12 21V23" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <path d="M4.22 4.22L5.64 5.64" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <path d="M18.36 18.36L19.78 19.78" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <path d="M1 12H3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <path d="M21 12H23" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <path d="M4.22 19.78L5.64 18.36" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <path d="M18.36 5.64L19.78 4.22" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </div>
            <h3 class="app-title">Ollama AI</h3>
            <p class="app-description">
                Локальная платформа для запуска больших<br>
                языковых моделей
            </p>
            <span class="app-address" hidden>http://192.168.1.171:8080</span>
            <button class="app-button">Открыть приложение</button>
        </div>
    </main>

    <footer class="footer">
        <p>Панель управления приложениями • 2025</p>
    </footer>
</div>

<script src="script.js"></script>
</body>
</html>
