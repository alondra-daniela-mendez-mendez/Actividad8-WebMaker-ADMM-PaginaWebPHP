<?php include('header.php'); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Registro de Clientes</h1>
			</div>

			<div class="articulo">
				<article>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                        <h3>Para solicitar un servicio registra tus datos para ponernos en contacto contigo.<br><br></h3>
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
                        <label for="servicio">Servicio:</label>
                        <input list="servicios" name="area" id="servicio" required placeholder="Servicio Solicitado">
                            <datalist id="servicios">
                                <option value="Diseño de Página Web">
                                <option value="Programación de aplicaciones Web">
                                <option value="Desarrollo de aplicaciones moviles">
                                <option value="Bases de Datos">
                                <option value="Contratación de Servidores">
                                <option value="Iniciación en AI">
                            </datalist><br><br>
						<label for="prop">Cuentanos tu propuesta para una mayor personalización de servicio:</label>
						<textarea class="txta" rows="5" cols="60" placeholder="Mi propuesta es..."></textarea><br><br>
                        <input class="boton" type="submit" value="Enviar" name="submit">
						<?php
                            if(isset($_POST['submit'])){
                                echo "Tu información ha sido capturada, te contactaremos a la brevedad para iniciar tu proyecto ♥";
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