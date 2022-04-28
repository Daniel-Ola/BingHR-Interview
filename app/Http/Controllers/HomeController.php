<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    protected $userComponent = 'components.user.';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::role()
            ->level()
            ->select('users.*', 'r.title as user_role', 'l.title as user_level')
            ->paginate(5);
//            ->get();
        return view('home', compact('users'));
    }

    public function getUsers($request = '')
    {
        if ($request) $request = json_decode($request);
        $users = User::when(isset($request->year), function($query) use($request) {
            return $query->where('users.created_at', '>=', Carbon::createFromDate($request->year)->startOfYear())
                ->where('users.created_at', '<=', Carbon::createFromDate($request->year)->endOfYear());
        })
        ->when(isset($request->name_search), function($query) use($request) {
            $param = '%' . $request->name_search . '%';
            return $query->where('firstname', 'like', $param)
                ->orWhere('lastname', 'like', $param);
        })->role()
        ->level()
        ->select('users.*', 'r.title as user_role', 'l.title as user_level')
        ->paginate(5);
//        ->get();
        return view($this->userComponent . 'user-list', compact('users'));
    }

    public function updateUsers(Request $request)
    {
//        dd($request);
        $user = User::find($request->id);
        $request_data = $request->except(['password', 'confirm_password', 'id']);
        $update = $user->update($request_data);
        $new_user = User::find($request->id);
        if ($update) {
            $response = [
                'success' => true,
                'message' => 'User updated successfully',
                'data' => $new_user
            ];
            return response()->json($response);
        } else {
            $response = [
                'success' => false,
                'message' => 'User not updated successfully'
            ];
            return response()->json($response);
        }
    }

    public function addUser(Request $request): \Illuminate\Http\JsonResponse
    {
        // use validator instead
        if ($request->password !== $request->confirm_password) return response()->json(['success' => false, 'message' => 'Password mismatch']);
        try {
//            $request->password = Hash::make($request->password);
            $data = $request->except(['id', 'confirm_password', 'password']);
            $data['password'] = Hash::make($request->password);
            $user = User::create($data);
            if ($user) {
                return response()->json([
                    'success' => true,
                    'message' => 'User Created Successfully'
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Could not create user; unknown error'
                ]);
            }
        } catch (\Exception $exception)
        {
            return response()->json([
                'success' => false,
                'message' => $exception->getMessage()
            ]);
        }
    }
}
