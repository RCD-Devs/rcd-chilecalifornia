<?php
/**
 * Template Name: Contact
 *
 * @package chilecalifornia
 */

get_header();

?>

<style> 
.background {
      position: relative;
      height: 60vh;
      background: url('<?php echo get_template_directory_uri(); ?>/images/contact-image.jpg') no-repeat center center/cover;
      background-position: contain;
      z-index: 2; 
    }

</style>


<main class="page-contact">
    <section class="contact-section">
    <div class="background"></div>
  <div class="form-container">
    <h2>Déjanos tus comentarios</h2>
    <form action="#" method="POST">
    <div class="form-fields">
        <label>Nombres
      <input type="text" name="name" placeholder="Nombres" required></label>
      <label>Correo electronico 
      <input type="email" name="email" placeholder="Mail" required></label>
    <label>Teléfono
      <input type="tel" name="phone" placeholder="Teléfono (ej: +56 981575452)" required></label>
    <label>País
      <select name="subject" required>
        <option value="" disabled selected>País</option>
        <option value="option1">Lorem Ipsum 1</option>
        <option value="option2">Lorem Ipsum 2</option>
        <option value="option3">Lorem Ipsum 3</option>
      </select></label>
      </div>
      <label>Comentarios
      <textarea name="message" placeholder="Deja tu comentario aquí" rows="5" required></textarea></label>

      <button type="submit">Enviar</button>
    </form>
    <div class="social-icons">
        <p>Siguenos en Redes sociales:</p>

    <div class="iconos-rrss">
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/Facebook.svg" alt="" ></a>
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/Twitter.svg" alt="" ></a>
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/Instagram.svg" alt="" ></a>
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/Linkedin.svg" alt="" ></a>
      </div>

    </div>
   
  </div>
  
  <canvas class="waves"></canvas>

    </section>
</main>

<?php 

get_footer();

?>
