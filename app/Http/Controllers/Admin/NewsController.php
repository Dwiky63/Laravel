<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Idev\EasyAdmin\app\Http\Controllers\DefaultController;

class NewsController extends DefaultController
{
    protected $modelClass = News::class;
    protected $title;
    protected $generalUri;
    protected $tableHeaders;
    // protected $actionButtons;
    // protected $arrPermissions;
    protected $importExcelConfig;

    public function __construct()
    {
        $this->title = 'News';
        $this->generalUri = 'news';
        // $this->arrPermissions = [];
        $this->actionButtons = ['btn_edit', 'btn_show', 'btn_delete'];

        $this->tableHeaders = [
                    ['name' => 'No', 'column' => '#', 'order' => true],
                    ['name' => 'Title', 'column' => 'title', 'order' => true],
                    ['name' => 'Content', 'column' => 'content', 'order' => true],
                    ['name' => 'Image', 'column' => 'image', 'order' => true],
                    ['name' => 'Created by', 'column' => 'created_by', 'order' => true], 
                    ['name' => 'Created at', 'column' => 'created_at', 'order' => true],
                    ['name' => 'Updated at', 'column' => 'updated_at', 'order' => true],
        ];


        $this->importExcelConfig = [ 
            'primaryKeys' => ['title'],
            'headers' => [
                    ['name' => 'Title', 'column' => 'title'],
                    ['name' => 'Content', 'column' => 'content'],
                    ['name' => 'Image', 'column' => 'image'],
                    ['name' => 'Created by', 'column' => 'created_by'], 
            ]
        ];
    }


    protected function fields($mode = "create", $id = '-')
    {
        $edit = null;
        if ($id != '-') {
            $edit = $this->modelClass::where('id', $id)->first();
        }

        // Ambil daftar semua user untuk dropdown created_by
        $userOptions = User::orderBy('name')->get()->map(function($u) {
            return ['value' => $u->id, 'text' => $u->name];
        })->toArray();

        $fields = [
                    [
                        'type' => 'text',
                        'label' => 'Title',
                        'name' =>  'title',
                        'class' => 'col-md-12 my-2',
                        'required' => $this->flagRules('title', $id),
                        'value' => (isset($edit)) ? $edit->title : ''
                    ],
                    [
                        'type' => 'textarea',
                        'label' => 'Content',
                        'name' =>  'content',
                        'class' => 'col-md-12 my-2',
                        'required' => $this->flagRules('content', $id),
                        'value' => (isset($edit)) ? $edit->content : ''
                    ],
                    [
                        'type' => 'image',
                        'label' => 'Image',
                        'name' =>  'image',
                        'class' => 'col-md-12 my-2',
                        'required' => false,
                        'value' => (isset($edit) && $edit->image) ? asset('storage/' . $edit->image) : ''
                    ],
                    [
                        'type' => 'select2',
                        'label' => 'Created by',
                        'name' =>  'created_by',
                        'class' => 'col-md-12 my-2',
                        'required' => $this->flagRules('created_by', $id),
                        'value' => (isset($edit)) ? $edit->created_by : '',
                        'options' => $userOptions,
                    ],
        ];
        
        return $fields;
    }


    protected function rules($id = null)
    {
        $rules = [
                    'title'      => 'required|string',
                    'content'    => 'required|string',
                    'image'      => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                    'created_by' => 'required|exists:users,id',
        ];

        return $rules;
    }


    /**
     * Override appendStore: handle image upload.
     */
    protected function appendStore($request)
    {
        $columns = [];

        // Handle image upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $path = $request->file('image')->store('news', 'public');
            $columns[] = [
                'name' => 'image',
                'value' => $path,
            ];
        }

        return ['columns' => $columns];
    }


    /**
     * Override appendUpdate: handle image upload on edit.
     */
    protected function appendUpdate($request)
    {
        $columns = [];

        // Handle image upload jika ada file baru
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $path = $request->file('image')->store('news', 'public');
            $columns[] = [
                'name' => 'image',
                'value' => $path,
            ];
        }

        return ['columns' => $columns];
    }
}
