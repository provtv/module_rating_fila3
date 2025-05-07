<?php

declare(strict_types=1);

return [
    'resource' => [
<<<<<<< HEAD
        'name' => ['label' => 'Rating'],
    ],
    'navigation' => [
        'name' => ['label' => 'Rating'],
        'plural' => ['label' => 'Rating'],
        'group' => [
            'name' => ['label' => 'Admin'],
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
=======
        'name' => 'Rating',
        'plural' => 'Ratings',
    ],
    'navigation' => [
        'name' => 'Rating',
        'plural' => 'Ratings',
        'group' => [
            'name' => 'Admin',
        ],
    ],
    'fields' => [
        'id' => [
            'label' => 'ID',
            'help' => 'Identificativo univoco del rating',
        ],
        'title' => [
            'label' => 'Titolo',
            'help' => 'Titolo del rating',
        ],
        'description' => [
            'label' => 'Descrizione',
            'help' => 'Descrizione dettagliata',
        ],
        'rating' => [
            'label' => 'Valutazione',
            'help' => 'Valore numerico della valutazione',
        ],
        'color' => [
            'label' => 'Colore',
            'help' => 'Colore associato al rating',
        ],
        'is_enabled' => [
            'label' => 'Attivo',
            'help' => 'Indica se il rating è attivo',
        ],
        'is_disabled' => [
            'label' => 'Disabilitato',
            'help' => 'Indica se il rating è disabilitato',
        ],
        'is_readonly' => [
            'label' => 'Sola lettura',
            'help' => 'Indica se il rating è in sola lettura',
        ],
        'view' => [
            'label' => 'Vista',
            'help' => 'Template di visualizzazione',
>>>>>>> 34a017e (.)
        ],
    ],
    'actions' => [
        'enable' => [
<<<<<<< HEAD
            'cta' => ['label' => 'Attiva'],
            'label' => ['label' => 'Attiva'],
        ],
        'disable' => [
            'cta' => ['label' => 'Dismetti'],
            'label' => ['label' => 'Dismetti'],
        ],
        'import' => [
            'row_number' => ['label' => 'Riga :row'],
            'label' => ['label' => 'Importa'],
            'fields' => [
                'import_file' => ['label' => 'Seleziona un file XLS o CSV da caricare'],
            ],
        ],
        'export' => [
            'filename_prefix' => ['label' => 'Lista asset al'],
            'label' => ['label' => 'Esporta'],
            'columns' => [
                'brand' => ['label' => 'Marca'],
                'model' => ['label' => 'Modello'],
                'description' => ['label' => 'Descrizione'],
                'serial_number' => ['label' => 'Numero di serie'],
                'inventory_number' => ['label' => 'Codice inventario'],
                'code' => ['label' => 'Identificativo'],
                'manufacturing_year' => ['label' => 'Anno di fabbricazione'],
                'purchase_year' => ['label' => 'Anno di acquisto'],
                'is_enabled' => ['label' => 'È attivo?'],
                'asset_type' => ['label' => 'Tipologia'],
                'parent_inventory_number' => ['label' => 'Codice inventario genitore'],
            ],
        ],
    ],
    'widgets' => [
        'child_assets' => ['label' => 'Asset figli'],
    ],
    'exceptions' => [
        'mandatory_data' => ['label' => '{1} Dato obbligatorio non presente|{2} 2 Dati obbligatori non presenti|{3} 3 Dati obbligatori non presenti|[4,*] Vari dati obbligatori non presenti'],
=======
            'label' => 'Attiva',
            'help' => 'Attiva il rating',
        ],
        'disable' => [
            'label' => 'Disattiva',
            'help' => 'Disattiva il rating',
        ],
        'import' => [
            'label' => 'Importa',
            'help' => 'Importa ratings da file',
            'row_number' => 'Riga :row',
            'fields' => [
                'import_file' => 'Seleziona un file XLS o CSV da caricare',
            ],
        ],
        'export' => [
            'label' => 'Esporta',
            'help' => 'Esporta ratings in file',
            'filename_prefix' => 'Lista ratings al',
        ],
    ],
    'messages' => [
        'created' => 'Rating creato con successo',
        'updated' => 'Rating aggiornato con successo',
        'deleted' => 'Rating eliminato con successo',
        'enabled' => 'Rating attivato con successo',
        'disabled' => 'Rating disattivato con successo',
    ],
<<<<<<< HEAD
    'exceptions' => [
        'mandatory_data' => '{1} Dato obbligatorio non presente|{2} 2 Dati obbligatori non presenti|{3} 3 Dati obbligatori non presenti|[4,*] Vari dati obbligatori non presenti',
>>>>>>> 34a017e (.)
    ],
=======
>>>>>>> 15cc564 (.)
];
