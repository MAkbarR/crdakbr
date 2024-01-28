<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\fct;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
 /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $admins = fct::latest()->paginate();

        //render view with posts
        return view('admins.index', compact('admins'));
    }
        /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('admins.create');
    }
    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'fctr'     => 'required',
            'k_hjn'   => 'required',
            'angin'   => 'required',
            'gel_tg'   => 'required',
            'arus'   => 'required',
            'arh_angin'=>'required',
        ]);

        //create post
        fct::create([
            'fctr'     => $request->fctr,
            'k_hjn'   => $request->k_hjn,
            'angin'   => $request->angin,
            'gel_tg'   => $request->gel_tg,
            'arus'   => $request->arus,
            'arh_angin'=>$request->arh_angin,
        ]);

        //redirect to index
        return redirect()->route('admins.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

        /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get post by ID
        $admin = fct::findOrFail($id);

        //render view with post
        return view('admins.show', compact('admin'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */

    public function edit(string $id){
        
        //get post by ID
        $admin = fct::findOrFail($id);

        return view('admins.edit', compact('admin'));

    }
    public function update(Request $request, string $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'fctr'     => 'required',
            'k_hjn'   => 'required',
            'angin'   => 'required',
            'gel_tg'   => 'required',
            'arus'   => 'required',
            'arh_angin'=>'required',
        ]);
            $admin = fct::find($id);
            //update post without image
            $admin->update([
                'fctr'     => $request->fctr,
                'k_hjn'   => $request->k_hjn,
                'angin'   => $request->angin,
                'gel_tg'   => $request->gel_tg,
                'arus'   => $request->arus,
                'arh_angin'=>$request->arh_angin,
            ]);
        

        //redirect to index
        return redirect()->route('admins.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

        /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $admin = fct::findOrFail($id);

        // //delete image
        // Storage::delete('public/posts/'. $admin->image);
        //delete post
        $admin->delete();

        //redirect to index
        return redirect()->route('admins.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function liat()
    {
        {
            //get posts
            $admins = fct::latest()->paginate();
    
            //render view with posts
            return view('admins.liat', compact('admins'));
        }
    }



}
