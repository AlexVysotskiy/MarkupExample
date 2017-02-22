</div><!-- .main-content -->
</div><!-- .wrapper -->

<div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <a class="navbar-brand" href="<?php echo $baseLink; ?>/">
                        <img alt="Brand" src="img/logo.png">
                    </a>
                </div>
                <div class="shadow">
                    © 2016 - <?php echo date('Y'); ?> The QA. Все права защищены.
                </div>
            </div>
            <?php /* <div class="col-md-4 text-center social-icons">
              <a href="#">
              <img src="img/icon-vk.png" />
              </a>
              <a href="#">
              <img src="img/icon-fb.png" />
              </a>
              <a href="#">
              <img src="img/icon-tw.png" />
              </a>
              </div>
             * */
            ?>

            <div class="col-md-3 contact-info col-md-offset-5 text-right">
                <div>
                    <img src="img/icon-phone-sm.png" /> 
                    <a href="tel:+74951234567">
                        <img src="img/phone.png" />
                    </a>
                    <!--<a href="tel:+74951234567">+7 (495) 123-45-67</a>-->
                </div>
                <div>
                    <img src="img/icon-mail.png" />  <a href="mailto:request@theQA.ru">
                        <img src="img/email.png" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</div><!-- .footer -->

<div id="send-request-modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title">Оставить заявку</h2>
            </div>
            <div class="modal-body font-regular first">
                <div>
                    Пожалуйста, заполните форму ниже.<br/>
                    Ваш запрос будет обработан в ближайшие сроки.
                </div>
                <br/>
                <br/>
                <div class="row">
                    <div id="request-form" class="col-md-8">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Ваше имя">
                        </div>
                        <div class="form-group">
                            <input type="" class="form-control" id="phone" name="phone" placeholder="Ваш телефон">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" maxlength="300" name="desc" placeholder="Опишите проект для тестирования" style="resize: none;"></textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-success styled send-request" style="padding: 15px 30px;"><img src="img/icon-success.png" style="margin-right: 10px;"/> Отправить</a>
                    </div>
                </div>

            </div>
            <div class="modal-body font-regular second" style="display: none;">
                <div id="success-message" class="alert alert-success" role="alert" >
                    <strong>Ваше сообщение отправлено!</strong> Мы свяжемся с Вами в ближайшее время!
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/swiper.min.js"></script>
<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="js/scripts.js?v=17.4"></script>
</body>
</html>