	<div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Menu</li>
		    @if ($submenu === "Data Customer")
		    <li class="active">
		    @else
		    <li>
		    @endif
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i><span class="nav-text">Customer</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/customer/data" class="{{ ($submenu === "Data Customer") ? 'active' : '' }}">Data Customer</a></li>
                            <li><a href="/tambahcustomer1"class="">Tambah Customer 1</a></li>
			    <li><a href="/tambahcustomer2" class="">Tambah Customer 2</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>