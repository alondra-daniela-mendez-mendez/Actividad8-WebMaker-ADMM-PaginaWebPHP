<?php include('header.php'); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Registro de Empleados</h1>
			</div>

			<div class="articulo">
				<article>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                        <h3>Ingrese sus datos completos para poder ser registrado, nosotros lo contactaremos por medio de su correo electronico o telefono.<br><br></h3>
                        <label for="fname">Nombres:</label>
                        <input type="text" id="fname" name="fname" required><br><br>
                        <label for="lname">Apellidos:</label>
                        <input type="text" id="lname" name="lname" required><br><br>
                        <label for="curp">CURP:</label>
                        <input type="text" id="curp" name="curp" pattern=".{18,}" required placeholder="18 caracteres"><br><br>
                        <label for="email">Correo Electrónico:</label>
                        <input type="email" id="email" name="email" required><br><br>
                        <label for="tel">Teléfono:</label>
                        <input type="tel" id="tel" name="tel" pattern="\([0-9]{3}\)-[0-9]{3}-[0-9]{2}-[0-9]{2}" placeholder="(###)-###-##-##" required><br><br>
                        <label for="date">Fecha de Nacimiento:</label>
                        <input type="date" id="date" name="date" required><br><br>
                        <label for="especialidad">Área de Especialización:</label>
                        <input list="areaesp" name="area" id="especialidad" required>
                            <datalist id="areaesp">
                                <option value="Web FrontEnd">
                                <option value="Web BackEnd">
                                <option value="Desarrollo Móvil">
                                <option value="Manejo de Bases de Datos">
                                <option value="Especialización en Servidores">
                                <option value="Machine Learning">
                            </datalist><br><br>
                            <label for="gen">Género:</label>
                            <input class="rb" type="radio" name="genero" value="hombre" required>
                            <label for="html">Hombre</label>
                            <input class="rb" type="radio" name="genero" value="mujer">
                            <label for="css">Mujer</label><br><br>
                        <input class="boton" type="submit" value="Enviar" name="submit">
                        <?php
                            if(isset($_POST['submit'])){
                                echo "Tus datos han sido registrados, te llamaremos en cuanto tengamos una propuesta";
                            }
                        ?>
                    </form>
				</article>
			</div>

            <?php include('sidebar.php'); ?>
		</div>
	</section>
    <?php include('footer.php'); ?>
</body>
</html>