insert INTO empresas (Cedula_NIT,Tipo_doc,Nombre,Direccion,Correo,Telefono)
values(1,'NIT','Pasteles Juana','Online','',3125487621);

select*from usuarios;
SELECT * FROM empresas ORDER BY Nombre;

delete from empresas where Cedula_NIT=123457;

SELECT productos.idProducto, empresas.Nombre, productos.precio,productos.Descripcion,productos.Categoria
FROM productos 
INNER JOIN empresas ON productos.Empresas_Cedula_NIT=empresas.Cedula_NIT WHERE Empresas_Cedula_NIT=12345;