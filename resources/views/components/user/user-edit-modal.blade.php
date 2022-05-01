<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn btn-link close" style="text-decoration: none;" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times text-black" aria-hidden="true"></i>
{{--                    <span aria-hidden="true">&times;</span>--}}
                </button>
            </div>
            <div class="modal-body mt-2" style="padding: 0;">

                <form id="modal-form">
                    <input type="hidden" name="id">
                    <div style="padding: 1rem;">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="employee_id" placeholder="Employee ID *" name="employee_id">
                        </div>
                        <div class="form-row row mb-3">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="firstname" placeholder="First Name *" name="firstname">
                            </div>
                            <div class="form-group col-md-6 mt-3 mt-sm-0">
                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name *">
                            </div>
                        </div>
                        <div class="form-row row mb-3">
                            <div class="form-group col-md-4">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email ID *">
                            </div>
                            <div class="form-group col-md-4 mt-3 mt-sm-0">
                                <input type="tel" class="form-control" id="mobile_number" name="mobile_number" placeholder="Mobile No">
                            </div>
                            <div class="form-group col-md-4 mt-3 mt-sm-0">
                                <select id="role_id" name="role_id" class="form-control">
                                    <option selected>Select Role Type</option>
                                    @php
                                        $roles = \App\Models\Role::all();
                                    @endphp
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row row mb-3">
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username *">
                            </div>
                            <div class="form-group col-md-4 mt-3 mt-sm-0">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password *">
                            </div>
                            <div class="form-group col-md-4 mt-3 mt-sm-0">
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password *">
                            </div>
                        </div>
                        <div class="form-row row mb-3">
                            <div class="form-group col-12">
                                <label for="formFileSm" class="form-label">Profile Image</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="file" accept="image/*">
                            </div>
                        </div>
                    </div>


                    <div id="permissions-table-list" class="position-relative mt-3" style="overflow-y: auto;">
                        <small>* Click name to set permission</small>
                        <div id="permissions-table-heading" class="d-flex justify-content-around p-3" style="background-color: #EFF4FA;">
                            <div class="name-tab my-table-heading">Module Permission</div>
                            <div class="created-tab my-table-heading text-center">Read</div>
                            <div class="role-tab my-table-heading text-center">Write</div>
                            <div class="action-tab my-table-heading text-center">Delete</div>
                        </div>
                        <div class="" id="permissions-table-body">
                            @include('components.module-permissions')
                        </div>

                    </div>

                </form>

            </div>
            <div class="modal-footer" style="border-top: 0;">
                <button type="submit" form="modal-form" class="btn btn-primary btn-sm px-3" id="submitModalForm" style="border-radius: 10px">Edit User</button>
                <button type="button" class="btn btn-link text-muted" id="modal-closer" style="text-decoration: none" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
