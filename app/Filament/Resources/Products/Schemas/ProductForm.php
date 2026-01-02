<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Product Name')
                    ->required()
                    ->maxLength(255),

                Select::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->required(),

                TextInput::make('price')
                    ->label('Price')
                    ->numeric()
                    ->required(),

                Textarea::make('description')
                    ->label('Description'),
            ]);
    }
}
