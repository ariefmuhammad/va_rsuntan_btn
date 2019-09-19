<div class="app-main">
    @include('crystalline.sidebar')
    <div class="app-main__outer">
        @include('crystalline.content-infovarsuntan')
        @include('crystalline.footer')
    </div>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
</div>


<!-- Modal Detail -->
<div class="modal fade" id="exampleModalLongDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Detail Virtual Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Virtual Account :</label>
                    <div class="col-sm-8 col-form-label col-form-text"><h5>3101010000042</h5></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Nama :</label>
                    <div class="col-sm-8 col-form-label col-form-text"><h5>Maulana</h5></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Layanan :</label>
                    <div class="col-sm-8 col-form-label col-form-text"><h5>Berobat</h5></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Kode Layanan :</label>
                    <div class="col-sm-8 col-form-label col-form-text"><h5>D114124</h5></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Jenis Bayar :</label>
                    <div class="col-sm-8 col-form-label col-form-text"><h5>Lunas</h5></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Kode Jenis Bayar :</label>
                    <div class="col-sm-8 col-form-label col-form-text"><h5>F12</h5></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">No ID Pemesanan :</label>
                    <div class="col-sm-8 col-form-label col-form-text"><h5>231</h5></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Tagihan :</label>
                    <div class="col-sm-8 col-form-label col-form-text"><h5>300000</h5></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Flag Full / Partial :</label>
                    <div class="col-sm-8 col-form-label col-form-text"><h5>EF</h5></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Expired Date :</label>
                    <div class="col-sm-8 col-form-label col-form-text"><h5>2019/10/11</h5></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Reserve Field :</label>
                    <div class="col-sm-8 col-form-label col-form-text"><h5>23</h5></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Description :</label>
                    <div class="col-sm-8 col-form-label col-form-text"><h5>Sudah terkirim dengan lancar</h5></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use times"></i> Cancel</button>
                <button type="button" class="btn btn-info"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use check"></i> Done</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Detail -->





<!-- Modal Edit -->
<div class="modal fade" id="exampleModalLongEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Virtual Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Virtual Account :</label>
                    <div class="col-sm-8"><input name="va" id="exampleText" placeholder="Virtual Account" type="text" class="form-control"></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Nama :</label>
                    <div class="col-sm-8"><input name="nama" id="exampleText" placeholder="Nama" type="text" class="form-control"></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Layanan :</label>
                    <div class="col-sm-8"><input name="layanan" id="exampleText" placeholder="Layanan" type="text" class="form-control"></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Kode Layanan :</label>
                    <div class="col-sm-8"><input name="kode_layanan" id="exampleText" placeholder="Kode Layanan" type="text" class="form-control"></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Jenis Bayar :</label>
                    <div class="col-sm-8"><input name="layanan" id="exampleText" placeholder="Jenis Bayar" type="text" class="form-control"></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Kode Jenis Bayar :</label>
                    <div class="col-sm-8"><input name="kodejenisbayar" id="exampleText" placeholder="Kode Jenis Bayar" type="text" class="form-control"></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Nomor ID Pemesanan :</label>
                    <div class="col-sm-8"><input name="noid" id="exampleText" placeholder="Nomor ID Pemesanan" type="text" class="form-control"></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Tagihan :</label>
                    <div class="col-sm-8"><input name="tagihan" id="exampleText" placeholder="Tagihan" type="number" class="form-control"></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Flag Full / Partial :</label>
                    <div class="col-sm-8"><input name="flag" id="exampleText" placeholder="Flag Full / Partial" type="text" class="form-control"></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Expired Date :</label>
                    <div class="col-sm-8"><input name="expired" id="datepicker" placeholder="Expired Date (yymmddHHMM)" type="text" class="form-control"></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Reserve Field :</label>
                    <div class="col-sm-8"><input name="reserve" id="exampleText" placeholder="Reserve Field" type="number" class="form-control"></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Description :</label>
                    <div class="col-sm-8"><textarea name="description" id="exampleText" placeholder="Description"  class="form-control"></textarea></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use times"></i> Cancel</button>
                <button type="button" class="btn btn-alternate"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use edit"></i> Edit</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Edit -->



<!-- Small modal Iquiry -->
<div class="modal fade bd-example-modal-sm-iquiry" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Iquiry Virtual Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><center>Apakah anda yakin <p>"Iquiry Virtual Account" ini?</p></center></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use times"></i> Cancel</button>
                <button type="button" class="btn btn-success"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Iquiry</button>
            </div>
        </div>
    </div>
</div>
<!-- Small modal Iquiry -->

<!-- Small modal Delete -->
<div class="modal fade bd-example-modal-sm-delete" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Delete Virtual Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><center>Apakah anda yakin <p>"Delete Virtual Account" ini?</p></center></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use times"></i> Cancel</button>
                <button type="button" class="btn btn-danger"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use trash"></i> Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- Small modal Delete -->



<!-- Modal History -->
<div class="modal fade" id="exampleModalLongHistory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">History Virtual Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Virtual Account :</label>
                    <div class="col-sm-8 col-form-label col-form-text"><h5>3101010000042</h5></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Nama :</label>
                    <div class="col-sm-8 col-form-label col-form-text"><h5>Maulana</h5></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Layanan :</label>
                    <div class="col-sm-8 col-form-label col-form-text"><h5>Berobat</h5></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Kode Layanan :</label>
                    <div class="col-sm-8 col-form-label col-form-text"><h5>D114124</h5></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Jenis Bayar :</label>
                    <div class="col-sm-8 col-form-label col-form-text"><h5>Lunas</h5></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Kode Jenis Bayar :</label>
                    <div class="col-sm-8 col-form-label col-form-text"><h5>F12</h5></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">No ID Pemesanan :</label>
                    <div class="col-sm-8 col-form-label col-form-text"><h5>231</h5></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Tagihan :</label>
                    <div class="col-sm-8 col-form-label col-form-text"><h5>300000</h5></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Flag Full / Partial :</label>
                    <div class="col-sm-8 col-form-label col-form-text"><h5>EF</h5></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Expired Date :</label>
                    <div class="col-sm-8 col-form-label col-form-text"><h5>2019/10/11</h5></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Reserve Field :</label>
                    <div class="col-sm-8 col-form-label col-form-text"><h5>23</h5></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label">Description :</label>
                    <div class="col-sm-8 col-form-label col-form-text"><h5>Sudah terkirim dengan lancar</h5></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use times"></i> Cancel</button>
                <button type="button" class="btn btn-info"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use check"></i> Done</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal History -->