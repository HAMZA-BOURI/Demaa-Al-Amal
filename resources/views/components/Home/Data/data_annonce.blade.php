@props(['Annonces'])
<div>

    <div class="carousel-inner">
        <?php
        $i=0;
        ?>
        @foreach($Annonces as $data)

            @if($data['Date_Start']==date('Y-m-d')||$data['Date_Stop']>date('Y-m-d'))
                    <?php
                    $i++;
                    ?>
                @if ($i==1)
                    <div class='carousel-item active'>
                        <img class='d-block w-100' src='assets/image/{{$data['image']}}' alt='First slide'>
                        <div class='carousel-caption d-none d-md-block' style='padding-bottom: 150px;'>
                            <h5 class=' bounceInDown'>{{$data['Titre']}}</h5>
                            <p class=' bounceInLeft'>{{Str::limit($data->Description,1000)}}
                            <div class=' vbh'>
                                <div class='btn btn-success  bounceInUp'>
                                    <a href="{{$data['link']}}" style="color: white">
                                        More information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <script >console.log({{$i}})</script>
                    <div class='carousel-item '>
                        <img class='d-block w-100' src='assets/image/{{$data['image']}}' alt='First slide'>
                        <div class='carousel-caption d-none d-md-block' style='padding-bottom: 150px;'>
                            <h5 class=' bounceInDown'>{{$data['Titre']}}</h5>
                            <p class=' bounceInLeft'>{{Str::limit($data->Description,1000)}}
                            <div class=' vbh'>
                                <div class='btn btn-success  bounceInUp'>
                                    <a href="{{$data['link']}}" style="color: white">
                                        More information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endif
        @endforeach
    </div>
</div>
