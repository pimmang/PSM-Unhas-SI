<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KostumResource\Pages;
use App\Filament\Resources\KostumResource\RelationManagers;
use App\Models\Kostum;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Masterminds\HTML5\Parser\FileInputStream;

class KostumResource extends Resource
{
    protected static ?string $model = Kostum::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->label('Nama Kostum')
                    ->required(),
                TextInput::make('lokasi')
                    ->required(),
                TextInput::make('kondisi')
                    ->required(),
                TextInput::make('jumlah')
                    ->label('Jumlah')
                    ->numeric()
                    ->required(),
                FileUpload::make('foto')
                    ->label('Gambar Kostum')
                    ->required()
                    ->columnSpan(2)
                    ->directory('kostum'),
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama Kostum'),
                TextColumn::make('lokasi'),
                TextColumn::make('jumlah'),
                TextColumn::make('kondisi'),
                ImageColumn::make('foto'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKosta::route('/'),
            'create' => Pages\CreateKostum::route('/create'),
            'edit' => Pages\EditKostum::route('/{record}/edit'),
        ];
    }
}
