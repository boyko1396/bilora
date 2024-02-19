<?php include 'block/head.php'; ?>

  <!-- site BEGIN -->
  <div id="site" class="site">
    <!-- header BEGIN -->
    <?php include 'block/header.php'; ?>
    <!-- header END -->
    <!-- bg-site-lines BEGIN -->
    <section class="bg-site-lines">
      <img src="images/bg-site-lines.svg" alt="">
    </section>
    <!-- bg-site-lines END -->
    <!-- main BEGIN -->
    <main class="main" role="main">
      <!-- pages-section BEGIN -->
      <section class="pages-section">
      <div class="container pages-section__container">
        
        <?php include 'block/breadcrumbs.php'; ?>

        <h1 class="pages-section__title">Контакты</h1>

        <!-- society BEGIN -->
        <div class="society society--info">
          <div class="row society__row">
            <div class="society__col row__col--7">
              <div class="society__info">
                <div class="info-content-list society__info-content-list">
                  <div class="info-content-list__item">
                    <h5 class="info-content-list__item-title">Адрес:</h5>
                    <p class="info-content-list__item-description">г.Минск, проспект газеты Звязда,<br> 16, корп. 1, пом.3, каб.5</p>
                  </div>
                  <div class="info-content-list__item">
                    <h5 class="title-size-5 info-content-list__item-title">Email:</h5>
                    <a href="mailto:info@factorleasing.by" class="info-content-list__item-email">info@factorleasing.by</a>
                  </div>
                  <div class="info-content-list__item">
                    <h5 class="info-content-list__item-title">Телефон:</h5>
                    <div class="contact info-content-list__contact">
                      <div class="contact__item">
                        <a href="tel:+375293382595" class="title-size-3 contact__tel">+ 375 29 3382595</a>
                        <img src="images/contact-a.png" alt="a" class="contact__icon">
                      </div>
                      <div class="contact__item">
                        <a href="tel:+375333982595" class="contact__tel">+ 375 33 3982595</a>
                        <img src="images/contact-mtc.png" alt="mtc" class="contact__icon">
                      </div>
                    </div>
                  </div>
                  <div class="info-content-list__item">
                    <h5 class="title-size-5 info-content-list__item-title">Время работы:</h5>
                    <p class="info-content-list__item-description">будние дни 9.00 – 18.00</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="society__col row__col--5">
              <div class="society__media society__media--second-picture">
                <picture class="society__media-picture">
                  <img src="images/society-img-2.svg" alt="Общество с ограниченной ответственностью «ФакторЛизинг»">
                </picture>
              </div>
            </div>
          </div>
        </div>
        <!-- society END -->
        <!-- feedback BEGIN -->
        <div class="feedback">
          <div class="feedback__wrap">
            <h3 class="feedback__title">Обратная связь</h3>
            <form action="#" class="form feedback__form">
              <div class="row form__row">
                <div class="form__col row__col--6">
                  <input type="text" name="name" class="u-input" placeholder="ФИО">
                </div>
                <div class="form__col row__col--6">
                  <input type="text" name="name_company" class="u-input" placeholder="Название компании">
                </div>
                <div class="form__col row__col--6">
                  <input type="tel" name="phone" class="u-input" required placeholder="Телефон">
                </div>
                <div class="form__col row__col--6">
                  <input type="emai" name="emai" class="u-input" placeholder="Email">
                </div>
                <div class="form__col row__col--12">
                  <textarea name="message" class="u-input u-input--textarea" placeholder="Комментарий"></textarea>
                </div>
              </div>
              <p class="form__description">Нажимая кнопку «Отправить», я принимаю условия пользовательского соглашения и даю согласие на обработку моих персональных данных на условиях и для целей, определенных в Согласии на обработку персональных данных. *</p>
              <button class="btn form__btn btn--size-md btn--theme-black-fill" type="submit">отправить</button>
            </form>
          </div>
        </div>
        <!-- feedback END -->
        </div>
      </section>
      <!-- pages-section END -->
    </main>
    <!-- main END -->
    <!-- footer BEGIN -->
    <?php include 'block/footer.php'; ?>
    <!-- footer END -->
  </div>
  <!-- site END -->

<?php include 'block/foot.php'; ?>