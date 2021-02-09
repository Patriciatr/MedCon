<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="ClaraJV">
        <title>Formulario</title>
        
    </head>
    <body>
        <form method="POST">
            <table>
                <tr><td><pre><b>Nombre   </b></pre></td>
                    <td><input type="text" name="nombre"></td>
                </tr>
                <tr><td><pre><b>Apellidos   </b></pre></td>
                    <td><input type="text" name="apellidos"></td>
                </tr>
                <tr><td><pre><b>Fecha de Nacimiento   </b></pre></td>
                    <td><input type="date" name="nacimiento"></td>
                </tr>
                <tr><td><pre><b>Sexo   </b></pre></td>
                    <td>
                        <input type="radio" name="sexo" value="Mujer" <?php  ?>>Mujer
                        <input type="radio" name="sexo" value="Hombre">Hombre
                        <input type="radio" name="sexo" value="Otro">Otro
                    </td>
                </tr>
                <tr><td><pre><b>email   </b></pre></td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr><td><pre><b>Teléfono   </b></pre></td>
                    <td><input type="text" name="telefono" maxlength="9"></td>
                </tr>
                <tr><td><pre><b>Dirección   </b></pre></td>
                    <td><input type="text" name="direccion"></td>
                </tr>
                <tr><td><pre><b>Código Postal   </b></pre></td>
                    <td><input type="text" name="cp" maxlength="5"></td>
                </tr>
                <tr><td><pre><b>Localidad   </b></pre></td>
                    <td><input type="text" name="localidad"></td>
                </tr>
                <tr><td><pre><b>Provincia   </b></pre></td>
                    <td>
                        <select name="provincia" >
                            <option value="Almería" selected>Almería</option>
                            <option value="Cádiz">Cádiz</option>
                            <option value="Córdoba">Córdoba</option>
                            <option value="Granada">Granada</option>
                            <option value="Huelva">Huelva</option>
                            <option value="Jaén">Jaén</option>
                            <option value="Málaga">Málaga</option>
                            <option value="Sevilla">Sevilla</option>
                        </select>
                    </td>
                </tr>
                <tr><td><pre><b>Fotografía   </b></pre></td>
                    <td><input type="file" name="foto"></td>
                </tr>
                <tr><td><pre><b>Alergias   </b></pre></td>
                    <td>
                        <input type="checkbox" name="leche">leche
                        <input type="checkbox" name="gluten">gluten
                        <input type="checkbox" name="huevo">huevo
                        <input type="checkbox" name="polvo">polvo
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="checkbox" name="datos">Acepto que estos datos sean usados por el personal médico.
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="enviar">
                        <input type="reset" name="borrar">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>