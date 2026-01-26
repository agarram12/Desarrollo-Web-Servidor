<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index ej2</title>
    </head>

    <body>
        <form action="index.php" method="post">
            <fieldset>
                <legend>Registro de Invento</legend>

                <label>
                    Nombre:
                    <input type="text" name="nombre" required>
                </label><br><br>

                <label>
                    Propósito:
                    <textarea name="proposito" required></textarea>
                </label><br><br>

                <label>
                    Fecha del prototipo:
                    <input type="date" name="fechaPrototipo" required>
                </label><br><br>

                <label>
                    Coste (€):
                    <input type="number" name="coste" step="0.01" min="0" required>
                </label><br><br>

                <label>
                    Tipo de invento:
                    <select name="tipo" required>
                        <option value="">-- Selecciona --</option>
                        <option value="mecanico">Mecánico</option>
                        <option value="electronico">Electrónico</option>
                    </select>
                </label><br><br>

                <fieldset>
                    <legend>Materiales</legend>
                    <label><input type="checkbox" name="materiales[]" value="acero"> Acero</label><br>
                    <label><input type="checkbox" name="materiales[]" value="aluminio"> Aluminio</label><br>
                    <label><input type="checkbox" name="materiales[]" value="plastico"> Plástico</label><br>
                    <label><input type="checkbox" name="materiales[]" value="madera"> Madera</label><br>
                    <label><input type="checkbox" name="materiales[]" value="cobre"> Cobre</label><br>
                    <label><input type="checkbox" name="materiales[]" value="silicio"> Silicio</label><br>
                    <label><input type="checkbox" name="materiales[]" value="vidrio"> Vidrio</label><br>
                    <label><input type="checkbox" name="materiales[]" value="fibra_carbono"> Fibra de carbono</label><br>
                    <label><input type="checkbox" name="materiales[]" value="goma"> Goma</label><br>
                    <label><input type="checkbox" name="materiales[]" value="ceramica"> Cerámica</label><br>
                </fieldset>

                <br>
                <button type="submit">Enviar</button>
            </fieldset>
        </form>
    </body>
</html>