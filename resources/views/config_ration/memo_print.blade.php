<style>
    @media print{
        .hidden{
            visibility: hidden;
        }
    }
</style>

@foreach($data->ration_details as $key=>$item)
    <div class="row">
        <div class="col-lg-12" style="margin: 10px; float: left; padding: 5px; border-style: dashed;">
            <div class="contact-box" style="text-align: center;">
                <div style="font-size: 15px;font-weight: bold">Ration of {{ $data->users->name }}</div>
                <div style="margin-left: 5px">
                    {!! DNS1D::getBarcodeHtml($item->skus->id, 'C128A', 3.5, 80, $color = 'black')!!}
                </div>
                <div style="font-size: 14px;font-family: Courier">{{ $item->skus->name }} - {{ $item->skus->weight }}</div>
                <div style="font-size: 14px;font-family: Courier">{{ $data->ration_months->name }}</div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endforeach

<script type="text/javascript">
    window.print();
    setTimeout('window.close()', 100);
</script>
