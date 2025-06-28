<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ForumResource\Pages;
use App\Filament\Resources\ForumResource\RelationManagers;
use App\Models\Forum;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ForumResource extends Resource
{
    protected static ?string $model = Forum::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('organization_id')
                    ->relationship('organization', 'name')
                    ->required()
                    ->label('Organisasi'),

                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->label('Judul Diskusi'),

                Textarea::make('content')
                    ->required()
                    ->rows(6)
                    ->label('Isi Diskusi'),

                Select::make('created_by')
                    ->relationship('creator', 'name')
                    ->required()
                    ->label('Dibuat oleh'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('organization.name')->label('Organisasi')->sortable()->searchable(),
                TextColumn::make('title')->label('Judul')->sortable()->searchable(),
                TextColumn::make('creator.name')->label('Pembuat')->sortable()->searchable(),
                TextColumn::make('created_at')->label('Tanggal Buat')->dateTime(),
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
            'index' => Pages\ListForums::route('/'),
            'create' => Pages\CreateForum::route('/create'),
            'edit' => Pages\EditForum::route('/{record}/edit'),
        ];
    }
}
