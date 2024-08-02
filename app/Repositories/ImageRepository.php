<?php

namespace App\Repositories;

use App\Models\Image;


class ImageRepository extends BaseRepository
{

    /**
     * Les champs de recherche disponibles .
     *
     * @var array
     */
    protected $fieldsSearchable = [
        'alt',
        'path',
        'feature_img'
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
        parent::__construct(new Image());
    }
}
