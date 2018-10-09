SELECT title, summary from film
WHERE lower(summary) LIKE '%vincent%'
ORDER BY id_film;