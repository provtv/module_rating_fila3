<?php

declare(strict_types=1);

namespace Modules\Rating\Filament\Resources;

use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Modules\Rating\Enums\RuleEnum;
use Modules\Rating\Filament\Resources\RatingResource\Pages;
use Modules\Rating\Models\Rating;
use Modules\Xot\Filament\Resources\XotBaseResource;

/**
 * Resource per la gestione dei rating.
 * Fornisce l'interfaccia amministrativa per la gestione dei rating nel sistema.
 */
class RatingResource extends XotBaseResource
{
    protected static ?string $model = Rating::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    /**
     * Ottiene lo schema del form per la creazione e modifica dei rating.
     *
     * @return array
     */
    public static function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
            TextInput::make('extra_attributes.type'),
            TextInput::make('extra_attributes.anno'),
            TextInput::make('title')->autofocus()->required(),
            ColorPicker::make('color'),
            Radio::make('rule')->options(RuleEnum::class),
            Section::make()
                ->schema([
                    Toggle::make('is_disabled'),
                    Toggle::make('is_readonly'),
                ]),
            RichEditor::make('txt')->columnSpanFull(),
        ];
    }

=======
            'type' => TextInput::make('extra_attributes.type'),
            'anno' => TextInput::make('extra_attributes.anno'),
            'title' => TextInput::make('title')->autofocus()->required(),
            'color' => ColorPicker::make('color'),
            'rule' => Radio::make('rule')->options(RuleEnum::class),
            'section' => Section::make()
=======
            'type' => TextInput::make('extra_attributes.type')
                ->label('Tipo')
                ->required(),

            'anno' => TextInput::make('extra_attributes.anno')
                ->label('Anno')
                ->required(),

            'title' => TextInput::make('title')
                ->label('Titolo')
                ->autofocus()
                ->required(),

            'color' => ColorPicker::make('color')
                ->label('Colore'),

            'rule' => Radio::make('rule')
                ->label('Regola')
                ->options(RuleEnum::class)
                ->required(),

            'section' => Section::make('Impostazioni')
>>>>>>> 15cc564 (.)
                ->schema([
                    'is_disabled' => Toggle::make('is_disabled')
                        ->label('Disabilitato'),

                    'is_readonly' => Toggle::make('is_readonly')
                        ->label('Sola Lettura'),
                ]),

            'txt' => RichEditor::make('txt')
                ->label('Descrizione')
                ->columnSpanFull(),
        ];
    }

<<<<<<< HEAD
    /*
>>>>>>> 34a017e (.)
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
<<<<<<< HEAD
                TextColumn::make('title'),
                TextColumn::make('type'),
                TextColumn::make('anno'),
                ToggleColumn::make('is_disabled'),
                ToggleColumn::make('is_readonly'),
                IconColumn::make('color'),
            ])
            ->filters([
                //
=======
                TextColumn::make('extra_attributes.type'),
                TextColumn::make('extra_attributes.anno'),
                TextColumn::make('title'),
                TextColumn::make('rule')->badge(),
                // TextColumn::make('is_readonly'),
                // TextColumn::make('is_disabled'),
                // ToggleColumn::make('is_readonly'),
                IconColumn::make('is_disabled')->boolean(),
                IconColumn::make('is_readonly')->boolean(),
                // TextColumn::make('color'),
            ])
            ->filters([
>>>>>>> 34a017e (.)
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
<<<<<<< HEAD
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
=======
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    */
>>>>>>> 34a017e (.)

    public static function getRelations(): array
    {
        return [
<<<<<<< HEAD
            //
=======
>>>>>>> 34a017e (.)
        ];
=======
    /**
     * Ottiene le relazioni disponibili per il resource.
     *
     * @return array
     */
    public static function getRelations(): array
    {
        return [];
>>>>>>> 15cc564 (.)
    }

    /**
     * Ottiene le pagine disponibili per il resource.
     *
     * @return array
     */
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRatings::route('/'),
            'create' => Pages\CreateRating::route('/create'),
            'edit' => Pages\EditRating::route('/{record}/edit'),
        ];
    }
}
