<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:output method="html"/>
  <xsl:template match="/">
    <html>
      <head>
        <title>Ejemplo factura</title>
      </head>
      <body>
        <h2>Consulta XML</h2>
        <br />
        <table border="1">
          <tr>
            <th>Nombre</th>
            <th>Apellido paterno</th>
          </tr>
          <tr>
            <td>
              <xsl:value-of select="alumnos/alumno/nombre"/>
            </td>
            <td>
              <xsl:value-of select="alumnos/alumno/appaterno"/>
            </td>
          </tr>
        </table>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>
