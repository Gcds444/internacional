<?php

namespace App\Service;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string $email_analise_aluno;
    public string $email_analise_ccint;
    public string $email_deferido;
    public string $email_indeferido;

    public static function group(): string
    {
        // Corpo do email: em elaboração -> análise

        return 'general';
    }
}