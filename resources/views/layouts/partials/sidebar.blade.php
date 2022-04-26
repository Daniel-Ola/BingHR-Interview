<!-- Sidebar -->
<div class="d-flex" style="height: 100vh; width: 300px; background: #fff">
{{--     position-fixed--}}
    @include("layouts.partials.tiny-sidebar")

    <div id="sidebar-nav" style="margin-top: 5rem; width: 100%">
        <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action sidebar-link-item" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">
                <i class="fa fa-bars" style="margin-right: 10px"></i>
                Home
            </a>
            <a class="list-group-item list-group-item-action sidebar-link-item active" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">
                <i class="fa fa-users" style="margin-right: 10px"></i>
                Profile
            </a>
            <a class="list-group-item list-group-item-action sidebar-link-item" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Messages</a>
            <a class="list-group-item list-group-item-action sidebar-link-item" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a>
        </div>
    </div>

</div>
<!-- /#sidebar-wrapper -->
