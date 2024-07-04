@props(["Annonces"])
<div>
    <div class="slider-detail">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php
                $j = 0;
                ?>
                @foreach($Annonces as $data)
                    @if($data['Date_Start']==date('Y-m-d')||$data['Date_Stop']>date('Y-m-d'))
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{$j}}" class="active"></li>
                            <?php
                            $j++;
                            ?>
                    @endif
                @endforeach
            </ol>
            <x-Home.Data.data_annonce :Annonces="$Annonces"/>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
