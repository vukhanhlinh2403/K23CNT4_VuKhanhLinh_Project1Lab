<ul class="list-group">
    <li class="list-group-item active" style="color": red; background:blue;>
        @if(Session::has('username'))
            <span class="fw-bold">Hello, {{ Session::get('username') }}</span>
        @else
            <a href="/vkl-admins/login" >Đăng nhập</a>
        @endif
    </li>
    <li class="list-group-item active" aria-current="true">
        <a href="/vkl-admins/vklDsQuanTris/vklDanhMucs">danh sach quan tri</a>

    </li>
    <li class="list-group-item">
        <a href="/vkl-admins/vkl-loai-san-phams">
            loai san pham
        </a>
    </li>
    <li class="list-group-item">
        <a href="/vkl-admins/vkl-san-phams">
             san pham
        </a>
    </li>
    <li class="list-group-item">
        <a href="/vkl-admins/vkl-quan-tris">
             quan tri
        </a>
    </li>
    <li class="list-group-item">
        <a href="/vkl-admins/vkl-khach-hangs">
             khach hang
        </a>
    </li>
    <li class="list-group-item">
        <a href="/vkl-admins/vkl-hoa-dons">
             hoa don
        </a>
    </li>
    <li class="list-group-item">
        <a href="/vkl-admins/vkl-ct-hoa-dons">
            chi tiet hoa don
        </a>
    </li>
    <li class="list-group-item">
        <a href="/vkl-admins/vkl-tin-tucs">
            tin tuc
        </a>
    </li>
    <li class="list-group-item">A fourth item</li>
    <li class="list-group-item">And a fifth one</li>
  </ul>