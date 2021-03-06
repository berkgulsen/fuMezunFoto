<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="{{url('dashboard')}}" class="simple-text logo-normal">
            DASHBOARD
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item @if(Request::segment(1)=='foto-ekle-akademik') active @endif">
                <a class="nav-link" href="{{url('foto-ekle-akademik')}}">
                    <i class="material-icons">face</i>
                    <p>Fotoğraf Ekle</p>
                </a>
            </li>
            <li class="nav-item @if(Request::segment(1)=='foto-sil') active @endif">
                <a class="nav-link" href="{{url('foto-sil')}}">
                    <i class="material-icons">face</i>
                    <p>Fotoğraf Sil</p>
                </a>
            </li>
            @role('superAdmin')
            <li class="nav-item @if(Request::segment(1)=='admin-listele') active @endif ">
                <a class="nav-link" href="{{url('admin-listele')}}">
                    <i class="material-icons">person</i>
                    <p>Admin Listele</p>
                </a>
            </li>
            <li class="nav-item @if(Request::segment(2)=='roles') active @endif ">
                <a class="nav-link" href="{{ route('admin.roles.index') }}">
                    <i class="material-icons">person</i>
                    <p>Roller</p>
                </a>
            </li>
            <li class="nav-item @if(Request::segment(2)=='permissions') active @endif ">
                <a class="nav-link" href="{{ route('admin.permissions.index') }}">
                    <i class="material-icons">person</i>
                    <p>İzinler</p>
                </a>
            </li>
            @endrole
            <li class="nav-item @if(Request::segment(1)=='kullanıcı-bilgi') active @endif">
                <a class="nav-link" href="{{url('kullanıcı-bilgi/'.auth()->user()->id)}}">
                    <i class="material-icons">settings</i>
                    <p>Kullanıcı Bilgileri</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{url('homepage')}}">
                    <i class="material-icons">dashboard2</i>
                    <p>Siteyi Görüntüle</p>
                </a>
            </li>
        </ul>
    </div>
</div>
