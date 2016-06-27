<div class="hidden">

    <div id="callbackHead">
        <div class="popupCallback">
            <form id="navForm" class="form-horizontal">
                <fieldset>
                    <div class="form-group">
                        <label class="col-md-12 col-xs-12 control-label" for="textinput"></label><label class="col-md-6 col-xs-6 control-label" for="textinput"></label>

                        <div class="col-md-12 col-xs-12 mb-2">
                            <input id="textinput" name="name" type="text" placeholder="Ваше имя*" class="form-control input-md" required="">
                        </div>
                        <div class="col-md-12 col-xs-12">
                            <input name="email" type="text" placeholder="Ваш email*" class="form-control input-md" required="">
                        </div>
                    </div>

                    <div class="form-group"><label class="col-md-12 col-xs-12 control-label" for="textinput"></label>

                        <div class="col-md-12 col-xs-12 mt-24">
                            <textarea rows="5" type="border" class="form-control input-md" name="comments" placeholder="Сообщение*" required=""></textarea>
                        </div>
                    </div>
                    <input type="hidden" name="otkuda" value="записатся на примерку"><!-- Button -->
                    <div class="form-group">
                        <div class="col-md-12 col-xs-12">
                            <button name="submit" id="navForm11" class="btnMiera bntM center">Отправить</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

    <div id="callbackHead2">
        <div class="popupCallback">
            <form id="navForm2" class="form-horizontal">
                <fieldset><!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-6 col-xs-6 control-label mb-4" for="textinput"></label><label class="col-md-6 col-xs-6 control-label mb-4" for="textinput"></label>

                        <div class="col-md-6 col-xs-6 mb-4 correct3">
                            <input id="textinput" name="name" type="text" placeholder="Ваше имя*" class="form-control input-md" required="">
                        </div>
                        <div class="col-md-6 col-xs-6 mb-4 correct4">
                            <input name="email" type="text" placeholder="Ваш email" class="form-control input-md"></div>
                    </div><!-- Text input-->
                    <div class="form-group"><label class="col-md-12 col-xs-12 control-label mb-4" for="textinput"></label>

                        <div class="col-md-6 col-xs-6 mb-4" style="padding-right: 0">
                            <input id="phoneMask" type="tel" class="form-control input-md" name="phone" tabindex="1" required=""
                                   placeholder="Введите ваш телефон*"></div>
                        <div class="col-md-4 col-xs-4 correct1 mb-4" style="padding-left: 0;margin-left: -2px">
                            <input id="datepicker" placeholder="Выберите дату" name="data" class="form-control"
                                   type="text" style="border-right: 0 !important"></div>
                        <div class="col-md-2 col-xs-2 correct2 mb-4" style="padding-right: 13px">
                            <select name="selectbasic" class="form-control" >
                                <option value="Время не выбрано">—— ——</option>
                                <option value="12-13">12:00-13:00</option>
                                <option value="13-14">13:00-14:00</option>
                                <option value="14-15">14:00-15:00</option>
                                <option value="15-16">15:00-16:00</option>
                                <option value="16-17">16:00-17:00</option>
                                <option value="17-18">17:00-18:00</option>
                                <option value="18-19">18:00-19:00</option>
                                <option value="19-20">19:00-20:00</option>
                                <option value="20-21">20:00-21:00</option>
                                <option value="21-22">21:00-22:00</option>
                            </select></div>
                    </div><!-- Text input-->
                    <div class="form-group"><label class="col-md-12 col-xs-12 control-label mb-4" for="textinput"></label>

                        <div class="col-md-12 col-xs-12 mb-4">
                            <textarea type="border" class="form-control input-md" name="comments" placeholder="Сообщение"></textarea>
                        </div>
                    </div>
                    <input type="hidden" name="otkuda" value="записатся на примерку"><!-- Button -->
                    <div class="form-group">
                        <div class="col-md-12 col-xs-12">
                            <button name="submit" id="navForm22" class="btnMiera bntM center">Отправить</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    <div id="callbackHead3">
        <div id="callbackHead" style="display: block;">
            <div class="popupCallback">
                <form id="navForm3" class="form-horizontal">
                    <fieldset><!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-6 col-xs-6 control-label mb-4" for="textinput"></label><label class="col-md-6 col-xs-6 control-label mb-4" for="textinput"></label>
                            <div class="col-md-6 col-xs-6 mb-4 correct3">
                                <input id="textinput" name="name" type="text" placeholder="Ваше имя*" class="form-control input-md" required="">
                            </div>
                            <div class="col-md-6 col-xs-6 mb-4 correct4">
                                <input name="email" type="text" placeholder="Ваш email" class="form-control input-md">
                            </div>
                        </div><!-- Text input-->
                        <div class="form-group"><label class="col-md-12 col-xs-12 control-label mb-4" for="textinput"></label>
                            <div class="col-md-6 col-xs-6 mb-4" style="padding-right: 0">
                                <input id="phoneMask2" type="tel" class="form-control input-md" name="phone" tabindex="1" required="" placeholder="Введите ваш телефон*">
                            </div>
                            <div class="col-md-4 col-xs-4 correct1 mb-4" style="padding-left: 0;margin-left: -2px">
                                <select name="selecTime" class="form-control" style="border-right: 0 !important">
                                    <option value="Время не выбранно">Когда вам перезвонить?</option>
                                    <option value="сегодня">сегодня</option>
                                    <option value="завтра">завтра</option>
                                </select>
                                <!--<input id="datepicker" name="data" class="form-control" type="text" style="border-right: 0 !important" />-->
                            </div>
                            <div class="col-md-2 col-xs-2 correct2 mb-4" style="padding-right: 13px">
                                <select name="selectbasic" class="form-control" >
                                    <option value="Время не выбрано">—— ——</option>
                                    <option value="12-13">12:00-13:00</option>
                                    <option value="13-14">13:00-14:00</option>
                                    <option value="14-15">14:00-15:00</option>
                                    <option value="15-16">15:00-16:00</option>
                                    <option value="16-17">16:00-17:00</option>
                                    <option value="17-18">17:00-18:00</option>
                                    <option value="18-19">18:00-19:00</option>
                                    <option value="19-20">19:00-20:00</option>
                                    <option value="20-21">20:00-21:00</option>
                                    <option value="21-22">21:00-22:00</option>
                                </select></div>
                        </div><!-- Text input-->
                        <div class="form-group"><label class="col-md-12 col-xs-12 control-label mb-4" for="textinput"></label>
                            <div class="col-md-12 col-xs-12 mb-4">
                                <textarea type="border" class="form-control input-md" name="comments" placeholder="Сообщение"></textarea>
                            </div>
                        </div>
                        <input type="hidden" name="otkuda" value="Перезвонить"><!-- Button -->
                        <div class="form-group">
                            <div class="col-md-12 col-xs-12">
                                <button style="margin-top: 44px" name="submit" class="btnMiera bntM center">Отправить
                                </button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div><!--end hidden-->
