
@php
    $totalPosts = $totalPosts ?? \App\Models\Post::count();
@endphp
<!-- Сайдбар -->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!-- Бренд в сайдбаре -->
    <div class="sidebar-brand">
        <a href="./index.html" class="brand-link">
            <img
                src="../../dist/assets/img/AdminLTELogo.png"
                alt="AdminLTE Logo"
                class="brand-image opacity-75 shadow"
            />
            <span class="brand-text fw-light">Admin Panel</span>
        </a>
    </div>
    <!-- Конец бренда в сайдбаре -->

    <!-- Обертка сайдбара -->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <!-- Меню сайдбара -->
            <ul
                class="nav sidebar-menu flex-column"
                data-lte-toggle="treeview"
                role="menu"
                data-accordion="false"
            >
                <!-- Пункт меню POSTS -->
                <li class="nav-item">
                    <a href="{{route('admin.index')}}" class="nav-link">
                        <i class="nav-icon bi bi-file-earmark-text"></i>
                        <p>
                            POSTS
                            <span class="badge bg-info ms-2">{{$totalPosts}}</span>
                        </p>
                    </a>
                </li>
                <!-- Конец пункта меню POSTS -->
            </ul>
            <!-- Конец меню сайдбара -->
        </nav>
    </div>
    <!-- Конец обертки сайдбара -->
</aside>
<!-- Конец сайдбара -->

