<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper  pt-3" style="min-height: 567.854px;">

    <!-- Main content -->
    <section class="content  text-dark">
        <div class="container-fluid">
            <style>
                table td,
                table th {
                    padding: 3px !important;
                }
            </style>
            <?php
            $date_start = isset($_GET['date_start']) ? $_GET['date_start'] : date("Y-m-d", strtotime(date("Y-m-d") . " -7 days"));
            $date_end = isset($_GET['date_end']) ? $_GET['date_end'] : date("Y-m-d");
            ?>
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="card-title">Sales Report</h5>
                </div>
                <div class="card-body">
                    <form id="filter-form">
                        <div class="row align-items-end">
                            <div class="form-group col-md-3">
                                <label for="date_start">Date Start</label>
                                <input type="date" class="form-control form-control-sm" name="date_start"
                                    value="<?php echo date("Y-m-d", strtotime($date_start)) ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="date_start">Date End</label>
                                <input type="date" class="form-control form-control-sm" name="date_end"
                                    value="<?php echo date("Y-m-d", strtotime($date_end)) ?>">
                            </div>
                            <div class="form-group col-md-1">
                                <button class="btn btn-flat btn-block btn-primary btn-sm" style="width:70px"><i
                                        class="fa fa-filter"></i>
                                    Filter</button>
                            </div>
                            <div class="form-group col-md-1">
                                <button class="btn btn-flat btn-block btn-success btn-sm" type="button" id="printBTN"><i
                                        class="fa fa-print"></i> Print</button>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <div id="printable">
                        <div class="row row-cols-2 justify-content-center align-items-center" id="print_header"
                            style="display:none">
                            <div class="col-1">
                                <img src="<?php echo $this->base_url; ?>assets/images/logos/favicon.png"
                                    alt="Beauty Shop" width="100px">
                            </div>
                            <div class="col-7">
                                <h4 class="text-center m-0">Online Beauty Products Shop</h4>
                                <h3 class="text-center m-0"><b>Sales Report</b></h3>
                                <?php if ($date_start != $date_end): ?>
                                    <p class="text-center m-0">Date Between
                                        <?php echo date("M d,Y", strtotime($date_start)) ?> and
                                        <?php echo date("M d,Y", strtotime($date_end)) ?>
                                    </p>
                                <?php else: ?>
                                    <p class="text-center m-0">As of
                                        <?php echo date("M d,Y", strtotime($date_start)) ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <hr>

                        <table class="table text-center table-bordered" style="border: solid 1px;">
                            <colgroup>
                                <col width="5%">
                                <col width="18%">
                                <col width="30%">
                                <col width="25%">
                                <col width="10%">
                                <col width="12%">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date Time</th>
                                    <th>Product</th>
                                    <th>Client</th>
                                    <th>Payment Method</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $gtotal = 0;
                                $connection = new mysqli("localhost", "root", "", "masterdatabase");
                                $sql = "SELECT * FROM invoice LEFT JOIN users on invoice.c_id = users.c_id WHERE invoice.o_date between '{$date_start}' and '{$date_end}'";
                                $res = $connection->query($sql);
                                if ($res->num_rows > 0) {
                                    while ($row = $res->fetch_object()) {
                                        $Data[] = $row;
                                    }
                                    // print_r($Data);
                                    $allgeneratereport['Code'] = 1;
                                    $allgeneratereport['Data'] = $Data;
                                } else {
                                    $allgeneratereport['Code'] = 0;
                                    $allgeneratereport['Data'] = 0;
                                }

                                if ($allgeneratereport['Code'] == 1) {

                                    foreach ($allgeneratereport['Data'] as $key => $value) {
                                        $gtotal += $value->Amount;
                                        ?>
                                        <tr>
                                            <td class="text-center">
                                                <?php echo $i++ ?>
                                            </td>
                                            <td>
                                                <?php echo $value->o_date ?>
                                            </td>
                                            <td>
                                                <p class="m-0">
                                                    <?php echo $value->p_name ?>
                                                </p>
                                            </td>
                                            <td>
                                                <p class="m-0">
                                                    <?php echo $value->username ?>
                                                </p>
                                                <p class="m-0">
                                                    <?php echo $value->email ?>
                                                </p>
                                            </td>
                                            <td class="">
                                                <?php echo strtoupper($value->p_method) ?>
                                            </td>
                                            <td class="text-center">
                                                <?php echo ($value->Amount) ?>
                                            </td>
                                        </tr>
                                    <?php }
                                } else { ?>
                                    <tr>
                                        <td class="text-center" colspan="6">No Data...</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="5" class="font-weight-bold text-center">TOTAL SALES</th>
                                    <th class="text-right font-weight-bold">
                                        <?= $gtotal ?>
                                    </th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <noscript>
                <style>
                    .m-0 {
                        margin: 0;
                    }

                    .text-center {
                        text-align: center;
                    }

                    .text-right {
                        text-align: right;
                    }

                    .table {
                        border-collapse: collapse;
                        width: 100%
                    }

                    .table tr,
                    .table td,
                    .table th {
                        border: 1px solid gray;
                    }
                </style>
            </noscript>
            <script>
                $(function () {
                    $('table th, table td').addClass("px-1 py-2 align-middle")
                    $('#filter-form').submit(function (e) {
                        e.preventDefault()
                        location.href = "generatereport?page=sales&date_start=" + $('[name="date_start"]').val() + "&date_end=" + $('[name="date_end"]').val()
                    })

                    $('#printBTN').click(function () {
                        var head = $('head').clone();
                        var rep = $('#printable').clone();
                        var ns = $('noscript').clone().html();
                        start_loader()
                        rep.prepend(ns)
                        rep.prepend(head)
                        rep.find('#print_header').show()
                        var nw = window.document.open('', '_blank', 'width=900,height=600')
                        nw.document.write(rep.html())
                        nw.document.close()
                        setTimeout(function () {
                            nw.print()
                            setTimeout(function () {
                                nw.close()
                                end_loader()
                            }, 200)
                        }, 300)
                    })
                })
            </script>
        </div>
    </section>
    <!-- /.content -->
    <div class="modal fade" id="confirm_modal" role='dialog'>
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmation</h5>
                </div>
                <div class="modal-body">
                    <div id="delete_content"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="uni_modal" role='dialog'>
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id='submit'
                        onclick="$('#uni_modal form').submit()">Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="uni_modal_right" role='dialog'>
        <div class="modal-dialog modal-full-height  modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="fa fa-arrow-right"></span>
                    </button>
                </div>
                <div class="modal-body">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="viewer_modal" role='dialog'>
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close" data-dismiss="modal"><span class="fa fa-times"></span></button>
                <img src="" alt="">
            </div>
        </div>
    </div>
</div>
<!-- /.content-wrapper -->
<script>
    $(document).ready(function () {
        window.viewer_modal = function ($src = '') {
            start_loader()
            var t = $src.split('.')
            t = t[1]
            if (t == 'mp4') {
                var view = $("<video src='" + $src + "' controls autoplay></video>")
            } else {
                var view = $("<img src='" + $src + "' />")
            }
            $('#viewer_modal .modal-content video,#viewer_modal .modal-content img').remove()
            $('#viewer_modal .modal-content').append(view)
            $('#viewer_modal').modal({
                show: true,
                backdrop: 'static',
                keyboard: false,
                focus: true
            })
            end_loader()

        }
        window.uni_modal = function ($title = '', $url = '', $size = "") {
            start_loader()
            $.ajax({
                url: $url,
                error: err => {
                    console.log()
                    alert("An error occured")
                },
                success: function (resp) {
                    if (resp) {
                        $('#uni_modal .modal-title').html($title)
                        $('#uni_modal .modal-body').html(resp)
                        if ($size != '') {
                            $('#uni_modal .modal-dialog').addClass($size + '  modal-dialog-centered')
                        } else {
                            $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md modal-dialog-centered")
                        }
                        $('#uni_modal').modal({
                            show: true,
                            backdrop: 'static',
                            keyboard: false,
                            focus: true
                        })
                        end_loader()
                    }
                }
            })
        }
        window._conf = function ($msg = '', $func = '', $params = []) {
            $('#confirm_modal #confirm').attr('onclick', $func + "(" + $params.join(',') + ")")
            $('#confirm_modal .modal-body').html($msg)
            $('#confirm_modal').modal('show')
        }
    })
</script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<div class="jqvmap-label" style="display: none; left: 1093.83px; top: 394.361px;">Idaho</div>
</body>

</html>