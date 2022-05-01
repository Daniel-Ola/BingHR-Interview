@forelse($users as $user)
    <div class="d-flex justify-content-around align-items-center p-3" style="border-bottom: 1px solid rgba(0, 0, 0, 0.125);">
        <div class="name-tab d-flex flex-column flex-lg-row justify-content-end align-items-center" style="padding-right: 2rem">
            <div style="width: 50px; height: 50px; border-radius: 100%;">
                <img src="https://randomuser.me/api/portraits/men/73.jpg" alt="" class="w-100 h-100 position-relative rounded-circle">
            </div>
            <div class="d-flex flex-column justify-content-center align-items-start flex-grow-1" style="margin-left: .5rem;">
                <div style="text-align: left;">{{ $user->full_name }}</div>
                <div style="text-align: left;">{{ $user->email }}</div>
            </div>
            <div class="mx-auto">
{{--                 d-none d-lg-block--}}
                <span class="btn btn-sm btn-{{ $user->level_btn }}">{{ $user->user_level }}</span>
            </div>

        </div>
        <div class="created-tab">{{ $user->created_date }}</div>
        <div class="role-tab">{{ $user->user_role }}</div>
        <div class="action-tab d-flex justify-content-between">
            <a href="#edit-user-{{ $user->id }}" style="color: #D5DBE8" data-bs-toggle="modal" data-bs-target="#exampleModal" data-user="{{ $user }}" data-title="Edit User" data-button="Edit User" data-url="{{ route('update_users') }}">
                <i class="fa fa-pencil"></i>
            </a>
            <a href="#" class="mx-auto delete-user" style="color: #D5DBE8" data-user="{{ $user->id }}" data-url="{{ route('users.delete') }}">
                <i class="fa fa-trash"></i>
            </a>
        </div>
    </div>
@empty
    <div class="d-flex justify-content-around align-items-center p-3" style="border-bottom: 1px solid rgba(0, 0, 0, 0.125);">
        <p>No results found</p>
    </div>
@endforelse
