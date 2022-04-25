<nav class="container mx-auto">

    <div class="d-flex justify-content-between align-items-center mt-3" style="width: 100%;">
        <div class="d-flex g-3 me-auto align-items-center">
            <div class="col-auto" style="margin-right: 3rem">
                <h3>Users</h3>
            </div>
            <div class="col-auto" style="margin-right: 1.5rem">

                <div class="position-relative" style="width: 100px; height: 42px;">
                    @include("layouts.components.NiceSelect.nice-select", [
                                'placeholder' => 'Year',
                                'options' => ['2022', '2021', '2020']
                            ])
                </div>

            </div>
            <div class="col-auto">

                <div class="input-group" style="width: 300px; background-color: #fff; border-radius: 50px">
                    <input type="text" class="form-control" id="nav-search" placeholder="Search...">
                    <div class="position-absolute top-0 bottom-0" style="right: 10px; color: #DFE4EE">
                        <div class="d-flex align-items-center h-100">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="">
            <div class="d-flex flex-row">
                <div class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</nav>
