<!-- Sidebar -->
<div class="d-flex" style="height: 100vh; width: 300px; background: #fff">
{{--     position-fixed--}}
    @include("layouts.partials.tiny-sidebar")

    <div id="sidebar-nav" style="margin-top: 5rem; width: 100%">
        <div class="list-group" id="list-tab" role="tablist">
            @include('components.sidebar.sidebar-links', config('sidebar-links.sidebar_links'))
        </div>
    </div>

</div>
<!-- /#sidebar-wrapper -->
