<?php

namespace App\Filament\Resources\Appoinments\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class AppoinmentForm
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
                TextInput::make('phone_number')
                    ->tel()
                    ->required()
                    ->numeric(),
                TextInput::make('age')
                    ->required()
                    ->numeric(),
                Select::make('gender')
                    ->required()
                    ->options(['Male' => 'Male', 'Female' => 'Female']),
                Select::make('specialization')
                    ->required()
                    ->options(['Cardiology' => 'Cardiology', 'Endocrinology' => 'Endocrinology', 'Gastroenterology'=> 'Gastroenterology',
                    'Hematology' => 'Hematology', 'Neurology' => 'Neurology']),
                TextInput::make('doc_name')
                    ->required(),
                DatePicker::make('date')
                    ->required(),
                TimePicker::make('time')
                    ->required(),
            ]);
    }
}
