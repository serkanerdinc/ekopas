{%extends file="company/template.tpl"%}
{%block name=js%}
    <script src="assets/js/pages/custom/user/profile.js" type="text/javascript"></script>
{%/block%}

{%block name=content%}
    <<!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">Puan Detayı </h3>
                <span class="kt-subheader__separator kt-hidden"></span>
            </div>
        </div>
    </div>

    <!-- end:: Subheader -->


    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <!--Begin::App-->
        <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">

            <!--Begin:: App Aside Mobile Toggle-->
            <button class="kt-app__aside-close" id="kt_user_profile_aside_close">
                <i class="la la-close"></i>
            </button>

            <!--End:: App Aside Mobile Toggle-->

            <!--Begin:: App Aside-->
            <div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside">

                <!--begin:: Widgets/Applications/User/Profile1-->
                <div class="kt-portlet ">
                    <div class="kt-portlet__head  kt-portlet__head--noborder">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body kt-portlet__body--fit-y">

                        <!--begin::Widget -->
                        <div class="kt-widget kt-widget--user-profile-1">
                            <div class="kt-widget__head">
                                <div class="kt-widget__media">
                                    <img src="assets/media/users/100_13.jpg" alt="image">
                                </div>
                                <div class="kt-widget__content">
                                    <div class="kt-widget__section">
                                        <a href="#" class="kt-widget__username">
                                            Serkan Erdinç
                                            <i class="flaticon2-correct kt-font-success"></i>
                                        </a>
                                        <span class="kt-widget__subtitle">
                                       Müşteri
                                    </span>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-widget__body">
                                <div class="kt-widget__content">
                                    <div class="kt-widget__info">
                                        <span class="kt-widget__label">Email:</span>
                                        <a href="#" class="kt-widget__data">serkanerdinc@windowslive.com</a>
                                    </div>
                                    <div class="kt-widget__info">
                                        <span class="kt-widget__label">Puan:</span>
                                        <a href="#" class="kt-widget__data">25.00</a>
                                    </div>
                                    <div class="kt-widget__info">
                                        <span class="kt-widget__label">İşlem Sayısı:</span>
                                        <a href="#" class="kt-widget__data">10</a>
                                    </div>
                                    <div class="kt-widget__info">
                                        <span class="kt-widget__label">Üyelik Tarihi:</span>
                                        <a href="#" class="kt-widget__data">20.10.2019</a>
                                    </div>
                                    <div class="kt-widget__info">
                                        <span class="kt-widget__label">Son İşlem/Geçen Gün Sayısı:</span>
                                        <a href="#" class="kt-widget__data">3 / 20</a>
                                    </div>
                                    <div class="kt-widget__info">
                                        <span class="kt-widget__label">Son Hediye/Geçen gün sayısı:</span>
                                        <a href="#" class="kt-widget__data">20 / 2</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--end::Widget -->
                    </div>
                </div>

                <!--end:: Widgets/Applications/User/Profile1-->
            </div>

            <!--End:: App Aside-->

            <!--Begin:: App Content-->
            <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="kt-portlet">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">Puan Detayı</h3>
                                </div>
                            </div>
                            <form class="kt-form kt-form--label-right">
                                <div class="kt-portlet__body">
                                    <div class="kt-section kt-section--first">
                                        <div class="kt-section__body">
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Puan Türü</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <select class="form-control">
                                                        <option>Puan Türü Seçiniz</option>
                                                        <option value="id">Alışveriş</option>
                                                        <option value="msa">Hediye</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Puan</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <input class="form-control" type="text" value="2.00">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Açıklama</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <input class="form-control" type="text" value="Alınan ürün yada puan">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Yükleyen</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <select class="form-control">
                                                        <option>Kullanıcı Seçiniz</option>
                                                        <option value="id">Personel1</option>
                                                        <option value="id">Personel2</option>
                                                        <option value="id">Personel3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-portlet__foot">
                                    <div class="kt-form__actions">
                                        <div class="row">
                                            <div class="col-lg-3 col-xl-3">
                                            </div>
                                            <div class="col-lg-9 col-xl-9">
                                                <button type="reset" class="btn btn-success">Kaydet</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!--End:: App Content-->
        </div>

        <!--End::App-->
    </div>

    <!-- end:: Content -->
{%/block%}
