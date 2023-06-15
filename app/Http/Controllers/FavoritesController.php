<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Micropost;
use Illuminate\Support\Facades\Auth;

class FavoritesController extends Controller
{
    public function store($id)
    {
        $user = Auth::user();
        $micropost = Micropost::find($id);
        
        if ($user->is_favorite($micropost->id)) {
            return redirect()->back();
        }

        $user->favorite($micropost->id);

        return redirect()->back();
    }
    
    public function destroy($id)
    {
        $user = Auth::user();
        $micropost = Micropost::find($id);

        if (!$user->is_favorite($micropost->id)) {
            return redirect()->back();
        }

        $user->unfavorite($micropost->id);

        return redirect()->back();
    }
}
