<header class='mb-3'>

    <nav class="navbar navbar-expand navbar-light ">
        <div class="container-fluid">
            <a href="#" class="burger-btn d-block">
                <i class="bi bi-justify fs-3"></i>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="container d-block">

                <a class="navbar-brand ms-4" href="#" style="font-size: 3.25rem">
{{--                    <img src="{{asset("assets/images/logo/logo.jpg")}}" style="height: 5.5rem;float: left">--}}

                    <span style="margin-top: 13px">
                      <h4 style="display: inline; margin-top: 13px">
                        Inventory With Stock Tracker System
                      </h4>
                    </span>

                </a>
            </div>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                </ul>
                <div class="dropdown">
                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="user-menu d-flex">
                            <div class="user-name text-end me-3">
                                <h6 class="mb-0 text-gray-600">Admin</h6>

                            </div>
                            <div class="user-img d-flex align-items-center">
                                <div class="avatar avatar-md">
                                    <img src="{{asset("assets/images/profile_pic/no_pic.jpg")}}">
                                </div>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                        <li>
                            <h6 class="dropdown-header">Hello,Admin</h6>
                            <hr class="dropdown-divider">
                        </li>

                        <li><a class="dropdown-item" href="/logout">
                                <i class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
