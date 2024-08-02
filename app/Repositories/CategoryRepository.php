<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Support\Facades\DB;


class CategoryRepository extends BaseRepository
{

    /**
     * Les champs de recherche disponibles .
     *
     * @var array
     */
    protected $fieldsSearchable = [
        'category_name',
        'slug',
        'parent_category_id',
        'main_category'
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
        parent::__construct(new Category());
    }

    public function getChildsCategory(int $id)
    {
        return $this->model->where('parent_category_id', $id)->get();
    }

    public function getParentParentCategory()
    {
        return $this->model->whereNull('parent_category_id')->get();
    }


    /**
     * Get the first child category id and name of a given category slug.
     *
     * @param string $slug
     * @return array|null
     */
    public function getFirstChildCategoryBySlug($slug)
    {
        $result = DB::select("
            WITH RECURSIVE CategoryHierarchy AS (
                SELECT
                    id,
                    category_name,
                    parent_category_id
                FROM
                    categories
                WHERE
                    slug = ?
                UNION ALL
                SELECT
                    c.id,
                    c.category_name,
                    c.parent_category_id
                FROM
                    categories c
                INNER JOIN
                    CategoryHierarchy ch
                ON
                    c.id = ch.parent_category_id
            )
            SELECT
                id,
                category_name
            FROM
                CategoryHierarchy
            WHERE
                parent_category_id IS NOT NULL
            ORDER BY
                parent_category_id
            LIMIT 1;
        ", [$slug]);

        return $result ? ['id' => $result[0]->id, 'category_name' => $result[0]->category_name] : null;
    }




    /**
     *
     * WITH RECURSIVE CategoryHierarchy AS (
     * SELECT id, category_name, parent_category_id FROM
     * categories
     * WHERE slug = 't-max_360'
     * UNION ALL
     * SELECT  c.id, c.category_name, c.parent_category_id
     * FROM categories c
     * INNER JOIN
     *     CategoryHierarchy ch
     * ON
     *   c.id = ch.parent_category_id
     * )
     * SELECT
     * category_name
     * FROM
     *     CategoryHierarchy
     * WHERE
     *     parent_category_id IS NOT NULL
     * ORDER BY
     *     parent_category_id
     * LIMIT 1;
     */

}
