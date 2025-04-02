<?php
/**
 * Template Name: Contact
 *
 * @package chilecalifornia
 */

get_header();

?>

<style>
/* body {
  margin: 0;
  overflow: hidden;
}
.waves {
  display: block;
  margin: 0;
  width: 100vw;
  position: absolute;
  bottom: 0;
  left: 0;
  pointer-events: none; 
  z-index: 1; 
}

.page-contact {
        width: 100%;
        margin: 0;
        padding: 0;
    }

.page-contact canvas  {
  height: 30vh; 
}

.background {
      position: relative;
      height: 60vh;
      background: url('<?php echo get_template_directory_uri(); ?>/images/contact-image.jpg') no-repeat center center/cover;
      z-index: 2; 
    }

    .form-container {
        position: relative;
        top: 55%;
        left: 50%;
        transform: translate(-50%, -30%); 
        background: #ffffff;
        width: 80%;
        max-width: 943px; 
        max-height: auto;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        border-radius: 5px;
        
        z-index: 2;
        }

    .form-container form {
        display: flex;
        justify-content: center;
        flex-direction: column;
        max-width: 622px;
        max-height: auto;
        margin: 0 auto;
    }

    .form-container h2 {
      text-align: center;
      font-family: 'Roboto Condensed', sans-serif;
      text-align: center;
      font-size: 24px;
      font-weight: 700;
      margin-top: 0;
      margin-left: 0;
      margin-bottom: 40px;
      color: #333;
    }

    .form-fields {
      display: grid;
      grid-template-columns: 1fr;
      gap: 15px;
    }

    @media (min-width: 768px) {
        
      .form-fields {
        grid-template-columns: 1fr 1fr;
      }
      .form-container h2 {
      text-align: left;
      margin-bottom: 40px;
      font-size: 40px;
      font-weight: 700;
      margin-top: 20px;
      margin-left: 30px;
      margin-bottom: 60px;
    }

    .form-container form {
        max-width: 652px;
        max-height: 414px;
    }
    }

    .form-fields input,
    .form-fields select {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
    }

    .form-container textarea,
    .form-container button {
      width: 100%;
      margin-top: 15px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
    }
    .form-container button {
      width: 134px;
      padding: 10px;
      border: none;
      border-radius: 20px;
      background: linear-gradient(to bottom, #91C69B, #58B2C7);
      color: white;
      font-size: 16px;
      cursor: pointer;
      margin: 15px auto;
      display: block;
      text-align: center;
    }

    .form-container button:hover {
      background: linear-gradient(90deg, #58B2C7, #91C69B);
    }

    .social-icons {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      margin-top: 20px;
    }

    .social-icons .iconos-rrss {
        display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: row;
      padding-top: 20px;
      
    }

    .social-icons .iconos-rrss a {
      margin: 0 10px;
      text-decoration: none;
      font-size: 24px;
    }
   

    .form-fields label {
        display: flex;
        flex-direction: column;
        margin-bottom: 15px;
    }
   */

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
