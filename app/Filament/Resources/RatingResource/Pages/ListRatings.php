<?php

declare(strict_types=1);

namespace Modules\Rating\Filament\Resources\RatingResource\Pages;

use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;
use Modules\Rating\Filament\Resources\RatingResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

/**
 * Classe per la gestione della lista dei rating.
 * Estende XotBaseListRecords per fornire funzionalità di base per la visualizzazione dei record.
 */
class ListRatings extends XotBaseListRecords
{
    protected static string $resource = RatingResource::class;

    /**
     * Ottiene le colonne della tabella per la visualizzazione dei rating.
     *
     * @return array
     */
    public function getListTableColumns(): array
    {
        return [
<<<<<<< HEAD
            'id' => TextColumn::make('id')
                ->sortable()
                ->searchable(),
            'title' => TextColumn::make('title')
                ->sortable()
                ->searchable(),
            'rule' => TextColumn::make('rule')
                ->badge(),
            'is_disabled' => IconColumn::make('is_disabled')
                ->boolean(),
            'is_readonly' => IconColumn::make('is_readonly')
                ->boolean(),
        ];

        // TextColumn::make('extra_attributes.type'),
        // TextColumn::make('extra_attributes.anno'),

        // TextColumn::make('is_readonly'),
        // TextColumn::make('is_disabled'),
        // ToggleColumn::make('is_readonly'),

        // TextColumn::make('color'),
=======
            TextColumn::make('id')
                ->sortable()
                ->searchable()
                ->label('ID'),

            TextColumn::make('title')
                ->sortable()
                ->searchable()
                ->label('Titolo'),

            TextColumn::make('rule')
                ->badge()
                ->label('Regola'),

            IconColumn::make('is_disabled')
                ->boolean()
                ->label('Disabilitato'),

            IconColumn::make('is_readonly')
                ->boolean()
                ->label('Sola Lettura'),
        ];
>>>>>>> 34a017e (.)
    }

    /**
     * Ottiene i filtri disponibili per la tabella.
     *
     * @return array
     */
    public function getTableFilters(): array
    {
        return [
<<<<<<< HEAD
=======
            // Implementare i filtri necessari
>>>>>>> 34a017e (.)
        ];
    }

    /**
     * Ottiene le azioni disponibili per ogni riga della tabella.
     *
     * @return array
     */
    public function getTableActions(): array
    {
        return [
<<<<<<< HEAD
            'view' => ViewAction::make()
                ->label(''),
            'edit' => EditAction::make()
                ->label(''),
            'delete' => DeleteAction::make()
=======
            ViewAction::make()
                ->label('Visualizza'),

            EditAction::make()
                ->label('Modifica'),

            DeleteAction::make()
<<<<<<< HEAD
>>>>>>> 34a017e (.)
                ->label('')
=======
                ->label('Elimina')
>>>>>>> 15cc564 (.)
                ->requiresConfirmation(),
        ];
    }

    /**
     * Ottiene le azioni bulk disponibili per la tabella.
     *
     * @return array
     */
    public function getTableBulkActions(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
            'delete' => DeleteBulkAction::make(),
=======
            DeleteBulkAction::make(),
>>>>>>> 34a017e (.)
=======
            DeleteBulkAction::make()
                ->label('Elimina Selezionati'),
>>>>>>> 15cc564 (.)
        ];
    }

    /**
     * Configura la tabella con le impostazioni specifiche.
     *
     * @param Table $table
     * @return Table
     */
    public function table(Table $table): Table
    {
        return $table
<<<<<<< HEAD
            // ->columns($this->getTableColumns())
            ->columns($this->layoutView->getTableColumns())
            ->contentGrid($this->layoutView->getTableContentGrid())
            ->headerActions($this->getTableHeaderActions())

=======
            ->columns($this->layoutView->getTableColumns())
            ->contentGrid($this->layoutView->getTableContentGrid())
            ->headerActions($this->getTableHeaderActions())
>>>>>>> 34a017e (.)
            ->filters($this->getTableFilters())
            ->filtersLayout(FiltersLayout::AboveContent)
            ->persistFiltersInSession()
            ->actions($this->getTableActions())
            ->bulkActions($this->getTableBulkActions())
            ->actionsPosition(ActionsPosition::BeforeColumns)
            ->defaultSort(
                column: 'created_at',
                direction: 'DESC',
            );
    }
}
