@php
$levels = \App\Models\Level::with('permissions')->get();
$setPermissions = \App\Models\Permission::all();
@endphp
@foreach($levels as $level)
    @php
        $permissions = $level->permissions;
        $count = 0;
    @endphp
    <div class="d-flex justify-content-around align-items-center p-3" style="border-bottom: 1px solid rgba(0, 0, 0, 0.125);">
        <div class="name-tab d-flex justify-content-start align-items-center" style="padding-right: 2rem">
            <input type="radio" class="toggle_permissions d-none" id="select_{{ $level->alias }}" value="{{ $level->id }}" name="level_id" data-selector="{{ $level->alias }}_selector">
            <label style="cursor: pointer" for="select_{{ $level->alias }}">{{ $level->title }}</label>
        </div>
        @foreach($setPermissions as $permit)
            @php
                $permission_title = '';
                if (isset($permissions[$count]))
                {
                    $permission_title = $permissions[$count]->title;
                }
            @endphp
            <div class="created-tab d-flex justify-content-center">
                <input class="form-check-input @if($permission_title == $permit->title){{ $level->alias }}_selector @endif" type="checkbox" disabled>
            </div>
            @php
                $count++;
            @endphp
        @endforeach
    </div>
@endforeach


{{--
                            <div class="d-flex justify-content-around align-items-center p-3" style="border-bottom: 1px solid rgba(0, 0, 0, 0.125);">
                                <div class="name-tab d-flex justify-content-start align-items-center" style="padding-right: 2rem">
                                    <input type="radio" class="toggle_permissions d-none" id="select_super_admin" value="1" name="level_id" data-selector="super_admin_selector">
                                    <label style="cursor: pointer" for="select_super_admin">Super Admin</label>
                                </div>
                                <div class="created-tab d-flex justify-content-center">
                                    <input class="form-check-input super_admin_selector" type="checkbox" disabled>
                                </div>
                                <div class="role-tab d-flex justify-content-center">
                                    <input class="form-check-input super_admin_selector" type="checkbox" disabled>
                                </div>
                                <div class="action-tab d-flex justify-content-center">
                                    <input class="form-check-input super_admin_selector" type="checkbox" disabled>
                                </div>
                            </div>
                            <div class="d-flex justify-content-around align-items-center p-3" style="border-bottom: 1px solid rgba(0, 0, 0, 0.125);">
                                <div class="name-tab d-flex justify-content-start align-items-center" style="padding-right: 2rem">
                                    <input type="radio" class="toggle_permissions d-none" id="select_admin" value="2" name="level_id" data-selector="admin_selector">
                                    <label style="cursor: pointer" for="select_admin">Admin</label>
                                </div>
                                <div class="created-tab d-flex justify-content-center">
                                    <input class="form-check-input admin_selector" type="checkbox" disabled>
                                </div>
                                <div class="role-tab d-flex justify-content-center">
                                    <input class="form-check-input" type="checkbox" disabled>
                                </div>
                                <div class="action-tab d-flex justify-content-center">
                                    <input class="form-check-input" type="checkbox" disabled>
                                </div>
                            </div>
                            <div class="d-flex justify-content-around align-items-center p-3" style="border-bottom: 1px solid rgba(0, 0, 0, 0.125);">
                                <div class="name-tab d-flex justify-content-start align-items-center" style="padding-right: 2rem">
                                    <input type="radio" class="toggle_permissions d-none" id="select_employee" value="3" name="level_id" data-selector="employee_selector">
                                    <label style="cursor: pointer" for="select_employee">Employee</label>
                                </div>
                                <div class="created-tab d-flex justify-content-center">
                                    <input class="form-check-input employee_selector" type="checkbox" disabled>
                                </div>
                                <div class="role-tab d-flex justify-content-center">
                                    <input class="form-check-input" type="checkbox" disabled>
                                </div>
                                <div class="action-tab d-flex justify-content-center">
                                    <input class="form-check-input" type="checkbox" disabled>
                                </div>
                            </div>
                            <div class="d-flex justify-content-around align-items-center p-3" style="border-bottom: 1px solid rgba(0, 0, 0, 0.125);">
                                <div class="name-tab d-flex justify-content-start align-items-center" style="padding-right: 2rem">
                                    <input type="radio" class="toggle_permissions d-none" id="select_hr_admin" value="4" name="level_id" data-selector="hr_admin_selector">
                                    <label style="cursor: pointer" for="select_hr_admin">Hr Admin</label>
                                </div>
                                <div class="created-tab d-flex justify-content-center">
                                    <input class="form-check-input hr_admin_selector" type="checkbox" disabled>
                                </div>
                                <div class="role-tab d-flex justify-content-center">
                                    <input class="form-check-input hr_admin_selector" type="checkbox" disabled>
                                </div>
                                <div class="action-tab d-flex justify-content-center">
                                    <input class="form-check-input hr_admin_selector" type="checkbox" disabled>
                                </div>
                            </div>--}}
