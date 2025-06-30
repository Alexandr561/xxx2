<!doctype html>
<html lang="en">
<!-- Начало Head -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Подключение шрифтов -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
        integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
        crossorigin="anonymous"
    />
    <!-- Конец подключения шрифтов -->

    <!-- Плагин для кастомных скроллбаров -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
        integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg="
        crossorigin="anonymous"
    />
    <!-- Конец плагина скроллбаров -->

    <!-- Иконки Bootstrap -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
        crossorigin="anonymous"
    />
    <!-- Конец иконок Bootstrap -->

    <!-- Основные стили AdminLTE -->
    <link rel="stylesheet" href="../../dist/css/adminlte.css" />
    <!-- Конец стилей AdminLTE -->

    <!-- Кастомные стили -->
    <style>
        .sidebar {
            width: 280px; /* Ширина сайдбара */
        }
        .main-content {
            margin-left: 280px; /* Отступ для основного контента */
            padding: 20px; /* Внутренние отступы */
        }
    </style>
    <!-- Конец кастомных стилей -->
</head>
<!-- Конец Head -->

<!-- Начало Body -->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<!-- Обертка приложения -->
<div class="app-wrapper">
    <!-- Шапка -->
    <nav class="app-header navbar navbar-expand bg-body">
        <div class="container-fluid">
            <!-- Левая часть шапки -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <!-- Кнопка меню (бургер) -->
                    <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                        <i class="bi bi-list"></i>
                    </a>
                </li>
            </ul>
            <!-- Конец левой части шапки -->

            <!-- Правая часть шапки -->
            <ul class="navbar-nav ms-auto">
                <!-- Кнопка поиска -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="bi bi-search"></i>
                    </a>
                </li>
                <!-- Конец кнопки поиска -->

                <!-- Меню пользователя -->
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img
                            src="../../dist/assets/img/user2-160x160.jpg"
                            class="user-image rounded-circle shadow"
                            alt="User Image"
                        />
                        <span class="d-none d-md-inline">Admin</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                        <!-- Шапка меню пользователя -->
                        <li class="user-header text-bg-primary">
                            <img
                                src="../../dist/assets/img/user2-160x160.jpg"
                                class="rounded-circle shadow"
                                alt="User Image"
                            />
                            <p>
                                Admin User
                                <small>Member since Nov. 2023</small>
                            </p>
                        </li>
                        <!-- Конец шапки меню пользователя -->
                        <!-- Футер меню пользователя -->
                        <li class="user-footer">
                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                            <a href="#" class="btn btn-default btn-flat float-end">Sign out</a>
                        </li>
                        <!-- Конец футера меню пользователя -->
                    </ul>
                </li>
                <!-- Конец меню пользователя -->
            </ul>
            <!-- Конец правой части шапки -->
        </div>
    </nav>
    <!-- Конец шапки -->


    <!-- SIDEBAR -->
    @include('includes.adminSidebar')
    <!-- /SIDEBAR -->

    <!-- Основное содержимое -->
    <main class="app-main">
        <!-- Здесь будет загружаться основной контент -->
        <div class="main-content">
            @yield('content')
        </div>
    </main>
    <!-- Конец основного содержимого -->
</div>
<!-- Конец обертки приложения -->

<!-- Скрипты -->
<!-- Плагин для кастомных скроллбаров -->
<script
    src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
    integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ="
    crossorigin="anonymous"
></script>
<!-- Конец плагина скроллбаров -->

<!-- Popper.js (необходим для Bootstrap) -->
<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"
></script>
<!-- Конец Popper.js -->

<!-- Bootstrap 5 JS -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"
></script>
<!-- Конец Bootstrap 5 JS -->

<!-- Основные скрипты AdminLTE -->
<script src="../../dist/js/adminlte.js"></script>
<!-- Конец скриптов AdminLTE -->

<!-- Настройка скроллбаров -->
<script>
    const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
    const Default = {
        scrollbarTheme: 'os-theme-light', // Тема скроллбара
        scrollbarAutoHide: 'leave', // Автоскрытие скроллбара
        scrollbarClickScroll: true, // Возможность скролла по клику
    };

    // Инициализация скроллбаров после загрузки DOM
    document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (sidebarWrapper && OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined) {
            OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                scrollbars: {
                    theme: Default.scrollbarTheme,
                    autoHide: Default.scrollbarAutoHide,
                    clickScroll: Default.scrollbarClickScroll,
                },
            });
        }
    });
</script>
<!-- Конец настройки скроллбаров -->
<!-- Конец скриптов -->
</body>
<!-- Конец Body -->
</html>
