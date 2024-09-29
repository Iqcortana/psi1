<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Card; // Tambahkan Card
use Illuminate\Support\Str;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    protected function getFormSchema(): array
    {
        return [
            Card::make([ // Bungkus semua field dalam Card
                TextInput::make('title')
                    ->required()
                    ->afterStateUpdated(function ($state, callable $set) {
                        // Isi slug otomatis dari title
                        $set('slug', Str::slug($state));
                    }),

                TextInput::make('slug')
                    ->disabled()
                    ->required(),

                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),

                FileUpload::make('image')
                    ->required(),

                RichEditor::make('blog')
                    ->required(),
            ]),
        ];
    }
}
