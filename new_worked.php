    <form action="../../save_worked.php" method="POST">
    <fieldset class="linea">
        <legend><span class="fa fa-user"></span> Nuevo Usuario </legend>
        <div class="form-two">
        <div>
            <label>Nombre_Usuario:</label>
            <input type="text" name="user" required ></p>           
        </div>
        <div>
            <label for="">Nombre_Completo:</label>
            <input type="text" name="name" required ></p>
        </div>
        <div>
            <label for="">Contraseña:</label>
            <input type="password" name="password" required ></p>
        </div>
        <div>
            <label for="">E-mail:</label>
            <input type="text" name="mail" ></p>
        </div>
        <div>
        <label for="">Avatar:</label>
             <select class="form-control" name="avatar">
                <option value="./css/img/avatars/man-one.svg">Hombre 1</option>
                <option value="./css/img/avatars/man-two.svg">Hombre 2</option>
                <option value="./css/img/avatars/man-three.svg">Hombre 3</option>
                <option value="./css/img/avatars/wom-one.svg">Mujer 1</option>
                <option value="./css/img/avatars/wom-two.svg">Mujer 2</option>
                <option value="./css/img/avatars/won-three.svg">Mujer 3</option>
              </select>
        </div>
        <div>  
        <label for="">Nivel:</label>
             <select class="form-control" name="level">
                <option value="4">Asesor</option>
                <option value="3">Secretaria</option>
              </select>
        </div>
        </div>   
        <p class=""><input type="submit" class="form-boton" value="Crear Usuario" name="save_task"></p>
        </fieldset>
    </form>
    

   
