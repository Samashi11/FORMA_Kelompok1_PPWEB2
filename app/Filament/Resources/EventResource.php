<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventResource extends Resource
{
	protected static ?string $model = Event::class;

	protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

	public static function form(Form $form): Form
	{
		return $form
			->schema([
				Forms\Components\TextInput::make('title')
					->required()
					->maxLength(255)
					->label('Nama Acara'),

				Forms\Components\Textarea::make('description')
					->maxLength(1000)
					->label('Deskripsi'),

				Forms\Components\DateTimePicker::make('event_date')
					->required()
					->label('Tanggal Acara'),

				Forms\Components\TextInput::make('pembicara')
					->required()
					->maxLength(255)
					->label('Pembicara'),

				Forms\Components\TextInput::make('location')
					->required()
					->maxLength(255)
					->label('Lokasi'),

				Forms\Components\FileUpload::make('poster')
					->image()
					->maxSize(1024)
					->label('Poster Acara'),

				Forms\Components\Select::make('status')
					->options([
						'pending' => 'pending',
						'approved' => 'approved',
						'rejected' => 'rejected',
					])
			])->columns(2);
	}

	public static function table(Table $table): Table
	{
		return $table
			->columns([
				Tables\Columns\TextColumn::make('title')
					->label('Nama Acara')
					->searchable()
					->sortable(),

				Tables\Columns\TextColumn::make('pembicara')
					->label('Pembicara')
					->searchable()
					->sortable(),

				Tables\Columns\TextColumn::make('event_date')
					->label('Tanggal')
					->dateTime()
					->searchable()
					->sortable(),

				Tables\Columns\TextColumn::make('location')
					->label('Lokasi')
					->searchable()
					->sortable(),
				
				Tables\Columns\TextColumn::make('status')
					->label('Status')
					->colors([
						'pending' => 'gray',
						'approved' => 'success',
						'rejected' => 'danger',
					])
					->sortable(),
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
			'index' => Pages\ListEvents::route('/'),
			'create' => Pages\CreateEvent::route('/create'),
			'edit' => Pages\EditEvent::route('/{record}/edit'),
		];
	}
}
