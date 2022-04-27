<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
            ->take(5)
            ->get();
        return view('home', compact('users'));
    }

    public function getUsers($request)
    {
        $request = json_decode($request);
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
        ->take(5)
        ->get();
        return view($this->userComponent . 'user-list', compact('users'));
    }

    public function updateUsers(Request $request)
    {
        $user = User::find($request->id);
        $request_data = $request->except(['password', 'confirm_password', 'id']);
        $user->update($request_data);
        $new_user = User::find($request->id);
        $response = [
            'success' => true,
            'message' => 'User updated successfully',
            'data' => $new_user
        ];
        return response()->json($response);
    }

    public function addUser(Request $request): \Illuminate\Http\JsonResponse
    {
        if ($request->password !== $request->confirm_password) return response()->json(['success' => false, 'message' => 'Password mismatch']);
        try {
            $user = User::create($request->except(['id', 'confirm_password']));
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
