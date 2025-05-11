<?php
/**
 * Template name: Business Account
 */
$current = get_option( 'page_on_front' );
get_header();

// Default değerler (ACF alanları boşsa varsayılan değerler)
$business_title = get_field('business_title') ? get_field('business_title') : 'Open a Business Bank Account';
$business_subtitle = get_field('business_subtitle') ? get_field('business_subtitle') : 'Experience seamless banking solutions designed for your business needs';
$form_title = get_field('form_title') ? get_field('form_title') : 'Business Bank Account';
$form_description = get_field('form_description') ? get_field('form_description') : 'Complete the form below to start your business banking journey with us. Our dedicated team will guide you through the account opening process.';
?>

<main class="business-account-page">
      <section class="rdd">
         <div class="_conteiner">
            <div class="rdd__fon">
               <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/rdd/fon.svg" alt="">
            </div>
            <div class="_inner">
               <div class="rdd__info">
                  <div class="rdd__info-content">
                     <div class="rdd__info-title"><?php echo $business_title; ?></div>
                     <div class="rdd__info-text"><?php echo $business_subtitle; ?></div>
                  </div>
                  <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/rdd/business.png" alt="" class="rdd__info-img">
               </div>
               
               <div class="business-account-wrapper">
                  <div class="business-header">
                     <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/rdd/4122.png" alt="" class="business-icon">
                     <div class="business-header-content">
                        <div class="business-header-title"><?php echo $form_title; ?></div>
                        <div class="business-header-text"><?php echo $form_description; ?></div>
                     </div>
                  </div>
                  
                  <div class="rdd__form business-form">
                     <?php echo do_shortcode('[contact-form-7 id="7e4b0c8" title="business-form"]'); ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      
      <?php if (get_field('show_benefits_section')): ?>
      <section class="rdd__what-happens">
         <div class="_conteiner">
            <div class="_inner">
               <div class="rdd__what-happens--inner">
                  <div class="rdd__what-happens--header">
                     <div class="rdd__what-happens--info">
                        <div class="rdd__what-happens--title"><?php echo get_field('benefits_title') ? get_field('benefits_title') : 'Benefits of Our Business Banking'; ?></div>
                        <div class="rdd__what-happens--text"><?php echo get_field('benefits_subtitle') ? get_field('benefits_subtitle') : 'Our comprehensive business banking solutions offer numerous advantages to help your business grow and succeed:'; ?></div>
                     </div>
                     <ul class="rdd__what-happens--list">
                        <?php if(have_rows('benefits_items')): ?>
                           <?php while(have_rows('benefits_items')): the_row(); ?>
                              <li class="rdd__what-happens--item">
                                 <img src="<?php echo get_sub_field('icon'); ?>" alt="" class="rdd__what-happens--item---icon">
                                 <div class="rdd__what-happens--item---text"><?php echo get_sub_field('text'); ?></div>
                              </li>
                           <?php endwhile; ?>
                        <?php else: ?>
                           <!-- Varsayılan öğeler -->
                           <li class="rdd__what-happens--item">
                              <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/rdd/icon--1.png" alt="" class="rdd__what-happens--item---icon">
                              <div class="rdd__what-happens--item---text">Global Banking Solutions</div>
                           </li>
                           <li class="rdd__what-happens--item">
                              <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/rdd/icon--2.png" alt="" class="rdd__what-happens--item---icon">
                              <div class="rdd__what-happens--item---text">Enhanced Security</div>
                           </li>
                           <li class="rdd__what-happens--item">
                              <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/rdd/icon--3.png" alt="" class="rdd__what-happens--item---icon">
                              <div class="rdd__what-happens--item---text">24/7 Account Management</div>
                           </li>
                        <?php endif; ?>
                     </ul>
                  </div>
                  <div class="rdd__what-happens--fotter">
                     <?php echo get_field('benefits_footer') ? get_field('benefits_footer') : 'After submitting the form, our dedicated business team will contact you within 2 business days to discuss your specific requirements and guide you through the account opening process. We look forward to partnering with you.'; ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php endif; ?>
   </main>

<!-- CSS Styles for Business Account Form -->
<style>
/* Ana form konteyner stili */
.business-account-wrapper {
    display: flex;
    flex-direction: column;
    background-color: #f5f5f1;
    border-radius: 20px;
    padding: 30px;
    margin-bottom: 40px;
}

/* Form başlık bölümü stili */
.business-header {
    display: flex;
    align-items: flex-start;
    margin-bottom: 30px;
}

.business-icon {
    width: 80px;
    height: 80px;
    margin-right: 20px;
    object-fit: contain;
}

.business-header-content {
    flex: 1;
}

.business-header-title {
    font-family: 'TT Commons Pro';
    font-style: normal;
    font-weight: 600;
    font-size: 24px;
    line-height: 1.2;
    color: #091D26;
    margin-bottom: 10px;
}

.business-header-text {
    font-family: 'TT Commons Pro';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 1.5;
    color: #091D26;
}

/* Form alanları stilleri */
.rdd__form.business-form {
    width: 100%;
}

/* CF7 form wrapper */
.rdd__form.business-form .wpcf7 {
    width: 100%;
}

/* Form eleman düzeni */
.rdd__form.business-form .wpcf7-form p {
    margin: 0 0 20px 0;
    padding: 0;
    width: 100%;
    box-sizing: border-box;
}

/* İki sütunlu düzen */
.business-form-row {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 10px;
    width: 100%;
}

.business-form-column {
    flex: 1;
    min-width: 200px;
}

/* Input alanları stilleri */
.rdd__form.business-form input[type="text"],
.rdd__form.business-form input[type="email"],
.rdd__form.business-form input[type="tel"],
.rdd__form.business-form input[type="url"],
.rdd__form.business-form select,
.rdd__form.business-form textarea {
    width: 100%;
    padding: 16px 20px;
    background: #FFFFFF;
    border: 1px solid #EAEAEA;
    border-radius: 12px;
    font-family: 'TT Commons Pro';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 1.2;
    color: #091D26;
    height: 56px;
    box-sizing: border-box;
    box-shadow: none;
    outline: none;
}

/* Placeholder stili */
.rdd__form.business-form input::placeholder,
.rdd__form.business-form textarea::placeholder {
    color: #9A9A9A;
    opacity: 1;
}

.rdd__form.business-form select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-image: url('data:image/svg+xml;utf8,<svg fill="%23666" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>');
    background-position: right 15px center;
    background-repeat: no-repeat;
    padding-right: 40px;
}

.rdd__form.business-form textarea {
    height: 120px;
    resize: vertical;
}

/* Telefon alanı için temel tablo yapısı */
.phone-field-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 10px;
}

/* Tablo hücreleri */
.phone-field-table td {
    padding: 0;
    vertical-align: top;
}

/* Ülke kodu sütunu */
.phone-field-table td:first-child {
    width: 120px;
}

/* Ülke kodu select */
.phone-field-table select.country-code-select {
    width: 100%;
    border-radius: 12px 0 0 12px !important;
    border-right: none !important;
}

/* Telefon numara giriş alanı */
.phone-field-table input.phone-number {
    width: 100%;
    border-radius: 0 12px 12px 0 !important;
    border-left: 1px solid rgba(0,0,0,0.1) !important;
}

/* Gönder butonu */
.business-submit-btn {
    display: inline-block;
    background-color: #091D26;
    color: #FFFFFF;
    border: none;
    border-radius: 50px;
    padding: 16px 40px;
    font-family: 'TT Commons Pro';
    font-weight: 600;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
    text-align: center;
    width: auto;
}

.business-submit-btn:hover {
    background-color: #152831;
}

/* Form iletileri (başarı, hata, vb.) */
.rdd__form.business-form .wpcf7-response-output {
    width: 100%;
    margin: 20px 0 0 0;
    padding: 15px;
    border-radius: 12px;
    font-family: 'TT Commons Pro';
}

/* Form hata mesajları */
.rdd__form.business-form .wpcf7-not-valid-tip {
    font-family: 'TT Commons Pro';
    font-size: 14px;
    color: #dc3232;
    margin-top: 5px;
}

@media (max-width: 767px) {
    .business-form-row {
        flex-direction: column;
        gap: 15px;
    }
    
    .business-form-column {
        width: 100%;
    }
    
    .business-header {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    
    .business-icon {
        margin-right: 0;
        margin-bottom: 20px;
    }
    
    .business-submit-btn {
        width: 100%;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Boş paragraf etiketlerini temizle (CF7'nin otomatik olarak oluşturduğu)
    var form = document.querySelector('.wpcf7-form');
    if (form) {
        var paragraphs = form.querySelectorAll('p');
        paragraphs.forEach(function(p) {
            if (p.innerHTML.trim() === '' || p.childElementCount === 0) {
                p.parentNode.removeChild(p);
            }
        });
    }
    
    // Form gönderildiğinde veya hata verdiğinde loglar
    document.addEventListener('wpcf7mailsent', function(event) {
        if (event.detail.contactFormId === '7e4b0c8') {
            console.log('Business form başarıyla gönderildi');
        }
    });
    
    document.addEventListener('wpcf7invalid', function(event) {
        if (event.detail.contactFormId === '7e4b0c8') {
            console.log('Business form hataları:', event.detail.apiResponse.invalid_fields);
        }
    });
});
</script>

<?php get_footer(); ?>
