<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrganizationResource\Pages;
use App\Filament\Resources\OrganizationResource\RelationManagers;
use App\Models\Organization;
use Filament\Forms;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrganizationResource extends Resource
{
	protected static ?string $model = Organization::class;

	protected static ?string $navigationIcon = 'heroicon-o-building-office';

	public static function form(Form $form): Form
	{
		return $form
			->schema([
				Forms\Components\TextInput::make('name')
					->required()
					->maxLength(255)
					->label('Nama Organisasi'),

				Forms\Components\Textarea::make('description')
					->maxLength(1000)
					->label('Deskripsi'),

				Forms\Components\FileUpload::make('logo')
					->image()
					->maxSize(1024)
					->label('Logo'),

				Forms\Components\Select::make('type')
					->options([
						'HIMATI' => 'HIMATI',
						'BEM' => 'BEM',
						'LDK' => 'LDK',
						'HIMANIS' => 'HIMANIS',
						'HIMASI' => 'HIMASI',
						'DPM' => 'DPM',
					])
					->required()
					->label('Tipe Organisasi'),
			])->columns(2);
	}

	public static function table(Table $table): Table
	{
		return $table
			->columns([
				Tables\Columns\ImageColumn::make('logo')
					->label('Logo')
					->circular()
					->size(50),

				Tables\Columns\TextColumn::make('name')
					->searchable()
					->sortable()
					->label('Nama Organisasi'),

				Tables\Columns\TextColumn::make('type')
					->sortable()
					->label('Tipe'),

				Tables\Columns\TextColumn::make('created_at')
					->dateTime()
					->sortable()
					->label('Dibuat Pada'),

				Tables\Columns\TextColumn::make('updated_at')
					->dateTime()
					->sortable()
					->label('Diperbarui Pada'),
			])
			->filters([
				//
			])
			->actions([
				Tables\Actions\ViewAction::make(),
				Tables\Actions\EditAction::make(),
				Tables\Actions\DeleteAction::make(),
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
			'index' => Pages\ListOrganizations::route('/'),
			'create' => Pages\CreateOrganization::route('/create'),
			'edit' => Pages\EditOrganization::route('/{record}/edit'),
		];
	}
}
