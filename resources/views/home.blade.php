@extends('layouts.app')

@section('content')
    <div class="container">
{{--         position-relative--}}

        <div class="d-flex justify-content-md-end justify-content-sm-between my-page-heading">
            <div class="d-block d-sm-none">
                <h4>Users</h4>
            </div>
            <div class="add-new-user-modal-btn">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-title="Add New User" data-button="Add User" data-url="{{ route('users.create') }}">Add User</button>
            </div>
        </div>

{{--        Table Section--}}
        <div class="w-100 py-2 mt-3" style="border: 2px solid #0395FF; background-color: #fff;">
            <div class="d-sm-flex d-block justify-content-between px-3">
                <div class="table-title d-flex justify-content-start align-items-start">
                    <h5>List Users</h5>
                </div>
                <div class="table-search">
                    <div class="input-group d-block d-sm-none" style="width: 100px; border: 2px solid #f0f0f0;">
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

                    <div class="input-group" style="width: 300px; background-color: #fff; border-radius: 50px">
                        <input type="text" class="form-control" id="table-search" placeholder="Search...">
                        <div class="position-absolute top-0 bottom-0" style="right: 10px; color: #DFE4EE">
                            <div class="d-flex align-items-center h-100">
                                <i class="fa fa-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="users-table-list" class="position-relative px-2 mt-3" style="overflow-y: auto;">
                <div id="table-wrapper">
                    <div id="table-heading" class="d-flex justify-content-around p-3" style="background-color: #EFF4FA;">
                        <div class="name-tab my-table-heading">Name</div>
                        <div class="created-tab my-table-heading">Created Date</div>
                        <div class="role-tab my-table-heading">Role</div>
                        <div class="action-tab my-table-heading">Action</div>
                    </div>
                    <div class="" id="table-body">
                        @include('components.user.user-list')
{{--                        @dd($users)--}}
                    </div>
                </div>

            </div>

            <div class="mt-3 d-flex flex-row-reverse justify-content-evenly align-items-center">
                <a href="{{ $users->nextPageUrl() }}">Next</a>
                <a href="{{ $users->previousPageUrl() }}">Previous</a>
            </div>
        </div>
        {{--        End Table Section--}}

        @include('components.user.user-edit-modal')
    </div>
@endsection

@push('custom-scripts')
    <script>

        // $("#exampleModal").modal();

        $(document).ready(function () {
            //setup ajax
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            function getUsers() {
                let url = "<?php echo route('get_users') ?>"
                console.log(url);
                $.get(url, function (data) {
                    console.log(data);
                    $('#table-body').empty().html(data)
                });
            }

            $('#exampleModal').on('show.bs.modal', function (event) {
                const level_selectors = ['select_super_admin', 'select_admin', 'select_employee', 'select_hr_admin'];
                let button = $(event.relatedTarget) // Button that triggered the modal
                let user = button.data('user') // Extract info from data-* attributes
                let modal = $(this)
                for (let u in user) {
                    let inputElement = modal.find("[name="+ u +"]") ;//.length
                    if(inputElement.length !== 0)
                    {
                        if(u === 'level_id') {
                            let radio = parseInt(user[u]) - 1;
                            console.log(level_selectors[radio]);
                            inputElement = $("#" + level_selectors[radio]).next().trigger('click');
                            // inputElement.val(user[u]);
                            // inputElement.next().trigger('click');
                            console.log(inputElement);
                        } else {
                            inputElement.val(user[u]);
                        }
                    }
                }
                modal.find("[name='password']").val('');
                modal.find("[name='confirm_password']").val('');
                modal.find('.modal-title').text(button.data('title'))
                modal.find('#submitModalForm').html(button.data('button'))
                modal.find('form').attr('action', button.data('url'))
            })

            $('#modal-form').on('submit', function(event) {
                event.preventDefault()
                const form = $(this);
                const url = form.attr('action')
                const formData = form.serialize();
                // const params = Object.fromEntries(new URLSearchParams(formData));
                let ajaxRequest = $.post(url, formData)
                ajaxRequest.done(function (data) {
                    self.$("#modal-closer").trigger("click");
                    if (data.success)
                    {
                        alert(data.message)
                        getUsers();
                        // self.$("#modal-closer").trigger("click");
                    } else {
                        console.log(data);
                        alert(data.message)
                    }
                })
            })



            {{--        get last 5 years--}}
            let currentYear = new Date().getFullYear();

            for (let i = 1; i <= 5; i++ ) {
                $(".nav-select").append(

                    $("<option></option>")
                        .attr("value", currentYear)
                        .text(currentYear)

                );
                currentYear--;
            }
            // get user by year
            $(".nav-select").on('change', function (event) {
                let select = $(this);
                if(select.val() === '') getUsers();
                let params = {
                    year: select.val()
                }
                params = JSON.stringify(params)
                const url = select.data('url') + '/' + params;
                // let req =
                $.get(url, function (data) {
                    console.log(data);
                    $('#table-body').empty().html(data)
                });
            })

            // toggle user levels
            $(".toggle_permissions").on('change', function (event) {
                const item = $(this);
                let isChecked = item.prop('checked');
                const checkboxName = '.' + item.data('selector');
                $("#permissions-table-body").find(".form-check-input").prop('checked', false);
                $(checkboxName).prop('checked', isChecked);
                console.log(item.val())
            })

            //delete user
            $('.delete-user').on('click', function(event) {
                event.preventDefault();
                const btn = $(this)
                const url = btn.data('url');
                const user = btn.data('user');
                let ajaxRequest = $.post(url, {user: user})
                ajaxRequest.done(function (data) {
                    if (data.success)
                    {
                        alert(data.message)
                        getUsers();
                    } else {
                        console.log(data);
                        alert(data.message)
                    }
                })
            })


        });

    </script>
@endpush
