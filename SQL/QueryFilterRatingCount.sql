select
    case
        when rating >= 4.5 then '4.5'
        when rating >= 4.0 then '4.0'
        when rating >= 3.5 then '3.5'
        when rating >= 3.0 then '3.0'
        end as rating_filter,
    count(*) as total,
    sum(COUNT(*)) over(ROWS BETWEEN 3 PRECEDING AND CURRENT ROW) as sum_total
from
    (
        select title, courses.id,
               round(avg(rating), 1) as rating
        from courses
                 inner join reviews on courses.id = reviews.course_id
        group by title, courses.id
        order by rating DESC
    )   as avg_course_rating
GROUP by rating_filter
having rating_filter is not null
