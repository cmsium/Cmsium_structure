<?php
class Masks{

    private static $instance;

    public static function getInstance(){
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    protected function __construct(){}
    protected function __clone(){}

    private static $masks = [
     'authMask' => [
         'logintype' => [ 'func' => 'ValueFromList',
                          'props' => ['list' => ['phone', 'email', 'username']],
                          'required' => true],
         'password' => [ 'func' => 'AlphaNumeric',
                         'props' => ['min' => 3, 'max' => 40],
                         'required' => true],
         'login' => ['func' => 'Login',
                     'props' => ['min' => 3, 'max' => 64],
                     'required' => true]],

     'passwordMask' => [
         'password' => [ 'func' => 'AlphaNumeric',
                         'props' => ['min' => 3, 'max' => 40],
                         'required' => true],
          'password_repeat' => ['func' => 'AlphaNumeric',
                                'props' => ['min' => 3, 'max' => 15],
                                'required' => true]],

        'addStructureTypeMask'=>[
            'type_name' => [
                'func' => 'CirrLatName',
                'props' => ['min' => 1, 'max' => 255],
                'required' => true],
        ],

        'deleteStructureTypeMask'=>[
            'id' => [
                'func' => 'CirrLatName',
                'props' => ['min'=>1,'max' => 3],
                'required' => true],
        ],

        'getStructureObjectMask'=>[
            'obj_id' => [
                'func' => 'CirrLatName',
                'props' => ['min'=>1,'max' => 5],
                'required' => true],
            'table' => [
                'func' => 'ValueFromList',
                'props' => ['list'=>['logic','structure']],
                'required' => false],
        ],

        'getStructureObjectsMask'=>[
            'obj_name' => [
                'func' => 'CirrLatName',
                'props' => ['min' => 1, 'max' => 255],
                'required' => false],
            'type_id' => [
                'func' => 'CirrLatName',
                'props' => ['min' => 1, 'max' => 3],
                'required' => false],
            'parent_id' => [
                'func' => 'Md5Type',
                'props' => [],
                'required' => false],
            'twig' => [
                'func' => 'StrNumbers',
                'props' => ['min' => 1,'max' => 4],
                'required' => false],
            'kind' => [
                'func' => 'StrNumbers',
                'props' => ['min' => 1,'max' => 3],
                'required' => false],
            'start' => [
                'func' => 'StrNumbers',
                'props' => ['min' => 1,'max' => 10, 'output' => 'int'],
                'required' => false
            ],
            'limit' => [
                'func' => 'StrNumbers',
                'props' => ['min' => 1,'max' => 10],
                'required' => false
            ],

        ],

        'addStructureObjectMask'=>[
            'obj_name' => [
                'func' => 'CirrLatName',
                'props' => ['min' => 1, 'max' => 255],
                'required' => true],
            'type_id' => [
                'func' => 'CirrLatName',
                'props' => ['min' => 1, 'max' => 3],
                'required' => true],
            'parent_id' => [
                'func' => 'Md5Type',
                'props' => [],
                'required' => true],
            'twig' => [
                'func' => 'StrNumbers',
                'props' => ['min' => 1,'max' => 4],
                'required' => false],
        ],

        'addToStructureMask'=>[
            'id_up' => [
                'func' => 'Md5Type',
                'props' => [],
                'required' => true],
            'id_down' => [
                'func' => 'Md5Type',
                'props' => [],
                'required' => true],
        ],

        'addPositionMask'=>[
            'position_name' => [
                'func' => 'CirrLatName',
                'props' => ['min' => 1, 'max' => 255],
                'required' => true],
        ],

        'addWorkplaceMask'=>[
            'structure_node_id' => [
                'func' => 'Md5Type',
                'props' => [],
                'required' => true],
            'position_id' => [
                'func' => 'CirrLatName',
                'props' => ['min' => 1, 'max' => 3],
                'required' => true],
        ],

        'getWorkplacesMask'=>[
            'parent_id' => [
                'func' => 'Md5Type',
                'props' => [],
                'required' => false],
            'position_id' => [
                'func' => 'CirrLatName',
                'props' => ['min' => 1, 'max' => 3],
                'required' => false],
            'start' => [
                'func' => 'StrNumbers',
                'props' => ['min' => 1,'max' => 10, 'output' => 'int'],
                'required' => false
            ],
            'limit' => [
                'func' => 'StrNumbers',
                'props' => ['min' => 1,'max' => 10],
                'required' => false
            ],
        ],

        'showWorkplaceMask'=>[
            'node_id' => [
                'func' => 'Md5Type',
                'props' => [],
                'required' => true],
        ],

        'deleteWorkplaceMask'=>[
            'workplace_id' => [
                'func' => 'CirrLatName',
                'props' => ['min' => 1, 'max' => 6],
                'required' => true],
        ],

        'deletePositionMask'=>[
            'position_id' => [
                'func' => 'CirrLatName',
                'props' => ['min' => 1, 'max' => 3],
                'required' => true],
        ],

        'showPositionMask'=>[
            'position_id' => [
                'func' => 'CirrLatName',
                'props' => ['min' => 1, 'max' => 3],
                'required' => true],
        ],

        'showCrossTwigNodesMask'=>[
            'node_id' => [
                'func' => 'Md5Type',
                'props' => [],
                'required' => false],
        ],

        'showObjectMask'=>[
            'node_id' => [
                'func' => 'Md5Type',
                'props' => [],
                'required' => true],
        ],

        'updateStructureObjectMask'=>[
            'node_id' => [
                'func' => 'Md5Type',
                'props' => [],
                'required' => true],
            'obj_name' => [
                'func' => 'CirrLatName',
                'props' => ['min' => 1, 'max' => 255],
                'required' => false],
            'type_id' => [
                'func' => 'CirrLatName',
                'props' => ['min' => 1, 'max' => 3],
                'required' => false],
            'parent_id' => [
                'func' => 'Md5Type',
                'props' => [],
                'required' => false],
        ],

        'deleteStructureObjectMask'=>[
            'node_id' => [
                'func' => 'Md5Type',
                'props' => [],
                'required' => true],
        ],


    'registMask' => [
        'username' => ['func' => 'CirrLatName',
                        'props' => ['min' => 3, 'max' => 64],
                        'required' => true],
        'password' => ['func' => 'AlphaNumeric',
                        'props' => ['min' => 3, 'max' => 15],
                        'required' => true],
        'password_repeat' => ['func' => 'AlphaNumeric',
                              'props' => ['min' => 3, 'max' => 15],
                              'required' => true],
        'email' => ['func' => 'E_Mail',
                    'props' => [],
                    'required' => true],
        'phone' => ['func' => 'StrNumbers',
                    'props' => ['min' => 7, 'max' => 11],
                    'required' => true],
        'firstname' => ['func' => 'CirrLatName',
                        'props' => ['min' => 3, 'max' => 15],
                        'required' => true],
        'lastname' => ['func' => 'CirrLatName',
                        'props' => ['min' => 3, 'max' => 15],
                        'required' => true],
        'middlename' => ['func' => 'CirrLatName',
                         'props' => ['min' => 3, 'max' => 15],
                         'required' => true],
        'birth_date' => ['func' => 'DateType',
                        'props' => ['format' => 'Y-m-d', 'output' => 'string'],
                        'required' => true],
        'birthplace' => ['func'=>'ListOfAlphaNumerics',
                         'props'=>['min' => 3, 'max' => 255],
                         'required' => true]],


     'outerRegistMask' => [
         'username' => ['func' => 'CirrLatName',
                        'props' => ['min' => 3, 'max' => 64],
                        'required' => true],
        'password' => ['func' => 'AlphaNumeric',
                        'props' => ['min' => 3, 'max' => 15],
                        'required' => true],
        'password_repeat' => ['func' => 'AlphaNumeric',
                                'props' => ['min' => 3, 'max' => 15],
                                'required' => true],
        'firstname' => ['func' => 'CirrLatName',
                        'props' => ['min' => 3, 'max' => 15],
                        'required' => true],
        'lastname' => ['func' => 'CirrLatName',
                        'props' => ['min' => 3, 'max' => 15],
                        'required' => true],
        'middlename' => ['func' => 'CirrLatName',
                        'props' => ['min' => 3, 'max' => 15],
                        'required' => true],
        'birth_date' => ['func' => 'DateType',
                        'props' => ['format' => 'Y-m-d', 'output' => 'string'],
                        'required' => true],
        'phone' => ['func' => 'StrNumbers',
                        'props' => ['min' => 7, 'max' => 11],
                        'required' => true],
        'email' => ['func' => 'E_Mail',
                    'props' => [],
                    'required' => true],
        'birthplace' => ['func' => 'Text',
                        'props' => ['min' => 3, 'max' => 100, 'except' => "<>\*="],
                        'required' => true],
        'roles' => ['func' => 'Roles',
                    'props' => ['list' => ["1"]],
                    'required' => true],],


     'registFromFileMask' => [
        'username' => ['func' => 'CirrLatName',
                        'props' => ['min' => 3, 'max' => 64],
                        'required' => true],
        'password' => ['func' => 'AlphaNumeric',
                        'props' => ['min' => 3, 'max' => 15],
                        'required' => true],
        'firstname' => ['func' => 'CirrLatName',
                        'props' => ['min' => 3, 'max' => 15],
                        'required' => true],
        'lastname' => ['func' => 'CirrLatName',
                        'props' => ['min' => 3, 'max' => 15],
                        'required' => true],
        'middlename' => ['func' => 'CirrLatName',
                        'props' => ['min' => 3, 'max' => 15],
                        'required' => true],
        'birth_date' => ['func' => 'DateType',
                        'props' => ['format' => 'Y-m-d', 'output' => 'string'],
                        'required' => true],
        'phone' => ['func' => 'StrNumbers',
                    'props' => ['min' => 7, 'max' => 11],
                    'required' => true],
        'email' => ['func' => 'E_Mail',
                    'props' => [],
                    'required' => true],
        'birthplace' => ['func' => 'Text',
                        'props' => ['min' => 3, 'max' => 100, 'except' => "<>\*="],
                        'required' => true],],


     'updateMask' => [
         'user_id' => ['func' => 'Md5Type',
                        'props' => [],
                        'required' => true],
         'username' => ['func' => 'CirrLatName',
                        'props' => ['min' => 3, 'max' => 64],
                        'required' => true],
         'firstname' => ['func' => 'CirrLatName',
                        'props' => ['min' => 3, 'max' => 15],
                        'required' => true],
        'lastname' => ['func' => 'CirrLatName',
                        'props' => ['min' => 3, 'max' => 15],
                        'required' => true],
        'middlename' => ['func' => 'CirrLatName',
                        'props' => ['min' => 3, 'max' => 15],
                        'required' => true],
        'birth_date' => ['func' => 'DateType',
                        'props' => ['format' => 'Y-m-d', 'output' => 'string'],
                        'required' => true],
        'phone' => ['func' => 'StrNumbers',
                    'props' => ['min' => 7, 'max' => 11],
                    'required' => true],
        'email' => ['func' => 'E_Mail',
                    'props' => [],
                    'required' => true],
         'birthplace' => ['func'=>'ListOfAlphaNumerics',
                          'props'=>['min' => 3, 'max' => 255],
                          'required' => true]],

    'updateEventFilesMask'=>[
        'event_id' => ['func' => 'Md5Type',
            'props' => [],
            'required' => true],
        'type_name' => ['func' => 'CirrLatName',
            'props' => ['min' => 3, 'max' => 255],
            'required' => true],
        'file_id' => ['func' => 'Md5Type',
            'props' => [],
            'required' => true],],
    'departmentsQuery'=>[
        'institute'=>['func' => 'Md5Type',
            'props' => [],
            'required' => true],
    ],

    'dictionaryQueryMask'=>[
        'dictionary'=>['func' => 'LatinName',
                       'props' => ['min'=>3,'max'=>255],
                       'requred' => true],
        'operator'=>['func' => 'ValueFromList',
                     'props' => ['list'=>['AND','OR'],
                     'requred' => false]]],

    'fileUploadMask' => [
        'name' => ['func' => 'fileName',
            'props' => ['min'=>3,'max'=>100,'types'=>FILES_ALLOWED_TYPES],
            'required' => true],
        'type' => ['func' => 'fileType',
            'props' => ['min' => 3, 'max' => 100],
            'required' => true],
        'error' => ['func' => 'Int',
            'props' => [],
            'required' => false],
        'size' => ['func' => 'Int',
            'props' => [],
            'required' => true]],

        'filesUploadMask' => [
            'name' => ['func' => 'multiple',
                'props' => ['func'=>'fileName','min'=>3,'max'=>100,'types'=>FILES_ALLOWED_TYPES],
                'required' => true],
            'type' => ['func' => 'multiple',
                'props' => ['func' => 'fileType','min' => 3, 'max' => 100],
                'required' => true],
            'tmp_name' => ['func' => 'multiple',
                'props' => ['func' => 'CirrLatName','min' => 3, 'max' => 100],
                'required' => true],
            'error' => ['func' => 'multiple',
                'props' => ['func' => 'Int'],
                'required' => false],
            'size' => ['func' => 'multiple',
                'props' => ['func' => 'Int'],
                'required' => true]],

        'EventsDumpFileMask' => [
            'name' => ['func' => 'fileName',
                'props' => ['min'=>3,'max'=>100,'types'=>['txt']],
                'required' => true],
            'type' => ['func' => 'fileType',
                'props' => ['min' => 3, 'max' => 25],
                'required' => true],
            'error' => ['func' => 'Int',
                'props' => [],
                'required' => false],
            'size' => ['func' => 'Int',
                'props' => [],
                'required' => true]],

     'selectEventMask' => [
         'users' => ['func'=>'multiple','props'=>['func'=>'Md5Type'],'required'=>false],
         'date_min' => ['func'=>'DateType','props'=>['format' => 'Y-m-d'],'required'=>false],
         'date_max' => ['func'=>'DateType','props'=>['format' => 'Y-m-d'],'required'=>false],
         'types' => ['func'=>'multiple','props'=>['func'=>'CirrLatName','min' => 3, 'max' => 64],'required'=>false],
         'start' => ['func'=>'StrNumbers','props'=>['min'=>1,'max'=>11,'output'=>'int'],'required'=>false],],

        'selectDocumentMask' => [
            'users' => ['func'=>'multiple','props'=>['func'=>'Md5Type'],'required'=>false],
            'date_min' => ['func'=>'DateType','props'=>['format' => 'Y-m-d'],'required'=>false],
            'date_max' => ['func'=>'DateType','props'=>['format' => 'Y-m-d'],'required'=>false],
            'types' => ['func'=>'multiple','props'=>['func'=>'CirrLatName','min' => 3, 'max' => 64],'required'=>false],
            'start' => ['func'=>'StrNumbers','props'=>['min'=>1,'max'=>11,'output'=>'int'],'required'=>false],],

        'selectSelfEventMask' => [
            'type_name' => ['func'=>'CirrLatName','props'=>['min' => 3, 'max' => 64],'required'=>false],
            'start' => ['func'=>'StrNumbers','props'=>['min'=>1,'max'=>11,'output'=>'int'],'required'=>false],],

        'selectAllEventsMask'=>[
            'users' => ['func'=>'multiple','props'=>['func'=>'Md5Type'],'required'=>false],
            'date_min' => ['func'=>'DateType','props'=>['format' => 'Y-m-d'],'required'=>false],
            'date_max' => ['func'=>'DateType','props'=>['format' => 'Y-m-d'],'required'=>false],
            'actions'=>['func'=>'multiple','props'=>['func'=>'Md5Type'],'required'=>false],
            'logs'=>['func'=>'multiple','props'=>['func'=>'AlphaNumeric','min'=>5,'max'=>64],'required'=>false]

        ],

        'ActionsToRoleMask' => [
            'role' => ['func'=>'StrNumbers','props'=>['min' => 1, 'max' => 64],'required'=>true],
            'actions' =>['func'=>'multiple','props'=>['func'=>'Md5Type'],'required'=>true]],

      'createEventAddress' => [
          'adres' => [
              'func'=>'ListOfAlphaNumerics',
              'props'=>['min' => 3, 'max' => 128],
              'required'=>false
          ]
      ],

        'usersMask' => [
            'username' => ['func' => 'CirrLatName',
                'props' => ['min' => 3, 'max' => 64],
                'required' => false],
            'firstname' => ['func' => 'CirrLatName',
                'props' => ['min' => 3, 'max' => 15],
                'required' => false],
            'lastname' => ['func' => 'CirrLatName',
                'props' => ['min' => 3, 'max' => 15],
                'required' => false],
            'middlename' => ['func' => 'CirrLatName',
                'props' => ['min' => 3, 'max' => 15],
                'required' => false],
            'roles' => ['func' => 'multiple',
                'props' => ['func' => 'StrNumbers','min' => 1, 'max' => 64],
                'required' => false],
            'order' => ['func' => 'CirrLatName',
                'props' => ['min' => 1, 'max' => 255],
                'required' => false],
            'start' => ['func' => 'StrNumbers',
                'props' => ['min' => 1, 'max' => 255],
                'required' => false],
            ],

        'addressQuery' => [
            'country' => ['func' => 'StrNumbers',
                'props' => ['min' => 2, 'max' => 10],
                'required' => true],
            'parent_object_name' => ['func' => 'CirrLatName',
                'props' => ['min' => 3, 'max' => 50],
                'required' => false],
            'parent_type' => ['func' => 'CirrLatName',
                'props' => ['min' => 3, 'max' => 50],
                'required' => false],
            'search' => ['func' => 'CirrLatName',
                'props' => ['min' => 2, 'max' => 50],
                'required' => false],
            'limit' => ['func' => 'StrNumbers',
                'props' => ['min' => 1, 'max' => 3],
                'required' => false],
            'offset' => ['func' => 'StrNumbers',
                'props' => ['min' => 1, 'max' => 3],
                'required' => false],
            'full_chain' => [ 'func' => 'ValueFromList',
                'props' => ['list' => ['1', '0']],
                'required' => false]]

    ];

    private static $ref_masks = [
        'address_country' => [
            'func' => 'StrNumbers',
            'props' => ['min' => 2, 'max' => 4],
            'required' => true
        ],
        'address_object' => [
            'func'=>'ListOfAlphaNumerics',
            'props'=>['min' => 3, 'max' => 255],
            'required' => true
        ],
        'full_address_object' => [
            'func'=>'ListOfAlphaNumericsRecursive',
            'props'=>['min' => 3, 'max' => 255],
            'required' => true
        ]
    ];

    public static function getRefMask($name){
        return isset(self::$ref_masks[$name]) ? self::$ref_masks[$name] : false;
    }

    public static function getMask($name){
        return  self::$masks[$name];
    }
}