<<<<<<< HEAD:resources/lang/it/rating.php
<?php

declare(strict_types=1);

return [
    'resource' => [
        'name' => 'Rating',
    ],
    'navigation' => [
        'name' => 'Rating',
        'plural' => 'Rating',
        'group' => [
            'name' => 'Admin',
        ],
    ],
    'fields' => [
        'brand' => [
            'label' => 'Marca',
        ],
        'model' => [
            'label' => 'Modello',
        ],
        'description' => [
            'label' => 'Descrizione',
        ],
        'serial_number' => [
            'label' => 'Numero di serie',
        ],
        'inventory_number' => [
            'label' => 'Codice inventario',
        ],
        'code' => [
            'label' => 'Identificativo',
        ],
        'manufacturing_year' => [
            'label' => 'Anno di fabbricazione',
        ],
        'purchase_year' => [
            'label' => 'Anno di acquisto',
        ],
        'is_enabled' => [
            'label' => 'È attivo?',
        ],
        'asset_type' => [
            'label' => 'Tipologia',
        ],
        'area' => [
            'label' => 'Area',
        ],
        'parent' => [
            'label' => 'Asset genitore',
        ],
        'name' => [
            'label' => 'Nome',
        ],
        'is_disabled' => [
            'label' => 'is_disabled',
        ],
        'is_readonly' => [
            'label' => 'is_readonly',
        ],
        '_tpl' => [
            'label' => '_tpl',
        ],
        'ratings' => [
            'label' => 'ratings',
        ],
        'id' => [
            'label' => 'id',
        ],
        'title' => [
            'label' => 'title',
        ],
        'color' => [
            'label' => 'color',
        ],
        'rating' => [
            'label' => 'rating',
        ],
        'view' => [
            'label' => 'view',
        ],
    ],
    'actions' => [
        'enable' => [
            'cta' => 'Attiva',
        ],
        'disable' => [
            'cta' => 'Dismetti',
        ],
        'import' => [
            'row_number' => 'Riga :row',
            'fields' => [
                'import_file' => 'Seleziona un file XLS o CSV da caricare',
            ],
        ],
        'export' => [
            'filename_prefix' => 'Lista asset al',
            'columns' => [
                'brand' => 'Marca',
                'model' => 'Modello',
                'description' => 'Descrizione',
                'serial_number' => 'Numero di serie',
                'inventory_number' => 'Codice inventario',
                'code' => 'Identificativo',
                'manufacturing_year' => 'Anno di fabbricazione',
                'purchase_year' => 'Anno di acquisto',
                'is_enabled' => 'È attivo?',
                'asset_type' => 'Tipologia',
                'parent_inventory_number' => 'Codice inventario genitore',
            ],
        ],
    ],
    'widgets' => [
        'child_assets' => 'Asset figli',
    ],
    'exceptions' => [
        'mandatory_data' => '{1} Dato obbligatorio non presente|{2} 2 Dati obbligatori non presenti|{3} 3 Dati obbligatori non presenti|[4,*] Vari dati obbligatori non presenti',
    ],
];
=======
<?php return array (
  'resource' => 
  array (
    'name' => 'Rating',
  ),
  'navigation' => 
  array (
    'name' => 'Rating',
    'plural' => 'Rating',
    'group' => 
    array (
      'name' => 'Admin',
    ),
    'label' => 'rating.navigation',
  ),
  'fields' => 
  array (
    'brand' => 
    array (
      'label' => 'Marca',
    ),
    'model' => 
    array (
      'label' => 'Modello',
    ),
    'description' => 
    array (
      'label' => 'Descrizione',
    ),
    'serial_number' => 
    array (
      'label' => 'Numero di serie',
    ),
    'inventory_number' => 
    array (
      'label' => 'Codice inventario',
    ),
    'code' => 
    array (
      'label' => 'Identificativo',
    ),
    'manufacturing_year' => 
    array (
      'label' => 'Anno di fabbricazione',
    ),
    'purchase_year' => 
    array (
      'label' => 'Anno di acquisto',
    ),
    'is_enabled' => 
    array (
      'label' => 'È attivo?',
    ),
    'asset_type' => 
    array (
      'label' => 'Tipologia',
    ),
    'area' => 
    array (
      'label' => 'Area',
    ),
    'parent' => 
    array (
      'label' => 'Asset genitore',
    ),
    'name' => 
    array (
      'label' => 'Nome',
    ),
    'is_disabled' => 
    array (
      'label' => 'is_disabled',
    ),
    'is_readonly' => 
    array (
      'label' => 'is_readonly',
    ),
    '_tpl' => 
    array (
      'label' => '_tpl',
    ),
    'ratings' => 
    array (
      'label' => 'ratings',
    ),
    'id' => 
    array (
      'label' => 'id',
    ),
    'title' => 
    array (
      'label' => 'title',
    ),
    'color' => 
    array (
      'label' => 'color',
    ),
    'rating' => 
    array (
      'label' => 'rating',
    ),
    'view' => 
    array (
      'label' => 'view',
    ),
  ),
  'actions' => 
  array (
    'enable' => 
    array (
      'cta' => 'Attiva',
    ),
    'disable' => 
    array (
      'cta' => 'Dismetti',
    ),
    'import' => 
    array (
      'row_number' => 'Riga :row',
      'fields' => 
      array (
        'import_file' => 'Seleziona un file XLS o CSV da caricare',
      ),
    ),
    'export' => 
    array (
      'filename_prefix' => 'Lista asset al',
      'columns' => 
      array (
        'brand' => 'Marca',
        'model' => 'Modello',
        'description' => 'Descrizione',
        'serial_number' => 'Numero di serie',
        'inventory_number' => 'Codice inventario',
        'code' => 'Identificativo',
        'manufacturing_year' => 'Anno di fabbricazione',
        'purchase_year' => 'Anno di acquisto',
        'is_enabled' => 'È attivo?',
        'asset_type' => 'Tipologia',
        'parent_inventory_number' => 'Codice inventario genitore',
      ),
    ),
  ),
  'widgets' => 
  array (
    'child_assets' => 'Asset figli',
  ),
  'exceptions' => 
  array (
    'mandatory_data' => '{1} Dato obbligatorio non presente|{2} 2 Dati obbligatori non presenti|{3} 3 Dati obbligatori non presenti|[4,*] Vari dati obbligatori non presenti',
  ),
);
>>>>>>> a0f1040033358dfaeb3c1129c97ad8dc3e4cb0b2:lang/it/rating.php
