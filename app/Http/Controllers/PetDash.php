<?php

namespace App\Http\Controllers;

use App\Models\pets;
use App\Models\User;
use Illuminate\Http\Request;

class PetDash extends Controller
{
    public function index()
    {
        $pets = pets::latest()->get();
        return view('pets')->with('pets', $pets);
    }

    public function index_home()
    {
        $homepets = pets::limit(10)->get();
        return view('welcome')->with('homepets', $homepets);
    }

    public function store_to_cart($id, $user_id)
    {
        $user = User::get()->where('id', $user_id);
        $pet = pets::get()->where('id', $id);
    }

    public function add_new_pet(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'quantity' => '',
            'color' => 'required',
            'type' => 'required',
            'image' => "required|image|mimes:png,jpg,jpeg,webp",
        ]);

        if ($request->hasFile('image')) {
            $image = time() . 'pet.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images_pets'), $image);
            $data['image'] = $image;
        }


        pets::create($data);
        return back();
    }


    public function update_pet(Request $request, $id)
    {
        $pet = pets::find($id);

        $data = [
            'name' => $request->input('name'),
            'quantity' => $request->input('quantity'),
            'color' => $request->input('color'),
            'type' => $request->input('type'),
            'image' => $request->input('image')
        ];


        if ($request->hasFile('image')) {
            if ($pet->image) {
                $file_path = public_path() . "/images_pets/" . $pet->image;
                unlink($file_path);
            }
            $image = time() . 'pet.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images_pets'), $image);
            $data['image'] = $image;
        } else {
            $data['image'] = $pet->image;
        }



        $pet->update($data);

        return back()->with('message' , 'Pet Data Changed Successfuly');
    }

    public function delete_pet($id)
    {
        $pet = pets::get()->where('id', $id);
        $pet->each->delete();
        return back();
    }
}
