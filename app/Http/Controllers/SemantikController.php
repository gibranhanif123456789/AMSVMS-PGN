<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photos;

class SemantikController extends Controller
{
    public function semantik()
    {
    $photos = Photos::all();
    return view('menu.semantik', ['photos' => $photos]);
    }


    public function uploadPhoto(Request $request)
    {
        \Log::info('Ukuran file: ' . $request->file('photo')->getSize());

        $request->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif|max:5120',
            'title' => 'required|string|max:255',
            'text' => 'nullable|string|max:500',
        ]);

        try {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('img'), $filename);

            $photo = new Photos();
            $photo->title = $request->input('title');
            $photo->text = $request->input('text') ?? null; 
            $photo->file_path = 'img/' . $filename;
            $photo->created_at = now(); 
            $photo->updated_at = now(); 
            $photo->save();

            return response()->json([
                'success' => true,
                'photoUrl' => asset($photo->file_path),
                'title' => $photo->title,
                'text' => $photo->text,
                'timestamp' => $photo->created_at->format('Y-m-d H:i:s'), 
                'id' => $photo->id,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Kesalahan saat mengupload foto: ' . $e->getMessage(),
            ], 500);
        }
    }

    public function deletePhoto($id)
    {
        try {
            $photo = Photos::findOrFail($id);
            $photo->delete();
            return redirect()->back()->with('success', 'Foto berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus foto.');
        }
    }
}
