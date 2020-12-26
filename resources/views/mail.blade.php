<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="3">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="public/upload/img/logocuahang.png" style="width:100%; max-width:300px;">
                            </td>
                            
                            <td>
                                Mã hóa đơn: @if(isset($mahoadon)) {{ $mahoadon }} @endif<br>
                                Ngày lập hóa đơn: @if(isset($ngaylap)) {{ $ngaylap }} @endif<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="3">
                    <table>
                        <tr>
                            <td>
                                DienThoaiTrungTin, Inc.<br>
                                180 Cao lỗ, phường 4<br>
                                Quận 8, Tp.HCM
                            </td>
                            
                            <td>
                                Contact us : Hoàng Lộc<br>
                                Number phone: 0329111928<br>
                                Email: dienthoaitrungtin@gmail.com
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="heading">
                <td>
                    Sản phẩm
                </td>
                <td>
                    Số lượng
                </td>
                <td>
                    Thành tiền
                </td>
            </tr>
            @if(isset($sanpham))
                @foreach($sanpham as $item)
                <tr class="item">
                    <td>
                        {{ $item['name']}}
                    </td>
                    <td>
                        {{ $item['soluong']}}
                    </td>
                    <td>
                        {{ number_format($item['thanhtien'] , 0 , "" ,".")." VND" }}
                    </td>
                </tr>
                @endforeach
            @endif
            <tr class="item">
                    <td>
                        Phương thức giao hàng 
                    </td>
                    <td>
                        @if(isset($ptgh))
                            @if($ptgh == 1)
                                {{"Giao hàng nhanh"}}
                            @else
                                {{"Giao hàng bình thường"}}
                            @endif
                        @endif
                    </td>
                    <td>
                        @if(isset($ptgh))
                            @if($ptgh == 1)
                                {{"+ 30.000 VNĐ"}}
                            @else
                                {{"Free"}}
                            @endif
                        @endif
                    </td>
            </tr>
            <tr class="total">
                <td></td>
                <td></td>
                <td>
                   Total: @if(isset($total)) {{ number_format( $total , 0 , "" , '.' )." VND" }} @endif
                </td>
            </tr>
        </table>
    </div>
</body>
</html>