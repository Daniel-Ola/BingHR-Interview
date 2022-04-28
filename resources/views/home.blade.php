@extends('layouts.app')

@section('content')
    <div class="container">
{{--         position-relative--}}

        <div class="d-flex justify-content-end">
            <div class="">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-title="Add New User" data-button="Add User" data-url="{{ route('users.create') }}">Add User</button>
            </div>
        </div>

{{--        Table Section--}}
        <div class="w-100 py-2 mt-3" style="border: 2px solid #0395FF; background-color: #fff;">
            <div class="d-flex justify-content-between px-3">
                <div class="table-title d-flex justify-content-center align-items-center">
                    <h5>List Users</h5>
                </div>
                <div class="table-search">
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

                <div id="table-heading" class="d-flex justify-content-around p-3" style="background-color: #EFF4FA;">
                    <div class="name-tab my-table-heading">Name</div>
                    <div class="created-tab my-table-heading">Created Date</div>
                    <div class="role-tab my-table-heading">Role</div>
                    <div class="action-tab my-table-heading">Action</div>
                </div>
                <div class="" id="table-body">
                    @include('components.user.user-list')
                </div>

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
                    if (data.success)
                    {
                        getUsers();
                        self.$("#modal-closer").trigger("click");
                    }
                })
            })



            {{--        get last 5 years--}}
            let currentYear = new Date().getFullYear();

            for (let i = 1; i <= 5; i++ ) {
                $("#nav-select").append(

                    $("<option></option>")
                        .attr("value", currentYear)
                        .text(currentYear)

                );
                currentYear--;
            }
            // get user by year
            $("#nav-select").on('change', function (event) {
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


        });

    </script>
@endpush
