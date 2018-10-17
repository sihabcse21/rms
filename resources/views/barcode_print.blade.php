<style>
    @media print{
        .hidden{
            visibility: hidden;
        }
    }
</style>
<div class="row">
    <div class="col-lg-7" style="margin: 10px; float: left; padding: 5px">
        <div class="contact-box" style="text-align: center">
            <div style="margin-left: 5px">
                {!! DNS1D::getBarcodeHtml("RID1230001", "C128A", 1.5, 60, $color = 'black'); !!}
            </div>
            <div style="font-size: 14px;font-family: Courier">{{ "RID1230001" }}</div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-7" style="margin: 10px; float: left; padding: 5px">
        <div class="contact-box" style="text-align: center">
            <div style="margin-left: 5px">
                {!! DNS1D::getBarcodeHtml("RID1230002", "C128A", 1.5, 60, $color = 'black'); !!}
            </div>
            <div style="font-size: 14px;font-family: Courier">{{ "RID1230002" }}</div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-7" style="margin: 10px; float: left; padding: 5px">
        <div class="contact-box" style="text-align: center">
            <div style="margin-left: 5px">
                {!! DNS1D::getBarcodeHtml("RID1230003", "C128A", 1.5, 60, $color = 'black'); !!}
            </div>
            <div style="font-size: 14px;font-family: Courier">{{ "RID1230003" }}</div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-7" style="margin: 10px; float: left; padding: 5px">
        <div class="contact-box" style="text-align: center">
            <div style="margin-left: 5px">
                {!! DNS1D::getBarcodeHtml("RID1230004", "C128A", 1.5, 60, $color = 'black'); !!}
            </div>
            <div style="font-size: 14px;font-family: Courier">{{ "RID1230004" }}</div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<script type="text/javascript">
    window.print();
    setTimeout('window.close()', 100);
</script>