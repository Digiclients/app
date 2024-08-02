<?php

namespace App\Repositories;

use App\Models\AnnonceAttributesValue;



class AnnonceAttributesValueRepository extends BaseRepository
{

    /**
     * Les champs de recherche disponibles .
     *
     * @var array
     */
    protected $fieldsSearchable = [
        'attributeValue'
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
        parent::__construct(new AnnonceAttributesValue());
    }
}
