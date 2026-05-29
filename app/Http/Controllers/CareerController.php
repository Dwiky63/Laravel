<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Idev\EasyAdmin\app\Http\Controllers\DefaultController;

class CareerController extends DefaultController
{
    protected $modelClass = Career::class;
    protected $title;
    protected $generalUri;
    protected $tableHeaders;
    // protected $actionButtons;
    // protected $arrPermissions;
    protected $importExcelConfig;

    public function __construct()
    {
        $this->title = 'Career';
        $this->generalUri = 'career';
        // $this->arrPermissions = [];
        $this->actionButtons = ['btn_edit', 'btn_show', 'btn_delete'];

        $this->tableHeaders = [
                    ['name' => 'No', 'column' => '#', 'order' => true], 
                    ['name' => 'Created at', 'column' => 'created_at', 'order' => true],
                    ['name' => 'Updated at', 'column' => 'updated_at', 'order' => true],
        ];


        $this->importExcelConfig = [ 
            'primaryKeys' => [''],
            'headers' => [ 
            ]
        ];
    }


    protected function fields($mode = "create", $id = '-')
    {
        $edit = null;
        if ($id ) {
            $edit = $this->modelClass::find($id);
            
        }


        
        
        return [
            [
                'type' => 'text',
                'label' => 'job title',
                'name' => 'title',
                'class' => 'col-md-12 my-2',
                'required' => $this->flagRules('title', $id),
                'value' => isset($edit)? $edit->title : ''
            ],
            [
                'type' => 'text',
                'label' => 'department',
                'name' => 'department',
                'class' => 'col-md-6 my-2',
                'required' => $this->flagRules('department', $id),
                'value' => isset($edit)? $edit->department : ''
            ],
            [
                'type' => 'select',
                'label' => 'job type',
                'name' => 'type',
                'class' => 'col-md-6 my-2',
                'required' => $this->flagRules('type', $id),
                'value' => isset($edit)? $edit->title : '',
                'options' => [
                    ['value' => '', 'text' => 'pilih type'],
                    ['value' => 'full-time', 'text' => 'full-time'],
                    ['value' => 'part-time', 'text' => 'part-time'],
                    ['value' => 'remote', 'text' => 'remote'],
                    ['value' => 'contract', 'text' => 'contract'],
                    ['value' => 'intership', 'text' => 'intership'],
                ]
            ],
            [
                'type' => 'text',
                'label' => 'salary',
                'name' => 'salary',
                'class' => 'col-md-6 my-2',
                'required' => $this->flagRules('salary', $id),
                'value' => isset($edit)? $edit->salary : ''
            ],
            [
                'type' => 'text',
                'label' => 'description',
                'name' => 'description',
                'class' => 'col-md-12 my-2',
                'required' => $this->flagRules('description', $id),
                'value' => isset($edit)? $edit->description : ''
            ],
            [
                'type' => 'select',
                'label' => 'status',
                'name' => 'status',
                'class' => 'col-md-12 my-2',
                'required' => $this->flagRules('status', $id),
                'value' => isset($edit)? $edit->status : 'open',
                'options' => [
                    ['value' => 'open', 'text' => 'open'],
                    ['value' => 'closed', 'text' => 'closed'],
                ]
            ],
        ];
    }


    protected function rules($id = null)
    {
        $rules = [
        ];

        return $rules;
    }

}
