# Modulo Rating

Data: 2025-04-23 19:09:56

## Informazioni generali

- **Namespace principale**: Modules\\Rating
Modules\\Rating\\Database\\Factories
Modules\\Rating\\Database\\Seeders
- **Pacchetto Composer**: laraxot/module_rating_fila3
Marco Sottana
- **Dipendenze**: 
- **Totale file PHP**: 65
- **Totale classi/interfacce**: 30

## Struttura delle directory

```

.git
.git/branches
.git/hooks
.git/info
.git/logs
.git/logs/refs
.git/logs/refs/heads
.git/logs/refs/remotes
.git/logs/refs/remotes/aurmich
.git/objects
.git/objects/01
.git/objects/02
.git/objects/04
.git/objects/06
.git/objects/08
.git/objects/09
.git/objects/0a
.git/objects/0b
.git/objects/0c
.git/objects/0d
.git/objects/10
.git/objects/11
.git/objects/13
.git/objects/15
.git/objects/16
.git/objects/17
.git/objects/19
.git/objects/1a
.git/objects/1c
.git/objects/1d
.git/objects/1e
.git/objects/21
.git/objects/23
.git/objects/24
.git/objects/26
.git/objects/28
.git/objects/29
.git/objects/2e
.git/objects/2f
.git/objects/31
.git/objects/33
.git/objects/34
.git/objects/35
.git/objects/36
.git/objects/3a
.git/objects/3d
.git/objects/40
.git/objects/42
.git/objects/44
.git/objects/45
.git/objects/47
.git/objects/49
.git/objects/4b
.git/objects/4e
.git/objects/4f
.git/objects/50
.git/objects/51
.git/objects/53
.git/objects/55
.git/objects/58
.git/objects/5a
.git/objects/5b
.git/objects/5c
.git/objects/5d
.git/objects/60
.git/objects/61
.git/objects/62
.git/objects/65
.git/objects/68
.git/objects/6a
.git/objects/6b
.git/objects/72
.git/objects/74
.git/objects/76
.git/objects/78
.git/objects/79
.git/objects/7a
.git/objects/7d
.git/objects/7e
.git/objects/81
.git/objects/82
.git/objects/83
.git/objects/85
.git/objects/87
.git/objects/89
.git/objects/8a
.git/objects/8d
.git/objects/90
.git/objects/91
.git/objects/92
.git/objects/93
.git/objects/94
.git/objects/96
.git/objects/97
.git/objects/98
.git/objects/9c
.git/objects/9d
.git/objects/9e
.git/objects/9f
.git/objects/a0
.git/objects/a2
.git/objects/a3
.git/objects/a6
.git/objects/a7
.git/objects/a8
.git/objects/a9
.git/objects/ad
.git/objects/ae
.git/objects/b1
.git/objects/b2
.git/objects/b3
.git/objects/b4
.git/objects/b5
.git/objects/b6
.git/objects/b7
.git/objects/b9
.git/objects/bb
.git/objects/c5
.git/objects/c6
.git/objects/c7
.git/objects/c9
.git/objects/ca
.git/objects/cc
.git/objects/cf
.git/objects/d0
.git/objects/d4
.git/objects/d5
.git/objects/d9
.git/objects/da
.git/objects/db
.git/objects/dc
.git/objects/e1
.git/objects/e4
.git/objects/e5
.git/objects/e6
.git/objects/e9
.git/objects/eb
.git/objects/ef
.git/objects/f0
.git/objects/f1
.git/objects/f2
.git/objects/f3
.git/objects/f5
.git/objects/f6
.git/objects/f7
.git/objects/f9
.git/objects/fd
.git/objects/info
.git/objects/pack
.git/refs
.git/refs/heads
.git/refs/remotes
.git/refs/remotes/aurmich
.git/refs/tags
.github
.github/ISSUE_TEMPLATE
.github/workflows
.vscode
_docs
app
app/Actions
app/Actions/HasRating
app/Aggregates
app/Console
app/Console/Commands
app/Contracts
app/DataObjects
app/Datas
app/Enums
app/Filament
app/Filament/Actions
app/Filament/Actions/Header
app/Filament/Actions/Table
app/Filament/Blocks
app/Filament/Resources
app/Filament/Resources/HasRatingResource
app/Filament/Resources/HasRatingResource/RelationManagers
app/Filament/Resources/HasRatingResource/Widgets
app/Filament/Resources/RatingMorphResource
app/Filament/Resources/RatingMorphResource/Pages
app/Filament/Resources/RatingResource
app/Filament/Resources/RatingResource/Pages
app/Http
app/Http/Controllers
app/Http/Livewire
app/Http/Middleware
app/Http/Requests
app/Models
app/Models/Contracts
app/Models/Policies
app/Models/Traits
app/Providers
app/Providers/Filament
app/View
app/View/Components
app/View/Components/Dashboard
bashscripts
config
database
database/Seeders
database/factories
database/migrations
database/seeders
docs
docs/.github
docs/.github/workflows
docs/blocks
docs/filament
docs/filament/blocks
docs/filament/pages
docs/models
docs/phpstan
docs/resources
docs/translations
lang
lang/it
resources
resources/assets
resources/assets/js
resources/assets/sass
resources/img
resources/svg
resources/views
resources/views/admin
resources/views/admin/dashboard
resources/views/components
resources/views/components/blocks
resources/views/components/blocks/rating
resources/views/layouts
resources/views/livewire
resources/views/livewire/favorite
resources/views/rate
routes
tests
tests/Feature
tests/Unit
```

## Namespace e autoload

```json
    "autoload": {
        "psr-4": {
            "Modules\\Rating\\": "app/",
            "Modules\\Rating\\Database\\Factories\\": "database/factories/",
            "Modules\\Rating\\Database\\Seeders\\": "database/seeders/"
        }
    },
    "require_comment": {
        "calebporzio/sushi": "^2.4",
        "illuminate/contracts": "^9.0|^10.0|^11.0",
        "illuminate/support": "^9.12|^10.0|^11.0",
        "kalnoy/nestedset": "^6.0",
        "laraxot/module_xot": "dev-master",
        "laraxot/module_lang": "dev-master",
        "livewire/livewire": "^2.10",
        "phpdocumentor/type-resolver": "^1.5",
--
        "post-autoload-dump": [
            "@php vendor/bin/testbench package:discover --ansi"
        ],
        "post-update-cmd": [
            "Illuminate\\Foundation\\ComposerScripts::postUpdate"
        ],
        "analyse": "vendor/bin/phpstan analyse",
        "test": "./vendor/bin/pest --no-coverage",
        "test-coverage": "vendor/bin/pest --coverage-html coverage",
        "format": "vendor/bin/php-cs-fixer fix --allow-risky=yes"
    },
    "config": {
        "sort-packages": true,
        "allow-plugins": {
            "phpstan/extension-installer": true,
            "pestphp/pest-plugin": true
```

## Dipendenze da altri moduli

-       2 Modules\Xot\Traits\Updater;
-       2 Modules\Xot\Filament\Resources\XotBaseResource;
-       2 Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
-       2 Modules\Xot\Database\Migrations\XotBaseMigration;
-       1 Modules\Xot\View\Components\XotBaseComponent;
-       1 Modules\Xot\Providers\XotBaseServiceProvider;
-       1 Modules\Xot\Providers\XotBaseRouteServiceProvider;
-       1 Modules\Xot\Providers\Filament\XotBasePanelProvider;
-       1 Modules\Xot\Actions\Filament\Block\GetViewBlocksOptionsByTypeAction;
-       1 Modules\User\Models\User;

## Collegamenti alla documentazione generale

- [Analisi strutturale complessiva](/docs/phpstan/modules_structure_analysis.md)
- [Report PHPStan](/docs/phpstan/)

