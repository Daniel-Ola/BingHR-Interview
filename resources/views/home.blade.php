@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="d-flex justify-content-end">
            <div class="">
                <button type="button" class="btn btn-success">Add User</button>
            </div>
        </div>

{{--        Table Section--}}
        <div class="w-100 py-2 mt-3" style="border: 2px solid #0395FF; background-color: #fff;">
            <div class="d-flex justify-content-between px-3">
                <div class="table-title">
                    <h3>List Users</h3>
                </div>
                <div class="table-search">
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

            <div id="users-table-list" class="position-relative px-2 mt-3" style="overflow-y: auto;">

                <div id="table-heading" class="d-flex justify-content-around p-3" style="background-color: #EFF4FA;">
                    <div class="name-tab">Name</div>
                    <div class="created-tab">Created Date</div>
                    <div class="role-tab">Role</div>
                    <div class="action-tab">Action</div>
                </div>
                <div class="" id="table-body">
{{--                    @forelse($users as $user)--}}
                    <div class="d-flex justify-content-around p-3" style="border-bottom: 1px solid rgba(0, 0, 0, 0.125);">
                        <div class="name-tab d-flex">
                            <div style="width: 50px; height: 50px; border-radius: 100%;" class="show-box">
                                <img src="https://randomuser.me/api/portraits/men/73.jpg" alt="" class="w-100 h-100 position-relative rounded-circle">
                            </div>
                            <div class="d-flex flex-column show-box justify-content-start align-items-center">
                                <div>Name</div>
                                <div>Email</div>
                            </div>
                            <div class="mx-auto">
                                <span class="btn btn-danger">Level</span>
                            </div>

                        </div>
                        <div class="created-tab">Created Date</div>
                        <div class="role-tab">Role</div>
                        <div class="action-tab">Action</div>
                    </div>
{{--                    @empty--}}
{{--                        No results found--}}
{{--                    @endforelse--}}
                </div>

            </div>

        </div>
{{--        End Table Section--}}

    </div>
@endsection
