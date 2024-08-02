<?php

namespace App\Repositories;

use App\Models\Attribute;
use App\Models\Localization;

class LocalizationRepository extends BaseRepository
{

    /**
     * Les champs de recherche disponibles .
     *
     * @var array
     */
    protected $fieldsSearchable = [
        'localization'
    ];

    /**
     * Renvoie les champs de recherche disponibles.
     *
     * @return array
     */
    public function getFieldsSearchable(): array
    {
        return $this->fieldsSearchable;
    }

    /**
     * Constructeur de la classe ProjetRepository.
     */
    public function __construct()
    {
        parent::__construct(new Localization());
    }
}
