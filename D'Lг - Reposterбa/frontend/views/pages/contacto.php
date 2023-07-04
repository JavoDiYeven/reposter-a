
<div class="contact" id="backbox">
  <main>
    <h2>Contacto</h2>
    <p>Si tienes alguna consulta o comentario, por favor completa el siguiente formulario y nos pondremos en contacto contigo a la brevedad posible.</p>
    <form action="controllers/contact.controller.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" required>
        <label for="comentario">Comentario:</label>
        <textarea id="comentario" name="comentario" required></textarea>
        <input type="submit" value="Enviar">
    </form>
  </main>
  