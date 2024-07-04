@props(['Pub'])
<div>
    <section id="Publication">
        <div class="container">
            <h2 style="display: inline-block;">Publication</h2>
            <div class="swiper-container">
                <div class="button-area" style="display: inline-block; margin-left: 850px;">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="swiper-wrapper">
                    @foreach($Pub as $index => $data)
                        @if(($data['Date_Public']<=date('Y-m-d'))&&$data['Status']=='Active')
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-img-top" style="position: relative;">
                                        <img src="/User_dashboard/Pub imag/{{$data['Type_blood']}}.jpg" alt="Card image">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">User: {{$data['UserName']}}</h4>
                                        <p class="card-text">{{$data['Description']}}</p>
                                        <input type="text" id="searchQuery{{$index}}" value="{{$data['location']}}" hidden>
                                        <div class="btn-cont">
                                            <button class="card-btn" id="searchButton{{$index}}" onclick="searchLocation('searchQuery{{$index}}')">location</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <script src="/User_dashboard/js/Maps.js"></script>
</div>
