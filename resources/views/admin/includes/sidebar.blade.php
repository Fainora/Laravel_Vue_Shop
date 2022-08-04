<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('main.index') }}" class="brand-link">
      <img src="adminlte/dist/img/AdminLTELogo.png" alt="MyShop logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">MyShop</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-shopping-bag"></i>
              <p>Заказы</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('products.index') }}" class="nav-link">
              <i class="nav-icon fas fa-tshirt"></i>
              <p>Продукты</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('categories.index') }}" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>Категории</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('tags.index') }}" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>Теги</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('colors.index') }}" class="nav-link">
              <i class="nav-icon fas fa-palette"></i>
              <p>Цвета</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('users.index') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Пользователи</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
