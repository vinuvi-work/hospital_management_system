<?php

namespace App\Filament\Resources\Doctors\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class DoctorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('nic')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('password')
                    ->password()
                    ->required(),
                DatePicker::make('birth_day')
                    ->required(),
                Select::make('gender')
                    ->required()
                    ->options([
                        'Male' => 'Male', 
                        'Female' => 'Female'
                    ]),
                Select::make('specialization')
                    ->required()
                    ->options(['Cardiology' => 'Cardiology', 'Endocrinology' => 'Endocrinology', 'Gastroenterology'=> 'Gastroenterology'
                    , 'Hematology' => 'Hematology', 'Neurology' => 'Neurology']),
                Textarea::make('qualification')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('expereince')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
