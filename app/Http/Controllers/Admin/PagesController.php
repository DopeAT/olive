<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PagesController extends Controller
{

    public function index()
    {
        $pages = Page::withTranslation()->translatedIn(app()->getLocale())->get();

        return view('admin.pages.index', [
            'pages' => $pages
        ]);
    }

    public function create()
    {
        return view('admin.pages.create', [
            'langs' => $this->webLangs
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        foreach (config('translatable.locales') as $locale) {
            $data[$locale]['slug'] = slug($data[$locale]['title']);
        }

        Page::create($data);

        session()->flash('success', 'Page Created Successfully.');
        return redirect('/admin/pages');
    }

    public function show($id)
    {
        //
    }

    public function edit(Page $page)
    {
        return view('admin.pages.edit', [
            'data' => $page
        ]);
    }

    public function update(Request $request, Page $page)
    {
        $data = $request->all();

        foreach (config('translatable.locales') as $locale) {
            $data[$locale]['slug'] = slug($data[$locale]['title']);
        }

        $page->update($data);

        session()->flash('success', "{$page->title} Updated Successfully.");
        return redirect('/admin/pages');
    }

    public function destroy(Page $page)
    {
        $page->delete();

        session()->flash('success', 'Page Removed.');
        return redirect('/admin/pages');
    }
}
