<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">

                <li class="nav-item {{  request()->routeIs('admin.posts.index') ? 'active' : '' }}">
                    <a href="{{route('admin.posts.index')}}">
                        <i class="fas fa-pen-square"></i>
                        <p>Yangiliklar</p>
                    </a>
                </li>


            </ul>


        </div>
    </div>
</div>


