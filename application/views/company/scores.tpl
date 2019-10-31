{%extends file="company/template.tpl"%}
{%block name=js%}

{%/block%}

{%block name=content%}
    <<!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">Puanlar </h3>
                <span class="kt-subheader__separator kt-hidden"></span>
            </div>
        </div>
    </div>

    <!-- end:: Subheader -->

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-xl-12">
                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Serkan Erdinç Puan Listesi
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <a href="#" class="btn btn-success btn-sm  btn-bold">
                                Puan Ekle
                            </a>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <!--begin::Section-->
                        <div class="kt-section">
                            <div class="kt-section__content">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tarih</th>
                                            <th>İşlem Türü</th>
                                            <th>Açıklama</th>
                                            <th>Puan</th>
                                            <th>Yükleyen</th>
                                            <th>İşlemler</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>20.10.2019 15:00</td>
                                            <td>Alışveriş</td>
                                            <td>Alınan ürün adı</td>
                                            <td>2.00</td>
                                            <td>Personel Adı</td>
                                            <td>
                                                <a href="#" class="btn-label-brand btn btn-sm btn-bold">Düzenle</a>
                                                <a href="#" class="btn-label-danger btn btn-sm btn-bold">Sil</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>20.10.2019 15:00</td>
                                            <td>Alışveriş</td>
                                            <td>Alınan ürün adı</td>
                                            <td>2.00</td>
                                            <td>Personel Adı</td>
                                            <td>
                                                <a href="#" class="btn-label-brand btn btn-sm btn-bold">Düzenle</a>
                                                <a href="#" class="btn-label-danger btn btn-sm btn-bold">Sil</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>20.10.2019 15:00</td>
                                            <td>Alışveriş</td>
                                            <td>Alınan ürün adı</td>
                                            <td>2.00</td>
                                            <td>Personel Adı</td>
                                            <td>
                                                <a href="#" class="btn-label-brand btn btn-sm btn-bold">Düzenle</a>
                                                <a href="#" class="btn-label-danger btn btn-sm btn-bold">Sil</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>20.10.2019 15:00</td>
                                            <td>Alışveriş</td>
                                            <td>Alınan ürün adı</td>
                                            <td>2.00</td>
                                            <td>Personel Adı</td>
                                            <td>
                                                <a href="#" class="btn-label-brand btn btn-sm btn-bold">Düzenle</a>
                                                <a href="#" class="btn-label-danger btn btn-sm btn-bold">Sil</a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                                <!--begin: Pagination-->
                                <div class="kt-pagination  kt-pagination--brand">
                                    <ul class="kt-pagination__links">
                                        <li class="kt-pagination__link--first">
                                            <a href="#"><i class="fa fa-angle-double-left kt-font-brand"></i></a>
                                        </li>
                                        <li class="kt-pagination__link--next">
                                            <a href="#"><i class="fa fa-angle-left kt-font-brand"></i></a>
                                        </li>
                                        <li>
                                            <a href="#">...</a>
                                        </li>
                                        <li>
                                            <a href="#">29</a>
                                        </li>
                                        <li>
                                            <a href="#">30</a>
                                        </li>
                                        <li>
                                            <a href="#">31</a>
                                        </li>
                                        <li class="kt-pagination__link--active">
                                            <a href="#">32</a>
                                        </li>
                                        <li>
                                            <a href="#">33</a>
                                        </li>
                                        <li>
                                            <a href="#">34</a>
                                        </li>
                                        <li>
                                            <a href="#">...</a>
                                        </li>
                                        <li class="kt-pagination__link--prev">
                                            <a href="#"><i class="fa fa-angle-right kt-font-brand"></i></a>
                                        </li>
                                        <li class="kt-pagination__link--last">
                                            <a href="#"><i class="fa fa-angle-double-right kt-font-brand"></i></a>
                                        </li>
                                    </ul>
                                    <div class="kt-pagination__toolbar">
                                        <select class="form-control kt-font-brand" style="width: 60px;">
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                        <span class="pagination__desc">
															Displaying 10 of 230 records
														</span>
                                    </div>
                                </div>

                                <!--end: Pagination-->
                            </div>
                        </div>

                        <!--end::Section-->
                    </div>

                    <!--end::Form-->
                </div>

                <!--end::Portlet-->
            </div>
        </div>
    </div>
{%/block%}
