<nav class="nav navbar navbar-expand-sm navbar-light bg-primary text-light justify-content-end"><!-- header parts -->
<ul class="navbar-nav">
  <li class="nav-item me-5"><a class="nav-link" href="/home">Home</a></li>
  @can('admin')
  <li class="nav-item me-5"><a class="nav-link" href="/user">ユーザー一覧</a></li>
  <li class="nav-item me-5"><a class="nav-link" href="/item">商品管理</a></li>
  @endcan
  <li class="nav-item me-5"><a class="nav-link" href="/logout">logout</a></li>
</ul>
</nav>