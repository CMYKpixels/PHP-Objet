

use scratch;
# INNER JOIN
# select * from a INNER JOIN b on a.nombre = b.nombre;

# LEFT JOIN
# select * from a LEFT JOIN b on a.nombre = b.nombre;

# RIGHT JOIN
#  select * from a RIGHT JOIN b on a.nombre = b.nombre;

# FULL OUTER JOIN  --> Equivalent à FULL OUTER JOIN
# select * from a LEFT JOIN b on a.nombre = b.nombre
# UNION
# select * from a RIGHT JOIN b on a.nombre = b.nombre;


########################

# ONLY A
# select * from a LEFT JOIN b on a.nombre = b.nombre
# WHERE b.nombre IS NULL;

# ONLY B
# select * from a RIGHT JOIN b on a.nombre = b.nombre
# WHERE a.nombre IS NULL;


#ONLY Intersection A et B
# select * from a LEFT JOIN b on a.nombre = b.nombre
# WHERE b.nombre IS NULL
# UNION
# select * from a RIGHT JOIN b on a.nombre = b.nombre
# WHERE a.nombre IS NULL
# ;

