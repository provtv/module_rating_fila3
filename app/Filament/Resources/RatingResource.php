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

class RatingResource extends XotBaseResource
{
    protected static ?string $model = Rating::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
            'type' => TextInput::make('extra_attributes.type'),
            'anno' => TextInput::make('extra_attributes.anno'),
            'title' => TextInput::make('title')->autofocus()->required(),
            'color' => ColorPicker::make('color'),
            'rule' => Radio::make('rule')->options(RuleEnum::class),
            'section' => Section::make()
                ->schema([
                    'is_disabled' => Toggle::make('is_disabled'),
                    'is_readonly' => Toggle::make('is_readonly'),
                ]),
            'txt' => RichEditor::make('txt')->columnSpanFull(),
        ];
    }

    /*
=======
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

>>>>>>> 9824d3a (.)
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
<<<<<<< HEAD
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
=======
                TextColumn::make('title'),
                TextColumn::make('type'),
                TextColumn::make('anno'),
                ToggleColumn::make('is_disabled'),
                ToggleColumn::make('is_readonly'),
                IconColumn::make('color'),
            ])
            ->filters([
                //
>>>>>>> 9824d3a (.)
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
<<<<<<< HEAD
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    */
=======
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
>>>>>>> 9824d3a (.)

    public static function getRelations(): array
    {
        return [
<<<<<<< HEAD
=======
            //
>>>>>>> 9824d3a (.)
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRatings::route('/'),
            'create' => Pages\CreateRating::route('/create'),
            'edit' => Pages\EditRating::route('/{record}/edit'),
        ];
    }
}
