SELECT LEFT(REVERSE(telephone), 9) AS 'enohpolet'
FROM distrib
WHERE LEFT(telephone, 2) = '05'
