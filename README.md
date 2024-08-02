## Query for return annonces
```sql
SELECT 
    a.id AS annonce_id,
    a.user_id AS user_id,
    a.boutique_id AS boutique_id,
    a.category_id AS category_id,
    a.localization_id AS localization_id,
    a.title AS annonce_title,
    a.description AS annonce_description,
    a.price AS annonce_price,
    a.email AS annonce_email,
    a.phone AS annonce_phone,
    a.publication_date AS annonce_publication_date,
    att.id AS attribute_id,
    att.name AS attribute_name,
    att.type AS attribute_type,
    atv.attributeValue AS attribute_value,
    ao.optionValue AS attribute_option_value
FROM 
    annonces a
JOIN 
    annonce_attributes_values atv ON a.id = atv.annonce_id
JOIN 
    attributes att ON atv.attribute_id = att.id
LEFT JOIN 
    attributes_options ao ON atv.attributeOption_id = ao.id;
```

## Query for return Childs specific category

```sql 
SELECT c2.*
FROM categories c1
JOIN categories c2 ON c1.id = c2.parent_category_id
WHERE c1.slug = 'voitures' AND c2.main_category = 1;
```