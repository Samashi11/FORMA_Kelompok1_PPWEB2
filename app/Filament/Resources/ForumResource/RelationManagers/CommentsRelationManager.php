<?php

namespace App\Filament\Resources\ForumResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CommentsRelationManager extends RelationManager
{
    protected static string $relationship = 'comments';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
              
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('forum_id')
            ->columns([
                 Tables\Columns\TextColumn::make('user.name'),
                Tables\Columns\TextColumn::make('comment_text'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('tanggal komen'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
