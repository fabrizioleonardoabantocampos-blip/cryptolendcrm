  @php
      function renderMenuItem($item, $level = 0)
      {
          // Si es un divisor
          if (isset($item['divider']) && $item['divider']) {
              return '<li class="nav-devider"></li><li class="nav-label">' . $item['label'] . '</li>';
          }

          $html = '<li>';

          // Determinar si tiene hijos
          $hasChildren = isset($item['children']) && !empty($item['children']);

          // Construir el enlace
          if ($hasChildren) {
              $html .= '<a class="has-arrow" href="javascript:void(0)" aria-expanded="false">';
          } else {
              // Validar si existe la ruta
              $href = 'javascript:void(0)';
              if (isset($item['route']) && Route::has($item['route'])) {
                  $href = route($item['route']);
              }
              $html .= '<a href="' . $href . '">';
          }

          // Agregar icono si existe
          if (isset($item['icon'])) {
              $html .= '<i class="' . $item['icon'] . '"></i>';
          }

          // Agregar título
          $html .= '<span class="hide-menu">' . $item['title'];

          // Agregar badge si existe
          if (isset($item['badge'])) {
              $html .=
                  ' <span class="label label-rouded ' .
                  $item['badge']['class'] .
                  ' pull-right">' .
                  $item['badge']['count'] .
                  '</span>';
          }

          $html .= '</span></a>';

          // Si tiene hijos, renderizar submenu
          if ($hasChildren) {
              $html .= '<ul aria-expanded="false" class="collapse">';
              foreach ($item['children'] as $child) {
                  $html .= renderMenuItem($child, $level + 1);
              }
              $html .= '</ul>';
          }

          $html .= '</li>';

          return $html;
  } @endphp
  <div class="left-sidebar">
      <!-- Sidebar scroll-->
      <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
              <ul id="sidebar-menu">
                  @foreach ($items as $item)
                      {!! renderMenuItem($item) !!}
                  @endforeach
              </ul>


          </nav>
          <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
  </div>
