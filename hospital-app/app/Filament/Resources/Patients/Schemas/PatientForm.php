<?php

namespace App\Filament\Resources\Patients\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class PatientForm
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
                TextInput::make('phone_number')
                    ->tel()
                    ->required(),
                TextInput::make('age')
                    ->required()
                    ->numeric(),
                Select::make('gender')
                    ->required()
                    ->options([
                        'Male' => 'Male',
                        'Female' => 'Female'
                    ]),
                Select::make('blood_type')
                    ->required()
                    ->options(['A+' => 'A+','A-' => 'A-','O+' => 'O+','O-' => 'O-','AB+' => 'AB+', 'AB-' => 'AB-']),
                Textarea::make('health_history')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
