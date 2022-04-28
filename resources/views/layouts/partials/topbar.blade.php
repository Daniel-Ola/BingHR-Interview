<nav class="container mx-auto py-3" style="border-bottom: 2px solid #F6F9FC;">

    <div class="d-flex justify-content-between align-items-center mt-3" style="width: 100%;">
        <div class="d-md-flex d-none g-3 me-auto align-items-center">
            <div class="col-auto text-center d-flex align-items-center nav-page-title" style="margin-right: 3rem; margin-left: 1.5rem;">
                <h5>Users</h5>
            </div>
            <div class="col-auto" style="margin-right: 1.5rem">

                <div class="input-group" style="width: 100px; background-color: #fff;">
                    <select name="sort_by_year" class="form-control nav-select outline-none w-100 border-0" data-url="{{ route('get_users') }}">
                        <option selected value="">Year</option>
                    </select>
                    <div class="position-absolute top-0 bottom-0" style="right: 5px; color: #DFE4EE">
                        <div class="d-flex flex-column align-items-center h-100 justify-content-around">
                            <i class="fa fa-caret-up" style="top: 5px; position: relative"></i>
                            <i class="fa fa-caret-down" style="bottom: 5px; position: relative"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-auto">

                <div class="input-group my-nav-search" style="width: 300px; background-color: #fff; border-radius: 50px">
                    <input type="text" class="form-control" id="nav-search" placeholder="Search..." style="border: none">
                    <div class="position-absolute top-0 bottom-0" style="right: 10px; color: #DFE4EE">
                        <div class="d-flex align-items-center h-100">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="d-none d-lg-block">
            <div class="d-flex flex-row">
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Language
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <li><a class="dropdown-item" href="#">English</a></li>
                        <li><a class="dropdown-item" href="#">Yoruba</a></li>
                        <li><a class="dropdown-item" href="#">Hausa</a></li>
                        <li><a class="dropdown-item" href="#">Igbo</a></li>
                    </ul>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Reports
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <li><a class="dropdown-item" href="#">Assignment</a></li>
                        <li><a class="dropdown-item" href="#">Exam</a></li>
                        <li><a class="dropdown-item" href="#">Inference</a></li>
                    </ul>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Project
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                        <li><a class="dropdown-item" href="#">Project X</a></li>
                        <li><a class="dropdown-item" href="#">Project Y</a></li>
                        <li><a class="dropdown-item" href="#">Project Z</a></li>
                    </ul>
                </div>
                <div class="nav-item">
                    <a class="nav-link nav-item-has-dot" aria-current="page" href="#">
                        <i class="fa fa-envelope"></i>
                        <i class="fa fa-circle" style="font-size: 10px"></i>
                    </a>
                </div>
                <div class="nav-item">
                    <a class="nav-link nav-item-has-dot" aria-current="page" href="#">
                        <i class="fa fa-bell"></i>
                        <i class="fa fa-circle" style="font-size: 10px"></i>
                    </a>
                </div>
                <div class="nav-item">
                    <a class="nav-link position-relative" aria-current="page" href="#" style="color: #000; font-size: 15px">
                        <i class="fa fa-user"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="d-block d-lg-none justify-content-between" id="collapse-navs">
            <button class="btn btn-link d-none" id="collapse-sidebar">
                <i class="fa-solid fa-ellipsis-vertical" style="font-size: 30px; color: #000"></i>
                <i class="fa-solid fa-ellipsis-vertical" style="font-size: 30px; color: #000"></i>
                <i class="fa-solid fa-ellipsis-vertical" style="font-size: 30px; color: #000"></i>
{{--                <i class="fa fa-bars" style="font-size: 30px; color: #000"></i>--}}
            </button>
            <button class="btn btn-link" id="collapse-topbar">
                <i class="fa fa-bars" style="font-size: 30px; color: #000"></i>
            </button>
        </div>
    </div>

</nav>
