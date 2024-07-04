@props(['data'])
<div>

    <tr class="top">
        <td colspan="6" style="padding: 5px;vertical-align: top;">
            <table style="width: 100%;line-height: inherit;text-align: left;">
                <tbody>
                <tr>
                    <td
                        style="padding:5px;vertical-align:top;text-align:left;padding-bottom:20px">
                        <font style="vertical-align: inherit;margin-bottom:25px;">
                            <font
                                style="vertical-align: inherit;font-size:14px;color:#7367F0;font-weight:600;line-height: 35px; ">
                                Center Info</font>
                        </font><br>
                        <font style="vertical-align: inherit;">
                            <font
                                style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;">
                                {{$data['Nome']}}</font>
                        </font><br>
                        <font style="vertical-align: inherit;">
                            <font
                                style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;">
                                <a href="/cdn-cgi/l/email-protection"
                                   class="__cf_email__"
                                   data-cfemail="3a4d5b565117535417594f494e55575f487a5f425b574a565f14595557">
                                    {{$data['mail']}}</a>
                            </font>
                        </font><br>
                        <font style="vertical-align: inherit;">
                            <font
                                style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;">
                                {{$data['Phone']}}</font>
                        </font><br>
                        <font style="vertical-align: inherit;">
                            <font
                                style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;">
                                {{$data['ville']}}</font>
                        </font><br>
                    </td>
                    <td
                        style="padding:5px;vertical-align:top;text-align:left;padding-bottom:20px">
                        <font style="vertical-align: inherit;margin-bottom:25px;">
                            <font
                                style="vertical-align: inherit;font-size:14px;color:#7367F0;font-weight:600;line-height: 35px; ">
                                Operating Hours</font>
                        </font><br>
                        <font style="vertical-align: inherit;">
                            <font
                                style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;">
                                Monday-Friday: 9:00 AM - 5:00 PM </font>
                        </font><br>
                        <font style="vertical-align: inherit;">
                            <font
                                style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;">
                                Saturday: 10:00 AM - 3:00 PM</font>
                        </font><br>
                        <font style="vertical-align: inherit;">
                            <font
                                style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;">
                                Sunday: Closed</font>
                        </font><br>
                    </td>
                    <td
                        style="padding:5px;vertical-align:top;text-align:right;padding-bottom:20px">
                        <font style="vertical-align: inherit;margin-bottom:25px;">
                            <font
                                style="vertical-align: inherit;font-size:14px;color:#7367F0;font-weight:600;line-height: 35px; ">
                                &nbsp;</font>
                        </font><br>
                        <font style="vertical-align: inherit;">
                            <font
                                style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;">
                                ID :{{$data["id"]}}</font>
                        </font><br>
                        <font style="vertical-align: inherit;">
                            @if($data['Status']=='Active')
                                <font
                                    style="vertical-align: inherit;font-size: 14px;color:#2E7D32;font-weight: 400;">
                                    {{$data['Status']}}</font>
                            @else
                                <font
                                    style="vertical-align: inherit;font-size: 14px;color:#e00c0c;font-weight: 400;">
                                    {{$data['Status']}}</font>
                            @endif

                        </font><br>

                        @if($data["Stock"] == 0)
                            <span class="badges bg-lightred">Out of Stock</span>
                        @elseif($data["Stock"] <= 25)
                            <span class="badges bg-lightyellow">Critical Low Stock</span>
                        @elseif($data["Stock"] <= 50)
                            <span class="badges bg-yellow">Low Stock</span>
                        @elseif($data["Stock"] <= 100)
                            <span class="badges bg-lightgreen">In Stock</span>
                        @else
                            <span class="badges bg-green">Overstock</span>
                        @endif
                        <!--Color bg bg-light...-->

                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>

</div>
